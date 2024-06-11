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
        var_dump($students);

        return $students;
    }

    public function getTrainers() {
        $trainers = array (
            [
                'id' => 11,
                'prenom' => "Christophe",
                'urlphoto' => "public/img/formateurs/christophe.png",
            ],
            [
                'id' => 12,
                'prenom' => "Laëtitia",
                'urlphoto' => "public/img/formateurs/laetitia.png",
            ],
            [
                'id' => 13,
                'prenom' => "Luc",
                'urlphoto' => "public/img/formateurs/luc.png",
            ],
            [
                'id' => 14,
                'prenom' => "Cédric",
                'urlphoto' => "public/img/formateurs/cedric.png",
            ],
            [
                'id' => 15,
                'prenom' => "Tony",
                'urlphoto' => "public/img/formateurs/tony.png",
            ],
        );

        return $trainers;
    }

}