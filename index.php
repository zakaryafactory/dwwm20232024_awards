<?php

include_once "controller/votes.controller.php";

try {

    $page = isset( $_GET['page'] ) ? $_GET['page'] : '';

    switch( $page ) {
        case 'vote':

            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';

            break;
        default:
            $votes = new VotesController();
            $votes->displayForm();
    }
}
catch (Exception $e) {
    echo '<pre>';
    var_dump($e);
    echo '</pre>';
}


