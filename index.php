<?php
    $nom_page="Produits";
?>

<?php include 'header.php';?>
    <h2>Nos produits phares :</h2>

        <?php include 'item.php';?>
        <?php include 'fonctions.php';
        display_articles($articles);
        ?>


<?php include 'footer.php';?>


