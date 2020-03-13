    <h2>vehicule</h2>
    <p><a class="btn btn-primary" href="<?=hlien("vehicule","edit","id",0)?>">Nouveau vehicule</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Immatriculation</th>
			<th>Model</th>
			<th>Site</th>
			<th>Agence</th>
			<th>Categorie</th>
			<th>modifier</th>
			<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['veh_id'])?></td>
			<td><?=mhe($row['veh_immatriculation'])?></td>
			<td><?=mhe($row['veh_model'])?></td>
			<td><?=mhe($row['veh_site'])?></td>
			<td><?=mhe($row['veh_agence'])?></td>
			<td><?=mhe($row['veh_categorie'])?></td><td><a class="btn btn-warning" href="<?=hlien("vehicule","edit","id",$row["veh_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("vehicule","del","id",$row["veh_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>