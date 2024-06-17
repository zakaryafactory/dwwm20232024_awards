<?php
//On démarre une nouvelle session
session_start();

include_once "controller/votes.controller.php";

try {

    $page = isset( $_GET['page'] ) ? $_GET['page'] : '';
    $votes = new VotesController();

    // Check Token
    $token = isset( $_GET['token'] ) ? $_GET['token'] : null;
    $grantedUser = $votes->checkGrantedUser($token);

    switch( $page ) {
        case 'printResults':
            $votes->printResultsJson();
            break;
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
            if( !$grantedUser ) {
                throw new Exception('Tu n\'a pas le droit d\'accéder à cette page.');
            }
            $votes->adminListVotes();
            break;
        case 'vote':
            $votes->validVoteForm();
            break;
        case 'results':
            if( !$grantedUser ) {
                throw new Exception('Tu n\'a pas le droit d\'accéder à cette page.');
            }
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


