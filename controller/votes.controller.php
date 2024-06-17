<?php

include_once "model/categories.manager.php";
include_once "model/users.manager.php";

include_once "model/votes.manager.php";

class VotesController {

    public function __construct() {

    }

    public function results() {

        $results = [];
        // récupération des catégories de votes
        $categoriesManager = new CategoriesManager();
        $categoriesStudents = $categoriesManager->getListOfCategories("apprenant");
        $categoriesTrainers = $categoriesManager->getListOfCategories("formateur");

        $votesManager = new VotesManager();

        foreach( $categoriesStudents as $category ) {

            $results['students'][$category['id_categorie']]['id_categorie'] = $category['id_categorie'];
            $results['students'][$category['id_categorie']]['nom_categorie'] = $category['nom_categorie'];
            $results['students'][$category['id_categorie']]['votes'] = $votesManager->getWinnersByCategory($category['id_categorie']);

        }

        foreach( $categoriesTrainers as $category ) {

            $results['trainers'][$category['id_categorie']]['id_categorie'] = $category['id_categorie'];
            $results['trainers'][$category['id_categorie']]['nom_categorie'] = $category['nom_categorie'];
            $results['trainers'][$category['id_categorie']]['votes'] = $votesManager->getWinnersByCategory($category['id_categorie']);

        }

        require('view/votes.results.view.php');

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

    public function adminListVotes() {

        $votesManager = new VotesManager();
        $votants = $votesManager->getAllVotants();

        require('view/admin/votes.view.php');
    }

    public function adminToggleStatut($statut, $email) {

        $votesManager = new VotesManager();
        $votesManager->toggleStatut($statut, $email);

        header('Location: index.php?page=admin');

    }

    public function downloadResultsJson() {

        $votesManager = new VotesManager();
        $allVotes = $votesManager->getAllVotes();
        $data = json_encode($allVotes);

// Definir le nom du fichier
        $fileName = "votes.json";

// en-têtes pour le téléchargement
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($fileName).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . strlen($data));
        flush();

// Envoi des données au navigateur pour le téléchargement
        echo $data;

    }

    public function printResultsJson() {

        $votesManager = new VotesManager();
        $allVotes = $votesManager->getAllVotes();
        $data = json_encode($allVotes);

        // En-têtes pour l'affichage dans le navigateur
        header('Content-Type: application/json');
        echo $data;

    }


}