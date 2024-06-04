<?php
    function getListEtudiants(){
            // tableau des étudiants
            $etudiants = array (
                [
                    'prenom' => "Agustin",
                    'urlphoto' => "img/apprenants/agustin.png",
                ],
                [
                    'prenom' => "Annaëlle",
                    'urlphoto' => "img/apprenants/annaelle.png",
                ],                
                array(
                    'prenom' => "Barnabé",
                    'urlphoto' => "img/apprenants/Barnabe.png",
                ),
                [
                    'prenom' => "Christophe",
                    'urlphoto' => "img/apprenants/christophe.png",
                ],                
                [
                    'prenom' => "Cyril",
                    'urlphoto' => "img/apprenants/cyril.png",
                ],
                [
                    'prenom' => "Kilian",
                    'urlphoto' => "img/apprenants/kilian.png",
                ],
                [
                    'prenom' => "Martin",
                    'urlphoto' => "img/apprenants/martin.png",
                ],
                [
                    'prenom' => "Noé",
                    'urlphoto' => "img/apprenants/noe.png",
                ],
                [
                    'prenom' => "Stéphane",
                    'urlphoto' => "img/apprenants/stephane.png",
                ],
                [
                    'prenom' => "Vincent",
                    'urlphoto' => "img/apprenants/vincent.png",
                ],                                                
            );

            return $etudiants;
    }





    function getListeCategories($type = "apprenants"){
         // tableau des catégories
         if ($type=="apprenants"){
            $categories = array (
                [         
                    'nom' => "😀Le radieu",
                    'libelle' => "Prix destiné à l'élève qui éblouie en passant.",
                ],
                [
                    'nom' => "😇L'ami de tous",
                    'libelle' => " Prix destiné à l'élève le plus social.",
                ],
                [
                    'nom' => "🥳Le fêtard",
                    'libelle' => "Prix destiné à l'élève le plus festif.",
                ],
                [
                    'nom' => "🥵Le Titan du Travail",
                    'libelle' => "Prix destiné à l'élève le plus bosseur et sérieux.",
                ],
                [
                    'nom' => "🤩 Le Designeur",
                    'libelle' => "Prix destiné à l'élève qui adore le design et le front.",
                ], 
                [
                    'nom' => "🤓 Le Codeur émérite",
                    'libelle' => "Prix destiné à l'élève qui s'est marié avec le code et dans les méandres les plus obscurs de Visual Studio.",
                ],
                [
                    'nom' => "🤣La Fusée de l'Animation",
                    'libelle' => "Prix destiné à l'élève le plus fun, jamais à court de blague",
                ],
                [
                    'nom' => "😠Le râleur ou grincheux",
                    'libelle' => "Prix destiné à l'élève le plus frustré et le plus grognon",
                ]
            );
         }else{ //formateurs
            $categories = array (
                [         
                    'nom' => "😌 Le Défenseur de la Patience",
                    'libelle' => "Prix destiné au prof qui fait preuve d'une patience exceptionnelle dans toutes les situations.",
                ],
                [
                    'nom' => "🤪 Le Comique Magistral",
                    'libelle' => " Prix destiné au prof qui apporte la joie et le rire dans la salle de classe avec son humour exceptionnel et sa capacité à rendre l'apprentissage amusant.",
                ],
                [
                    'nom' => "😵L’étourdi",
                    'libelle' => "Prix destiné au prof maladroit, inattentif ou de distrait.",
                ]
            );

         }
         return $categories;
         


    }
?>