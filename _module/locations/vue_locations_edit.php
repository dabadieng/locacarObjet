        <form method="post" action="<?=hlien("locations","edit")?>">
		<input type="hidden" name="loc_id" id="loc_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='loc_type'>Type</label>
                            <input id='loc_type' name='loc_type' type='text' size='50' value='<?=mhe($loc_type)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='loc_date_demande'>Date_demande</label>
                            <input id='loc_date_demande' name='loc_date_demande' type='text' size='50' value='<?=mhe($loc_date_demande)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='loc_date_maj'>Date_maj</label>
                            <input id='loc_date_maj' name='loc_date_maj' type='text' size='50' value='<?=mhe($loc_date_maj)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='loc_statut'>Statut</label>
                            <input id='loc_statut' name='loc_statut' type='text' size='50' value='<?=mhe($loc_statut)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='loc_date_heure_debut'>Date_heure_debut</label>
                            <input id='loc_date_heure_debut' name='loc_date_heure_debut' type='text' size='50' value='<?=mhe($loc_date_heure_debut)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='loc_date_heure_fin'>Date_heure_fin</label>
                            <input id='loc_date_heure_fin' name='loc_date_heure_fin' type='text' size='50' value='<?=mhe($loc_date_heure_fin)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='loc_gestionnaire'>Gestionnaire</label>
                            <input id='loc_gestionnaire' name='loc_gestionnaire' type='text' size='50' value='<?=mhe($loc_gestionnaire)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='loc_agence_depart'>Agence_depart</label>
                            <input id='loc_agence_depart' name='loc_agence_depart' type='text' size='50' value='<?=mhe($loc_agence_depart)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='loc_agence_arrivee'>Agence_arrivee</label>
                            <input id='loc_agence_arrivee' name='loc_agence_arrivee' type='text' size='50' value='<?=mhe($loc_agence_arrivee)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='loc_client'>Client</label>
                            <input id='loc_client' name='loc_client' type='text' size='50' value='<?=mhe($loc_client)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='loc_vehicule'>Vehicule</label>
                            <input id='loc_vehicule' name='loc_vehicule' type='text' size='50' value='<?=mhe($loc_vehicule)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              