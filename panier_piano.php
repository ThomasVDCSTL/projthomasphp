<?php
$nom_page = "Panier";
include 'header.php';
include 'fonctions.php';
include 'item.php';

if (isset($_GET["AjoutPanier"])) {
    if (!isset($panier[$_GET['nomProduit']]) || $_GET["quantité"] != $panier[$_GET['nomProduit']]["quantité"]) {
        import_to_panier($articles[$_GET['nomProduit']], $_GET["quantité"]);
    }
}

if (isset($_GET['viderPanier'])) {
    foreach ($panier as $key => $value) {
        unset($panier[$key]);
        unset($_SESSION["panier"][$key]);
    }
}

if (isset($_GET['supprArticle'])) {
    unset($panier[$_GET['nomArticleSuppr']]);
    unset($_SESSION["panier"][$_GET['nomArticleSuppr']]);
}

global $panier;
$prixTotal = 0;
?>

<?php

?>
<h2>Votre Panier :</h2>
<div class="piano">
    <div class="infos">
        <h3>Informations de livraison</h3>
        <div class="formulaire">
            <form action="item.php" method="get">
                <fieldset class="civilité">
                    <legend>Civilité :</legend>
                    <span><input type="radio" name="iel"><label
                                for="Mr">Mr.</label><input type="radio" name="iel"><label
                                for="Mme">Mme.</label><input type="radio" name="iel"><label
                                for="Autre">Autre</label></span></fieldset>
                <fieldset class="nom_prenom">
                    <legend>NOM Prénom :</legend>
                    <input type="text" placeholder="POLESE Maxime"></fieldset>
                <fieldset class="mail">
                    <legend>Adresse Mail :</legend>
                    <input type="text" placeholder="jadorelePHP@ptdr.mourir"></fieldset>
                <fieldset class="telephone">
                    <legend>Tél. Portable :</legend>
                    <input type="tel" placeholder="J'ai pas de téléphone"></fieldset>
                <fieldset class="code_postal">
                    <legend>Code Postal :</legend>
                    <input type="text" placeholder="38000 la zone"></fieldset>
                <fieldset class="adresse">
                    <legend>Adresse :</legend>
                    <input type="text" placeholder="23 Rue des légendes"></fieldset>
                <fieldset class="ville">
                    <legend>Ville :</legend>
                    <input type="text" placeholder="Grenoble city gang"></fieldset>
                <fieldset class="pays">
                    <legend>Pays :</legend>
                    <input type="text" placeholder="MA FRANCE"></fieldset>
                <fieldset class="transporteur">
                    <legend>Choix du transporteur :</legend>
                    <select>
                        <option selected>BM Double-Pied (+<?php echo formatPrice(0) ?>)</option>
                        <option value="La_Poste">La Poste (+<?php echo formatPrice(calcShipment1($panier)) ?>)</option>
                        <option value="FedEx">FedEx (+<?php echo formatPrice(calcShipment2($panier)) ?>)</option>
                        <option value="UPS">UPS (+<?php echo formatPrice(calcShipment3($panier)) ?>)</option>
                    </select></fieldset>
            </form>

        </div>
    </div>
    <div class="panier">
        <h3>Panier</h3>
        <table>
            <thead>
            <tr>
                <th>Supprimer</th>
                <th class="span3" scope="col" colspan="3">Nom</th>
                <th scope="col">Prix unitaire</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix HT</th>
                <th scope="col">Prix TTC</th>
            </tr>
            </thead>
            <?php foreach ($panier as $nom => $achat) { ?>
                <tr>
                    <th>
                        <form action="panier_piano.php" method="get">
                            <input type="hidden" name="nomArticleSuppr" value=<?php echo $nom ?>>
                            <button type="submit" name="supprArticle" value="true"<?php $panier = array() ?> >x</button>
                        </form>
                    </th>
                    <th class="span3" scope="col"><?php echo $achat["nom"] ?></th>
                    <th scope="col"><?php echo formatPrice($achat['prix']) ?></th>
                    <th scope="col"><?php echo $achat['quantité'] ?></th>
                    <th scope="col"><?php echo formatPrice(priceExcludingVAT($achat['prix'] * $achat['quantité'], 20)) ?></th>
                    <th scope="col"><?php echo formatPrice($achat['prix'] * $achat['quantité']);
                        $prixTotal = $prixTotal + $achat['prix'] * $achat['quantité'] ?></th>
                </tr>
            <?php } ?>
        </table>
        <div class="total">
            <button>Valider Panier</button>
            <form action="panier_piano.php" method="get">
                <button type="submit" name="viderPanier" value="true"<?php $panier = array() ?> >Vider Panier</button>
            </form>
            <div class="prixTotalPanier">
                Prix total TTC : <?php
                echo formatPrice($prixTotal)
                ?>
            </div>
        </div>
    </div>
</div>

<?php global $prixTotal;

include 'footer.php'; ?>

