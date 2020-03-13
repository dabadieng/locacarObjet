        <form method="post" action="<?=hlien("equiper","edit")?>">
		<input type="hidden" name="equ_id" id="equ_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='equ_location'>Location</label>
                            <input id='equ_location' name='equ_location' type='text' size='50' value='<?=mhe($equ_location)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='equ_option'>Option</label>
                            <input id='equ_option' name='equ_option' type='text' size='50' value='<?=mhe($equ_option)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              