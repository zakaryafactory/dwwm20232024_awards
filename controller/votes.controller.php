<?php

include_once "model/categories.manager.php";
include_once "model/users.manager.php";

class VotesController {

    public function __construct() {

    }

    public function displayForm() {


        // récupération des catégories de votes
        $categoriesManager = new CategoriesManager();
        $categoriesStudents = $categoriesManager->getListOfCategories("apprenant");
        $categoriesTrainers = $categoriesManager->getListOfCategories("formateur");
        var_dump($categoriesStudents);

        // récupération des nominés
        $usersManager = new UsersManager();
        $candidats = $usersManager->getStudents();
        $formateurs = $usersManager->getTrainers();

        require('view/votes.view.php');
    }

}