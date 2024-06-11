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

    }

}