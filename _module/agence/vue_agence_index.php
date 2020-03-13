	<h2>agence</h2>
	<form method="POST" action="<?= hlien("agence", "index") ?>">
		<div class="row">
			<div class="col">
				<label for='dep_id'>Selectionne ton departement</label>
				<select class="form-control" id='dep_id' name='dep_id'>
					<?= Entity::HTMLselect("select dep_id,dep_nom from departement, agence where age_departement=dep_id", "dep_id", "dep_nom", $dep_nom); ?>
				</select>
			</div>
			<div>
				<input class="btn btn-success" type="submit" name="chercher" id="chercher" value="chercher" />
			</div>

		</div>

	</form>
	<p><a class="btn btn-primary" href="<?= hlien("agence", "edit", "id", 0) ?>">Nouveau agence</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>

				<th>Id</th>
				<th>Nom</th>
				<th>Departement</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($result as $row) {
				extract($row); ?>
				<tr>

					<td><?= mhe($row['age_id']) ?></td>
					<td><?= mhe($row['age_nom']) ?></td>
					<td><?= mhe($row['age_departement']) ?></td>
					<td><a class="btn btn-warning" href="<?= hlien("agence", "edit", "id", $row["age_id"]) ?>">Modifier</a></td>
					<td><a class="btn btn-danger" href="<?= hlien("agence", "del", "id", $row["age_id"]) ?>">Supprimer</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>