<?php
global $articles;
global $panier;
function display_articles(): void
{
    global $articles;
    foreach ($articles as $nom => $article):?>
        <div class="produit">
            <div class="texte_produit">
                <div class="gras">
                    <p><?php echo $nom; ?></p>
                    <p><?php echo formatPrice($article["prix"]); ?></p>
                </div>
                <p><?php echo $article["description"] ?></p>
                <div class="ajout_panier">
                    <form action="panier_piano.php" method="get">
                        <label class="quantity" for="quantity">Quantité : </label><input type="number" name="quantité" max="99" min="1" value="1">
                        <input type="hidden" name="nomProduit" value="<?php echo $nom ?>">
                        <button name="AjoutPanier" type="submit" <?php if ($article["quantité"] < 1): ?>disabled class="indispo">Produit<br>indisponible<?php else:
                        ?> class="dispo" >Ajouter<br>au panier <?php endif;
                        ?>
                        </button>
                    </form>
                </div>
            </div>
            <img src="<?php echo $article["photo"] ?>" alt="photo de<?php echo $nom ?>">
        </div>
    <?php endforeach;
}

function formatPrice(float $price): string
{
    return number_format($price, 2, ",", " ") . ' €';
}

//echo formatPrice(1000);

function priceExcludingVAT(float $price, float $vat): float
{
    return (100 * $price) / (100 + $vat);
}

//echo formatPrice(priceExcludingVAT(1000, 20));


function discountedPrice(float $price, float $discount): float
{
    return $price - ($price * $discount / 100);
}

//echo formatPrice(discountedPrice(1000, 20));





$panier = $_SESSION["panier"];

function import_to_panier(array $produit, int $nb): void
{
        global $panier;
        $produit["quantité"]=$nb;
        $panier[$produit['nom']] = $produit;
        $_SESSION["panier"]=$panier;
}

function calcShipment1(): float
{
    global $panier;
    if (totalWeight($panier) < 500) {
        return 500;
    } elseif (totalWeight($panier) < 2000) {
        return totalTTC($panier) * 0.1;
    } else {
        return 0;
    }
}

function calcShipment2(): float
{
    global $panier;
    if (totalWeight($panier) < 500) {
        return 1000;
    } elseif (totalWeight($panier) < 3000) {
        return totalTTC($panier) * 0.05;
    } else {
        return 0;
    }
}

function calcShipment3(): float
{
    global $panier;
    if (totalWeight($panier) < 100) {
        return 750;
    } elseif (totalWeight($panier) < 4000) {
        return totalTTC($panier) * 0.07;
    } else {
        return 0;
    }
}