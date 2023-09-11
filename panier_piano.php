<?php
$nom_page = "Panier";
include 'header.php';
include 'fonctions.php';
include 'item.php';

if (isset($_GET["AjoutPanier"])){
    import_to_panier($articles[$_GET['nomProduit']],$_GET["quantité"]);
}
global $panier;
?>

<?php

?>
    <h2>Votre Panier :</h2>
    <div class="piano">
        <div class="infos">
            <h3>Informations de livraison</h3>
            <div class="formulaire">
                <form action="item.php" method="get">
                    <fieldset class="civilité"><legend>Civilité :</legend><span><input type="radio" name="iel"><label
                                    for="Mr">Mr.</label><input type="radio" name="iel"><label
                                    for="Mme">Mme.</label><input type="radio" name="iel"><label
                                    for="Autre">Autre</label></span></fieldset>
                    <fieldset class="nom_prenom"><legend>NOM Prénom :</legend><input type="text" placeholder="POLESE Maxime"></fieldset>
                    <fieldset class="mail"><legend>Adresse Mail :</legend><input type="text" placeholder="jadorelePHP@ptdr.mourir"></fieldset>
                    <fieldset class="telephone"><legend>Tél. Portable :</legend><input type="tel"  placeholder="J'ai pas de téléphone"></fieldset>
                    <fieldset class="code_postal"><legend>Code Postal :</legend><input type="text" placeholder="38000 la zone"></fieldset>
                    <fieldset class="adresse"><legend>Adresse :</legend><input type="text" placeholder="23 Rue des légendes"></fieldset>
                    <fieldset class="ville"><legend>Ville :</legend><input type="text" placeholder="Grenoble city gang"></fieldset>
                    <fieldset class="pays"><legend>Pays :</legend><input type="text" placeholder="MA FRANCE"></fieldset>
                    <fieldset class="transporteur"><legend>Choix du transporteur :</legend><select >
                            <option selected>BM Double-Pied</option>
                            <option value="La_Poste">La Poste</option>
                            <option value="DHL">DHL</option>
                            <option value="FedEx">FedEx</option>
                            <option value="UPS">UPS</option>
                        </select></fieldset>
                </form>

            </div>
        </div>
        <div class="panier">
            <h3>Panier</h3>
            <table>
                <thead>
                <tr>
                    <th class="span3" scope="col" colspan="3">Nom</th>
                    <th scope="col">Prix unitaire</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Prix HT</th>
                    <th scope="col">Prix TTC</th>
                </tr>
                </thead>
                <?php foreach($panier as $nom => $achat){?>
                    <tr>
                        <th class="span3" scope="col"><?php echo $achat["nom"]?></th>
                        <th scope="col"><?php echo $achat['prix']?></th>
                        <th scope="col"><?php echo $achat['quantité']?></th>
                        <th scope="col"><?php echo $achat['prix']?></th>
                        <th scope="col"><?php echo $achat['prix']?></th>
                    </tr>
                    <?php }?>
            </table>
            <div class="total">
                <button>Valider Panier</button>
                <button type="button" <?php $panier=array()?> >Vider Panier</button>
                <div class="prixTotalPanier">
                    Prix total TTC : <?php ?>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>