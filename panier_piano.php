<?php
$nom_page = "Panier";
include 'header.php';
include 'fonctions.php';
include 'item.php';

if (isset($_GET["AjoutPanier"])){
    import_to_panier($articles[$_GET['nomProduit']],$_GET["quantité"]);
}

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
            <div>
                <table>
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Prix HT</th>
                        <th>Prix TTC</th>
                    </tr>
                    </thead>
                    <?php foreach($panier as $achat){?>
                        <tr>
                        <th>Nom</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Prix HT</th>
                        <th>Prix TTC</th>
                    </tr>
                        <?php }?>
                </table>
            </div>

        </div>
    </div>


<?php include 'footer.php'; ?>