<?php
class Vehicule extends Entity {
	public function __construct($id=0) {
		parent::__construct("vehicule", "veh_id",$id);
	}

	static function vehiculeDispo($cat_id,$age_id,$fin,$debut) {
		$sql="select def_tarif*timestampdiff(hour, '$fin', '$debut') prix, veh_id, veh_model, cat_id, cat_nom, age_id, age_nom from definir, vehicule, categorie, agence where def_categorie=cat_id and cat_id=$cat_id and age_id=$age_id and veh_categorie=cat_id and veh_agence=age_id  and veh_id not in (select distinct loc_vehicule from locations where (loc_date_heure_debut < '$fin' and loc_date_heure_fin > '$debut'))";
		return self::$link->query($sql);
	}

	static function vehiculeSelect($cat_id,$age_id,$fin,$debut, $veh_id) {
		$sql="select def_tarif*timestampdiff(hour, '$fin', '$debut') prix, veh_id, veh_model, cat_id, cat_nom, age_id, age_nom from definir, vehicule, categorie, agence where veh_id=$veh_id and def_categorie=cat_id and cat_id=$cat_id and age_id=$age_id and veh_categorie=cat_id and veh_agence=age_id  and veh_id not in (select distinct loc_vehicule from locations where (loc_date_heure_debut < '$fin' and loc_date_heure_fin > '$debut'))";
		return self::$link->query($sql);
	}

	static function findVehiculeByCategorie($model)
	{
		$sql = "select * from vehicule where veh_model = :model";
		$statement = self::$link->prepare($sql);
		$statement->bindValue(":model", $model, PDO::PARAM_STR);
		if (!$statement->execute())
			exit; //erreur d'execution
		return $statement->fetch();
	}
	
	
	
}
?>
