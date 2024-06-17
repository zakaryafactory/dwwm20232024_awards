<section class="cards categorie categorie<?= $categorie['id_categorie'] ?>">
    <h2 class="titleCategorie">
    <img class="titleImage" src="<?= $categorie['url_smiley'] ?>">  
    <?= $categorie['nom_categorie'] ?></h2>
    <p class="libelleCategorie"><?= $categorie['description_categorie'] ?></p>

    <?php
        foreach ($nomines as $nomine) {
    ?>
            <div class="card">
                <label>
                    <img src="<?php echo $nomine['url_avatar'];?>"/>
                    <input required type="radio" name="categorie-<?= $categorie['id_categorie'] ?>" value="<?= $nomine['id_candidat'] ?>" />
                    <?php echo $nomine['prenom'] ;?>
                </label>
            </div>
    <?php
        }
    ?>
</section>
