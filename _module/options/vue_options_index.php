    <h2>options</h2>
    <p><a class="btn btn-primary" href="<?=hlien("options","edit","id",0)?>">Nouveau options</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Nom</th>
			<th>Tarif</th><th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['opt_id'])?></td>
			<td><?=mhe($row['opt_nom'])?></td>
			<td><?=mhe($row['opt_tarif'])?></td><td><a class="btn btn-warning" href="<?=hlien("options","edit","id",$row["opt_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("options","del","id",$row["opt_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>