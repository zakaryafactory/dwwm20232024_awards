<?php
ob_start();
?>
    <section class="vote">
        <h2>Enregistrement</h2>
        <img class="imagevote" src="public/image/vote.png">
        <?php
        echo "<h3>".$response."</h3>";
        ?>
        <div class="action">
            <a href="index.php"><button class="button">Retour au formulaire de vote</button></a>
        </div>
    </section>
    <?php
    $content = ob_get_clean();
    require('view/base.view.php');