<?php

class Ctr_locations extends Ctr_controleur {

	public $classTable;

    public function __construct($action) {
        parent::__construct("locations", $action);
        $this->table="locations";
        $this->classTable = "Locations";
        $this->cle = "loc_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Locations::findAll("locations");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		if (isset($_POST["btSubmit"])) {
			$u=new Locations();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
			header("location:index.php?m=locations");
		} else {				
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u=new Locations($id);
			extract($u->data);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Locations::supprimer("locations","loc_id",$_GET["id"]);
		}
		header("location:index.php?m=locations");
	}
}

?>