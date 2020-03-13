    <h2>locations</h2>
    <p><a class="btn btn-primary" href="<?=hlien("locations","edit","id",0)?>">Nouveau locations</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Type</th>
			<th>Date_demande</th>
			<th>Date_maj</th>
			<th>Statut</th>
			<th>Date_heure_debut</th>
			<th>Date_heure_fin</th>
			<th>Gestionnaire</th>
			<th>Agence_depart</th>
			<th>Agence_arrivee</th>
			<th>Client</th>
			<th>Vehicule</th>
			<th>modifier</th>
			<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['loc_id'])?></td>
			<td><?=mhe($row['loc_type'])?></td>
			<td><?=mhe($row['loc_date_demande'])?></td>
			<td><?=mhe($row['loc_date_maj'])?></td>
			<td><?=mhe($row['loc_statut'])?></td>
			<td><?=mhe($row['loc_date_heure_debut'])?></td>
			<td><?=mhe($row['loc_date_heure_fin'])?></td>
			<td><?=mhe($row['loc_gestionnaire'])?></td>
			<td><?=mhe($row['loc_agence_depart'])?></td>
			<td><?=mhe($row['loc_agence_arrivee'])?></td>
			<td><?=mhe($row['loc_client'])?></td>
			<td><?=mhe($row['loc_vehicule'])?></td><td><a class="btn btn-warning" href="<?=hlien("locations","edit","id",$row["loc_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("locations","del","id",$row["loc_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>