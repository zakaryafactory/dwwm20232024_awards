<?php 
include("inc/function.php");
include("inc/header.html"); 
?>

<main class="content">

        <form action="" method="">
        <?php
        $categories = getListeCategories();
        $etudiants = getListEtudiants();
        $i=1;
        foreach($categories as $categorie) {
            echo "<section class='cards categorie$i'>";
            echo "<h2 class='titleCategorie'>".$categorie['nom']."</h2>";
            echo "<p class='libelleCategorie'>".$categorie['libelle']."</p><br>";
            foreach ($etudiants as $etudiant) {
                ?>
                <div class="card">
                    <img src="<?php echo $etudiant['urlphoto'];?>"/>
                    <h2><?php echo $etudiant['prenom'] ;?></h2>
                </div>
            <?php
            }
            echo '</section><hr/>';
            $i++;
        }
            ?>
        <div class="action">
            <button type="submit"class="button">Voter !</button>
        </div>


</main>

<?php include("inc/footer.html"); ?>