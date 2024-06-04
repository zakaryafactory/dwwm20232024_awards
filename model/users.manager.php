<?php

class UsersManager {

    public function getStudents() {
        $students = array (
            [
                'id' => 1,
                'prenom' => "Agustin",
                'urlphoto' => "public/img/apprenants/agustin.png",
            ],
            [
                'id' => 2,
                'prenom' => "Annaëlle",
                'urlphoto' => "public/img/apprenants/annaelle.png",
            ],
            [
                'id' => 3,
                'prenom' => "Barnabé",
                'urlphoto' => "public/img/apprenants/Barnabe.png",
            ],
            [
                'id' => 4,
                'prenom' => "Christophe",
                'urlphoto' => "public/img/apprenants/christophe.png",
            ],
            [
                'id' => 5,
                'prenom' => "Cyril",
                'urlphoto' => "public/img/apprenants/cyril.png",
            ],
            [
                'id' => 6,
                'prenom' => "Kilian",
                'urlphoto' => "public/img/apprenants/kilian.png",
            ],
            [
                'id' => 7,
                'prenom' => "Martin",
                'urlphoto' => "public/img/apprenants/martin.png",
            ],
            [
                'id' => 8,
                'prenom' => "Noé",
                'urlphoto' => "public/img/apprenants/noe.png",
            ],
            [
                'id' => 9,
                'prenom' => "Stéphane",
                'urlphoto' => "public/img/apprenants/stephane.png",
            ],
            [
                'id' => 10,
                'prenom' => "Vincent",
                'urlphoto' => "public/img/apprenants/vincent.png",
            ],
        );

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