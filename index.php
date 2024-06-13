<?php

include_once "controller/votes.controller.php";

try {

    $page = isset( $_GET['page'] ) ? $_GET['page'] : '';
    $votes = new VotesController();

    switch( $page ) {
        case 'downloadResults':
            $votes->downloadResultsJson();
            break;
        case 'toggleStatut':
            if( isset( $_GET['statut'] ) && isset($_GET['email'])) {
                $votes->adminToggleStatut( $_GET['statut'], $_GET['email'] );
            } else {
                throw new Exception('Paramètres obligatoires absents');
            }

            break;
        case 'admin':
            $votes->adminListVotes();
            break;
        case 'vote':
            $votes->validVoteForm();
            break;
        case 'results':
            $votes->results();
            break;
        default:
            $votes->displayForm();
    }
}
catch (Exception $e) {
    echo '<pre>';
    var_dump($e);
    echo '</pre>';
}


