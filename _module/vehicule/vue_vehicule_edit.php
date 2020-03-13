        <form method="post" action="<?=hlien("vehicule","edit")?>">
		<input type="hidden" name="veh_id" id="veh_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='veh_immatriculation'>Immatriculation</label>
                            <input id='veh_immatriculation' name='veh_immatriculation' type='text' size='50' value='<?=mhe($veh_immatriculation)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='veh_model'>Model</label>
                            <input id='veh_model' name='veh_model' type='text' size='50' value='<?=mhe($veh_model)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='veh_site'>Site</label>
                            <input id='veh_site' name='veh_site' type='text' size='50' value='<?=mhe($veh_site)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='veh_agence'>Agence</label>
                            <input id='veh_agence' name='veh_agence' type='text' size='50' value='<?=mhe($veh_agence)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='veh_categorie'>Categorie</label>
                            <input id='veh_categorie' name='veh_categorie' type='text' size='50' value='<?=mhe($veh_categorie)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              