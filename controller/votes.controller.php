<?php

include_once "model/categories.manager.php";
include_once "model/users.manager.php";

class VotesController {

    public function __construct() {

    }

    public function displayForm() {


        // récupération des catégories de votes
        $categoriesManager = new CategoriesManager();
        $categoriesStudents = $categoriesManager->getListOfCategories("apprenants");
        $categoriesTrainers = $categoriesManager->getListOfCategories("formateurs");

        // récupération des nominés
        $usersManager = new UsersManager();
        $students = $usersManager->getStudents();
        $trainers = $usersManager->getTrainers();

        require('view/votes.view.php');
    }

}