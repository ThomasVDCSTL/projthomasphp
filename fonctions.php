<?php
global $articles;
global $panier;
function display_articles(array $articles): void
{
    foreach ($articles as $nom => $article):?>
        <div class="produit">
            <div class="texte_produit">
                <div class="gras">
                    <p><?php echo $article['name']; ?></p>
                    <p><?php echo formatPrice($article["price"]); ?></p>
                </div>
                <p><?php echo $article["description"] ?></p>
                <div class="ajout_panier">
                    <form action="index.php" method="get">
                        <label class="quantity" for="quantity">Quantité : </label><input type="number" name="quantité"
                                                                                         max="99" min="1" value="1">
                        <input type="hidden" name="product_id" value="<?php echo $article['product_id'] ?>">
                        <button name="AjoutPanier" type="submit" <?php if ($article["available"] === 0): ?>disabled
                                class="indispo">
                            Produit<br>indisponible<?php elseif (is_in_cart($article['product_id'])): ?>disabled class="indispo" >Produit
                                <br>ajouté<?php else:
                                ?> class="dispo" >Ajouter<br>au panier <?php endif;
                            ?>
                        </button>
                    </form>
                </div>
            </div>
            <img src="<?php echo $article["picture"] ?>" alt="photo de<?php echo $article['name'] ?>">
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

function import_to_paniers(array $produit, int $nb): void
{
    global $panier;
    $produit["quantité"] = $nb;
    $panier[$produit['nom']] = $produit;
    $_SESSION["panier"] = $panier;
}

function calcShipment1(array $panier): float
{
    if (totalWeight($panier) < 500) {
        return 5;
    } elseif (totalWeight($panier) < 2000) {
        return prix_panier($panier) * 0.1;
    } else {
        return 1;
    }
}

function calcShipment2(array $panier): float
{
    if (totalWeight($panier) < 500) {
        return 10;
    } elseif (totalWeight($panier) < 3000) {
        return prix_panier($panier) * 0.05;
    } else {
        return 50;
    }
}

function calcShipment3(array $panier): float
{
    if (totalWeight($panier) < 100) {
        return 7.50;
    } elseif (totalWeight($panier) < 4000) {
        return prix_panier($panier) * 0.07;
    } else {
        return 0;
    }
}

function totalWeight(array $panier): float
{
    $poid = 0;
    foreach ($panier as $article) {
        $poid = $poid + $article['poid'] * $article['quantité'];
    };
    return $poid;
}

function prix_panier(array $panier): float
{
    $prix = 0;
    foreach ($panier as $article) {
        $prix = $prix + $article['prix'] * $article['quantité'];
    };
    return $prix;
}
