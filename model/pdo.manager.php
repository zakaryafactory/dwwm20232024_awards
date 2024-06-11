<?php

/**
 * Class Manager
 *
 * This class represents a manager that handles database connection and operations.
 */
class PdoManager {

    /**
     * Establishes a connection to the database.
     *
     * @return PDO The PDO instance representing the connection to the database.
     * @throws Exception If there is a problem accessing the data, an exception is thrown with a message
     *                   advising to contact an administrator.
     */
    protected function connexion() {
        try {
            $db = new PDO('mysql:host=localhost:3306;dbname=awards;charset=utf8', 'awards_user', '5mMCYWS(Q*c-YnBa');
            return $db;
        }
        catch(Exception $e) {
            throw new Exception('Problème d\'accès aux données, merci de contacter un administrateur');
        }

    }

}