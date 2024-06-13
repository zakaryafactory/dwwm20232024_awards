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
            $db = new PDO('mysql:host=localhost:33061;dbname=awards;charset=utf8', 'root', '');
            return $db;
        }
        catch(Exception $e) {
            throw new Exception('Problème d\'accès aux données, merci de contacter un administrateur');
        }

    }

}