<?php
class Locations extends Entity {
	public function __construct($id=0) {
		parent::__construct("locations", "loc_id",$id);
	}

	static public function listeAll() {
		$sql="select * from locations, agence, departement, utilisateur, vehicule, options, equiper where loc_agence_depart=age_id and loc_agence_arrivee=age_id and age_departement=dep_id and loc_gestionnaire=uti_id and loc_client=uti_id and loc_vehicule=veh_id";
		

		return self::$link->query($sql);
		}

		static function montantByLocation($loc_id) {
			$sql="";
			return self::$link->query($sql);
		}

		static function montantByClient($uti_id) {
			$sql="select * from location,utilisateur, categorie , vehicule, agence where uti_id=loc_client and loc_client=$uti_id and loc_categorie=cat_id and loc_vehicule=veh_id and veh_agence=age_id ";
			return self::$link->query($sql);
		}

		static function locationActuelle($uti_id) {
			$sql="select * from location,utilisateur, categorie, vehicule where uti_id=loc_client and loc_client=$uti_id and loc_categorie=cat_id and veh_id=loc_vehicule and now() between loc_date_heure_debut and  loc_date_heure_fin ";
			return self::$link->query($sql);
	
		}

		static function locationPasse($uti_id) {
			$sql="select * from location,utilisateur, categorie , vehicule, agence where uti_id=loc_client and loc_client=$uti_id and loc_categorie=cat_id and loc_vehicule=veh_id and veh_agence=age_id and loc_date_heure_fin<now() ";
			return self::$link->query($sql);
		}

		static function locationByAgeByStatut($age_id, $age_statut) {
			$sql="select loc_statut, loc_id, age_nom
			from locations, agence
			where loc_agence_depart=age_id and  loc_agence_depart=$age_id
			and age_statut=$age_statut
			order by loc_statut";
			
			return self::$link->query($sql);
		}

		static public function dateFinFinder(){
			$sql="select * from location, vehicule where veh_id=loc_vehicule and loc_date_heure_debut > now() and loc_date_heure_fin<now() ";
			return self::$link->query($sql);
		}

		static public function dureeLocation($loc_date_heure_debut,$loc_date_heure_fin){
			$sql="select loc_id, def_tarif*duree prix from loc_duree, plage_horaire, definir where cat_id=def_categorie  and plg_id=def_plage_horaire and duree between plg_hmin and plg_hmax";
			return self::$link->query($sql);
		}
}
?>
