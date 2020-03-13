        <form method="post" action="<?=hlien("definir","edit")?>">
		<input type="hidden" name="def_id" id="def_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='def_tarif'>Tarif</label>
                            <input id='def_tarif' name='def_tarif' type='text' size='50' value='<?=mhe($def_tarif)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='def_plage_horaire'>Plage_horaire</label>
                            <input id='def_plage_horaire' name='def_plage_horaire' type='text' size='50' value='<?=mhe($def_plage_horaire)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='def_categorie'>Categorie</label>
                            <input id='def_categorie' name='def_categorie' type='text' size='50' value='<?=mhe($def_categorie)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              