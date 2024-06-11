<section class="cards categorie categorie<?= $categorie['id_categorie'] ?>">
    <h2 class="titleCategorie">
    <img src="<?= $categorie['url_smiley'] ?>">  
    <?= $categorie['nom_categorie'] ?></h2>
    <p class="libelleCategorie"><?= $categorie['description_categorie'] ?></p>

    <?php
        foreach ($candidats as $candidat) {
    ?>
            <div class="card">
                <label>
                    <img src="<?php echo $candidat['url_avatar'];?>"/>
                    <input type="radio" name="categorie<?= $categorie['id_categorie'] ?>" value="<?= $candidat['id_candidat'] ?>" />
                    <?php echo $candidat['prenom'] ;?>
                </label>
            </div>
    <?php
        }
    ?>
</section>
