<?php
$nom_page="Produits";
include 'header.php';
include 'fonctions_sql.php';
include 'item.php';
include 'fonctions.php';
if (isset($_GET["product_id"])) {
    import_to_panier($_GET["product_id"],$_GET["quantité"]);
    header('Location:http://localhost/projphp/index.php');
};

?>
    <h2>Nos produits phares :</h2>


        <?php
        display_articles(import_products());

        ?>


<?php include 'footer.php';?>


