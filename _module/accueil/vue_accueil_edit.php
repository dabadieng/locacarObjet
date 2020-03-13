<form method="post" action="">

    <div class='form-group'>
        <label for='dep_nom'>Selectionne ton departement</label>
        <select class="form-control" id='dep_nom' name='dep_nom'>
            <?= Entity::HTMLselect("select dep_id,dep_nom from departement", "dep_id", "dep_nom", $dep_nom); ?>
        </select>
    </div>
    <div class='form-group'>
        <label for='age_nom'>Service de reservation</label>
        <select class="form-control" id='age_nom' name='age_nom'>
            <?= Entity::HTMLselect("select age_id,age_nom from agence", "age_id", "age_nom", $age_nom); ?>
        </select>
    </div>

    <div class='form-group'>
        <label for='loc_date_heure_debut	'>Date depart</label>
        <input id='loc_date_heure_debut	' name='loc_date_heure_debut' type='date' size='50' value='<?php echo date('Y-m-d'); ?>' class='form-control' />
    </div>
    <div class='form-group'>
        <label for='loc_date_heure_fin'>Date retour</label>
        <input id='loc_date_heure_fin' name='loc_date_heure_fin' type='date' size='50' value='<?php echo date('Y-m-d'); ?>' class='form-control' />
    </div>


    <input class="btn btn-success" type="submit" name="btSubmit" value="Chercher" />
</form>