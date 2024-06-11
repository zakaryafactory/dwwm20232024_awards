<?php

require_once("pdo.manager.php");
class CategoriesManager  extends PdoManager {

    public function getListOfCategories( $role = 'apprenant' ) {
        
        $db = $this->connexion();
        try {

            $sql = "SELECT * FROM categorie  C
                    INNER JOIN role R ON C.id_role = R.id_role
                    where R.nom_role = '$role';";
            //echo $sql;
            $request = $db->query($sql);
        } catch (Exception $e) {
            throw new Exception('Erreur lors de la récupération des avis.');
        }

        return $request->fetchAll();

        /*if($type=="apprenants"){

            $categories = array (
                [
                    'id' => 1,
                    'nom' => "😀Le radieu",
                    'libelle' => "Prix destiné à l'élève qui éblouie en passant.",
                ],
                [
                    'id' => 2,
                    'nom' => "😇L'ami de tous",
                    'libelle' => " Prix destiné à l'élève le plus social.",
                ],
                [
                    'id' => 3,
                    'nom' => "🥳Le fêtard",
                    'libelle' => "Prix destiné à l'élève le plus festif.",
                ],
                [
                    'id' => 4,
                    'nom' => "🥵Le Titan du Travail",
                    'libelle' => "Prix destiné à l'élève le plus bosseur et sérieux.",
                ],
                [
                    'id' => 5,
                    'nom' => "🤩 Le Designeur",
                    'libelle' => "Prix destiné à l'élève qui adore le design et le front.",
                ],
                [
                    'id' => 6,
                    'nom' => "🤓 Le Codeur émérite",
                    'libelle' => "Prix destiné à l'élève qui s'est marié avec le code et dans les méandres les plus obscurs de Visual Studio.",
                ],
                [
                    'id' => 7,
                    'nom' => "🤣La Fusée de l'Animation",
                    'libelle' => "Prix destiné à l'élève le plus fun, jamais à court de blague",
                ],
                [
                    'id' => 8,
                    'nom' => "😠Le râleur ou grincheux",
                    'libelle' => "Prix destiné à l'élève le plus frustré et le plus grognon",
                ],
            );
        } elseif( $type === "formateurs") { //formateurs
            $categories = array (
                [
                    'id' => 9,
                    'nom' => "😌 Le Défenseur de la Patience",
                    'libelle' => "Prix destiné au prof qui fait preuve d'une patience exceptionnelle dans toutes les situations.",
                ],
                [
                    'id' => 10,
                    'nom' => "🤪 Le Comique Magistral",
                    'libelle' => " Prix destiné au prof qui apporte la joie et le rire dans la salle de classe avec son humour exceptionnel et sa capacité à rendre l'apprentissage amusant.",
                ],
                [
                    'id' => 11,
                    'nom' => "😵L’étourdi",
                    'libelle' => "Prix destiné au prof maladroit, inattentif ou de distrait.",
                ]
            );

        }*/
        return $categories;

    }

}