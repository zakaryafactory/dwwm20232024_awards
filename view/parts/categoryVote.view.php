<section class="cards categorie categorie<?= $categorie['id'] ?>">
    <h2 class="titleCategorie"><?= $categorie['nom'] ?></h2>
    <p class="libelleCategorie"><?= $categorie['libelle'] ?></p>

    <?php
        foreach ($users as $user) {
    ?>
            <div class="card">
                <label>
                    <img src="<?php echo $user['urlphoto'];?>"/>
                    <input type="radio" name="categorie<?= $categorie['id'] ?>" value="<?= $user['id'] ?>" />
                    <?php echo $user['prenom'] ;?>
                </label>
            </div>
    <?php
        }
    ?>
</section>
