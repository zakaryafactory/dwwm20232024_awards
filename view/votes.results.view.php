<?php
ob_start();
?>

    <h2>Résultats des votes</h2>

    <h3>Les apprenants</h3>
    <?php
        foreach ($results['students'] as $category) {

            echo '<h4>' . $category['nom_categorie'] . '</h4>';
            $i = 1;
            foreach ($category['votes'] as $vote) {
                echo 'gagnant n°' . $i . ' >> ' . $vote['prenom'] . ' avec ' . $vote['NBVOIX'] . ' voix<br/>';
                $i++;
            }

        }
    ?>


    <h3>Les formateurs</h3>
    <?php
    foreach ($results['trainers'] as $category) {

        echo '<h4>' . $category['nom_categorie'] . '</h4>';
        $i = 1;
        foreach ($category['votes'] as $vote) {
            echo 'gagnant n°' . $i . ' >> ' . $vote['prenom'] . ' avec ' . $vote['NBVOIX'] . ' voix<br/>';
            $i++;
        }

    }
    ?>
<?php

$content = ob_get_clean();
require('view/base.view.php');