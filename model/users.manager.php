<?php

class UsersManager  extends PdoManager {

    public function getStudents() {

        $db = $this->connexion();
        try {

            $sql = "SELECT * FROM candidat  C
                    INNER JOIN role R ON C.id_role = R.id_role
                    where R.nom_role = 'apprenant';";
            //echo $sql;
            $request = $db->query($sql);
        } catch (Exception $e) {
            throw new Exception('Erreur lors de la récupération des avis.');
        }

        $students = $request->fetchAll();        
        //var_dump($students);

        return $students;
    }

    public function getTrainers() {

        $db = $this->connexion();
        try {

            $sql = "SELECT * FROM candidat  C
                    INNER JOIN role R ON C.id_role = R.id_role
                    where R.nom_role = 'formateur';";
            //echo $sql;
            $request = $db->query($sql);
        } catch (Exception $e) {
            throw new Exception('Erreur lors de la récupération des avis.');
        }

        $trainers = $request->fetchAll();        
        //var_dump($students);
        return $trainers;
    }

}