<?php
class Ctr_accueil extends Ctr_controleur
{

    public function __construct($action)
    {
        parent::__construct("accueil", $action);
        $a = "a_$action";
        $this->$a();
    }

    function a_index()
    {
        if (isset($_POST["chercher"])) {
            extract($_POST);
            $_SESSION['cat_id'] = $cat_id;
            $_SESSION['age_arrive'] = $age_id;
            $_SESSION['age_depart'] = $age_id;
            $_SESSION['loc_date_heure_debut'] = $loc_date_heure_debut;
            $_SESSION['loc_date_heure_fin'] = $loc_date_heure_fin;

            //header("location:" . hlien("accueil", "resultat"));  
        } else {
            echo "<p>Text a afficher</p>";
        }

        require $this->gabarit;
    }

    function a_ville()
    {
        if (isset($_GET["dept"])) {
            //var_dump($_GET["dept"]); 
            $dept = $_GET["dept"];
            echo  Agence::listeAgenceByDep($dept);
        }
    }

    function a_chercher()
    {
        if (isset($_POST["chercher"])) {
            extract($_POST);
            $_SESSION['cat_id'] = $cat_id;
            $_SESSION['age_arrive'] = $age_id;
            $_SESSION['age_depart'] = $age_id;
            $_SESSION['loc_date_heure_debut'] = $loc_date_heure_debut;
            $_SESSION['loc_date_heure_fin'] = $loc_date_heure_fin;
            $result = Vehicule::vehiculeDispo($cat_id, $age_id, $loc_date_heure_debut, $loc_date_heure_fin);
            require $this->gabarit;
        }
    }

    function a_reservation()
    {
        $result = Vehicule::vehiculeSelect($_SESSION["cat_id"], $_SESSION['age_depart'], $_SESSION['loc_date_heure_debut'], $_SESSION['loc_date_heure_fin'], $_GET['id']);
        require $this->gabarit;
    }

    function a_edit()
    {
        if (isset($_POST["btsubmit"])) {
            extract($_POST);

            $user = new User();
            $user->charger($use_id);

            if ($use_id == 1)
                $_SESSION["use_id"] = 1;
            else if ($uti_id == 2)
                $_SESSION["use_id"] = 2;
            else
                $_SESSION["use_id"] = 3;


            header("location:" . hlien("accueil", "index"));
        } else {
            $use_id = "";
        }

        require $this->gabarit;
    }
}
