<?php
$nom_page="Produits";
include_once 'header.php';
include_once 'fonctions_sql.php';
include_once 'item.php';
include_once 'fonctions.php';
include_once 'Classes/Item.php';
include_once 'Classes/Catalogue.php';
$_SESSION['customer_id']=1;
if (isset($_GET["product_id"])) {
    import_to_panier($_GET["product_id"],$_GET["quantité"]);
    header('Location:http://localhost/projphp/index.php');
};

?>
    <h2>Nos produits phares :</h2>


        <?php
        $cat_prod=new \Classes\Catalogue();
        foreach (get_product_list() as $article){
//            var_dump($article);
            $produit=new \Classes\Item($article,$article['name']);
//            display_articles($produit);
            $temp[]=$produit;
        }
        $cat_prod->setCatalogue($temp);
        display_catalogue($cat_prod->getCatalogue());

        ?>



<?php include_once 'footer.php';?>


