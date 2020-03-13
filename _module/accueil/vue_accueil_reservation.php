<h2>Reservation</h2>
<?php
foreach ($result as $row) {
    extract($row);
} ?>

<div>
    image
    <ul>
        <li>Model: <?= mhe($row['veh_model']) ?></li>
        <li>Categorie: <?= mhe($row['cat_nom']) ?></li>
        <li>Agence depart: <?= mhe($row['age_nom']) ?></li>
        <li>Agence arrive: <?= mhe($row['age_nom']) ?></li>
        <li>Date depart: <?= mhe($_SESSION['loc_date_heure_debut']) ?></li>
        <li>Date arrive: <?= mhe($_SESSION['loc_date_heure_fin']) ?></li>
    </ul>
    <h3>prix (sans option): <?= mhe($row['prix']) ?></h3>
</div>
<?php
foreach ($options as $row) {
    extract($row); ?>

    <p>
        <label for='<?=mhe($row["opt_nom"])?>'><?=mhe($row["opt_nom"])?> Prix: <?=mhe($row["opt_tarif"])?> €</label>
        <input type='checkbox' name='<?=mhe($row["opt_nom"])?>' id='<?=mhe($row["opt_nom"])?>'/>
    </p>

<?php  } ?>


<h3>Prix total: </h3>
<form method="post" action="<?= hlien("location", "index") ?>">
    <div class="row mb-3"></div>

    <input class="btn btn-warning" type="submit" name="annuler" id="annuler" value="Annuler" />
    <input class="btn btn-success" type="submit" name="valider" id="valider" value="valider" />

</form>
<script>
    //checkbox
    let listeInput = document.querySelectorAll("input[type=checkbox]");
    listeInput.forEach(elt => {
    elt.checked = true;
    elt.addEventListener("click", calculerPrix);
});

    function calculerPrix(){

    }
console.log(listeInput);




    //multiselection
    let listInput = document.getElementById('options');
    let listOption = listInput.querySelectorAll('option');
    listInput.addEventListener("change", filterByKeyword);

    function filterByKeyword(e) {
        listtr.forEach(tr => tr.style.display = "none");

        listOption.forEach(elt => {
            if (elt.selected) {
                listtr.forEach(tr => {
                    if (tr.className.includes(elt.value))
                        tr.style.display = "table-row";
                });
            }
        });
    }
</script>