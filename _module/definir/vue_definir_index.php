    <h2>definir</h2>
    <p><a class="btn btn-primary" href="<?=hlien("definir","edit","id",0)?>">Nouveau definir</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Tarif</th>
			<th>Plage_horaire</th>
			<th>Categorie</th><th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['def_id'])?></td>
			<td><?=mhe($row['def_tarif'])?></td>
			<td><?=mhe($row['def_plage_horaire'])?></td>
			<td><?=mhe($row['def_categorie'])?></td><td><a class="btn btn-warning" href="<?=hlien("definir","edit","id",$row["def_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("definir","del","id",$row["def_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>