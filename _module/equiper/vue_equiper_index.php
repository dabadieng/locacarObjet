    <h2>equiper</h2>
    <p><a class="btn btn-primary" href="<?=hlien("equiper","edit","id",0)?>">Nouveau equiper</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Location</th>
			<th>Option</th><th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['equ_id'])?></td>
			<td><?=mhe($row['equ_location'])?></td>
			<td><?=mhe($row['equ_option'])?></td><td><a class="btn btn-warning" href="<?=hlien("equiper","edit","id",$row["equ_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("equiper","del","id",$row["equ_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>