<?php
ob_start();
?>

<form action="index.php?page=vote" method="POST">

    <h2>Votez pour les apprenants</h2>

    <?php
        $users = $students;
        foreach($categoriesStudents as $categorie) {
            require('view/parts/categoryVote.view.php');
        }
    ?>

    <h2>Votez pour les formateurs</h2>
    <?php
        $users = $trainers;
        foreach($categoriesTrainers as $categorie) {
            require('view/parts/categoryVote.view.php');
        }
    ?>

    <div class="action">
        <button type="submit"class="button">Voter !</button>
    </div>

    <?php

    $content = ob_get_clean();
    require('view/base.view.php');