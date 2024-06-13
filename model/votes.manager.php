<?php

require_once("pdo.manager.php");
class VotesManager  extends PdoManager {

    public function insertVotes($DATA_POST, $email) {
        
        $db = $this->connexion();
        try {
            // si l'email a déjà des enregistrement dans la table vote
            if($this->checkEmail($email) == false){
                $ip = $_SERVER['REMOTE_ADDR'];
                //print_r($DATA_POST);
                $nb_vote = 0;
                foreach ($DATA_POST as $key => $value) {
                    $categs = explode("-", $key);
                    if( !empty($categs[1])){
                        //echo $categs[1]; 
                        $value2 = htmlspecialchars($value);
                        $email2 = htmlspecialchars($email);
                        $sql =  "INSERT INTO `vote`(`email`, `id_categorie`, `id_candidat`,`ip`,`statut`)";
                        $sql .= "VALUES ('$email', $categs[1],$value2,'$ip', '1')";
                        $request[] = $db->query($sql);
                        $nb_vote++;
                    }
                    //echo $sql."<hr>";
                };
                $result = "$nb_vote votes ajoutés, merci de votre participation";
            }else{
                $result = "l'email <i>$email</i> a déjà voté !";
            }


 
            
            /*          $request = $db->query($sql);*/
            } catch (Exception $e) {
                return 'Erreur lors de l\'enregistrement de votre vote.';
            }

        return $result;

    }

    public function checkEmail($email) {

            $db = $this->connexion();
            try {
                $sql = "SELECT distinct(email) FROM vote  
                        WHERE `email` LIKE '$email'";
                //echo $sql;
                $request = $db->query($sql);
            } catch (Exception $e) {
                throw new Exception('Erreur lors de la vérification de l\'email.');
            }
            $emailvalid = $request->fetch();    
            return $emailvalid;
    }

    public function getWinnersByCategory($id_category) {
        return $this->getVotesByCategory($id_category, 3);
    }

    public function getAllVotants() {

        $db = $this->connexion();
        try {

            $sql = "SELECT * FROM vote GROUP BY email;";
            $request = $db->query($sql);


        } catch (Exception $e) {
            throw new Exception('Erreur lors de la récupération des votes.');
        }

        $results = $request->fetchAll();
        //var_dump($students);
        return $results;

    }

    public function getAllVotes() {

        $db = $this->connexion();
        try {

            $sql = "SELECT * FROM vote INNER JOIN categorie ON categorie.id_categorie = vote.id_categorie INNER JOIN candidat ON candidat.id_candidat = vote.id_candidat ORDER BY date_heure, categorie.id_categorie;";
            $request = $db->query($sql);


        } catch (Exception $e) {
            throw new Exception('Erreur lors de la récupération des votes.');
        }

        $results = $request->fetchAll();
        //var_dump($students);
        return $results;

    }

    public function getVotesByCategory($id_category, $limit = null) {

        $db = $this->connexion();
        try {

            $sql = "SELECT C.prenom, count(V.date_heure) as NBVOIX FROM `vote` V INNER JOIN `candidat` C ON V.`id_candidat`=C.`id_candidat` INNER JOIN `categorie` Cat ON V.`id_categorie`=Cat.`id_categorie` WHERE Cat.id_categorie = $id_category and V.statut=1 GROUP BY Cat.nom_categorie, C.prenom ORDER BY Cat.nom_categorie, count(V.date_heure) DESC";

            if($limit) {
                $sql .= ' LIMIT ' . intval($limit) . ' ';
            }

            $sql .= ';';

            $request = $db->query($sql);
        } catch (Exception $e) {
            throw new Exception('Erreur lors de la récupération des avis.');
        }

        $trainers = $request->fetchAll();        
        //var_dump($students);
        return $trainers;
    }

    public function toggleStatut( $statut, $email ) {
        $db = $this->connexion();
        try {

            $sql = "UPDATE vote SET statut = ? WHERE email = ?";

            $stmt = $db->prepare( $sql );
            $stmt->execute([$statut, $email]);

        } catch (Exception $e) {
            throw new Exception('Erreur lors de la récupération des avis.');
        }

    }

}