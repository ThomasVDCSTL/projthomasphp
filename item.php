<?php
$prix1=45;
$nom1="le naing";
$photo1="https://www.cdiscount.com/pdt2/8/9/6/1/350x350/auc7745647210896/rw/nain-de-jardin-exterieur-impermeabiliser-nain-de-j.jpg";
$description1='"He protec ..."';
$prix2=450;
$nom2="l'autre naing";
$photo2="https://commentseruiner.com/32058-large_default/nain-de-jardin-i-m-sexy.jpg";
$description2='"... he attac"';

?>

<div class="produit" id="produit1">
    <h3><?php echo $prix1," € ",$nom1;
        ?></h3>
    <p><?php echo $description1?></p>
    <img src="<?php echo $photo1 ?>" alt="photo du nain protec">
</div>

<div class="produit" id="produit2">
    <h3><?php echo $prix2," € ",$nom2;
        ?></h3>
    <p><?php echo $description2?></p>
    <img src="<?php echo $photo2 ?>" alt="photo du nain attac">
</div>