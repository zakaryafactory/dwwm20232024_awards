<?php

include_once "model/categories.manager.php";
include_once "model/users.manager.php";

include_once "model/votes.manager.php";

class VotesController {

    public function __construct() {

    }

    public function validVoteForm() {

        
        $votesManager = new VotesManager();
        $response = $votesManager->insertVotes($_POST, $_POST['email']);
        require('view/votes.validation.view.php');
    }

    public function displayForm() {

        // récupération des catégories de votes
        $categoriesManager = new CategoriesManager();
        $categoriesStudents = $categoriesManager->getListOfCategories("apprenant");
        $categoriesTrainers = $categoriesManager->getListOfCategories("formateur");

        // récupération des nominés
        $usersManager = new UsersManager();
        $candidats = $usersManager->getStudents();
        $formateurs = $usersManager->getTrainers();

        require('view/votes.view.php');
    }

}