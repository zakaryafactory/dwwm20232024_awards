<?php
ob_start();
?>

<form action="index.php?page=vote" method="POST">

    <h2>Votez pour les apprenants</h2>

    <?php
        $nomines = $candidats;
        foreach($categoriesStudents as $categorie) {
            require('view/parts/categoryVote.view.php');
        }
    ?>

    <h2>Votez pour les formateurs</h2>
    <?php
        $nomines = $formateurs;
        foreach($categoriesTrainers as $categorie) {
            require('view/parts/categoryVote.view.php');
        }
    ?>

    <div class="email_wrapper">
        <label for="email">Votre email *</label>
        <input id="email" name="email" size="30" type="email" required></div>

    <div class="action">
        <button type="submit"class="button">Voter !</button>
    </div>
</form>

    <?php

    $content = ob_get_clean();
    require('view/base.view.php');