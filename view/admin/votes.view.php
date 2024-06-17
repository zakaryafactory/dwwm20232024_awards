<?php
ob_start();
?>

    <h2>Listes des votants</h2>

    <table id="votes">
        <thead>
        <tr>
            <th>Email</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>

    <?php

        foreach ($votants as $votant) {

            echo '<tr>';
                echo '<td>' . $votant['email'] . '</td>';
                echo '<td>' . $votant['statut'] . '</td>';
                echo '<td>';

                    if( $votant['statut'] ) {
                       echo '<a href="index.php?page=toggleStatut&statut=0&email=' . $votant['email'] . '">Désapprouver</a>';
                    } else {
                        echo '<a href="index.php?page=toggleStatut&statut=1&email=' . $votant['email'] . '">Approuver</a>';
                    }

                echo '</td>';
            echo '</tr>';

        }

    ?>
        </tbody>
    </table>

    <div class="downloadButtonWrapper">
        <a href="index.php?page=downloadResults">Télécharger le fichier JSON de tous les votes</a>&nbsp;
        <a href="index.php?page=printResults">Afficher le fichier JSON de tous les votes</a>
    </div>

<?php

$content = ob_get_clean();
require('view/admin/base.view.php');