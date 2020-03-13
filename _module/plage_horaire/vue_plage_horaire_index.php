    <h2>plage_horaire</h2>
    <p><a class="btn btn-primary" href="<?=hlien("plage_horaire","edit","id",0)?>">Nouveau plage_horaire</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Hmin</th>
			<th>Hmax</th>
			<th>modifier</th>
			<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['plg_id'])?></td>
			<td><?=mhe($row['plg_hmin'])?></td>
			<td><?=mhe($row['plg_hmax'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("plage_horaire","edit","id",$row["plg_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("plage_horaire","del","id",$row["plg_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>