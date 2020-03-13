    <h2>departement</h2>
    <p><a class="btn btn-primary" href="<?=hlien("departement","edit","id",0)?>">Nouveau departement</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Code</th>
			<th>Nom</th><th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['dep_id'])?></td>
			<td><?=mhe($row['dep_code'])?></td>
			<td><?=mhe($row['dep_nom'])?></td><td><a class="btn btn-warning" href="<?=hlien("departement","edit","id",$row["dep_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("departement","del","id",$row["dep_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>