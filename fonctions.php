<?php
global $articles;
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
                <button <?php if ($article["quantité"] < 1): ?>disabled<?php endif;
                ?>>Ajouter<br>au panier
                </button>
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


