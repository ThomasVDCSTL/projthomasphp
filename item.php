<?php
$articles = array( "Schmongus" => array("prix"=>45,
                                        "photo"=>"https://www.cdiscount.com/pdt2/8/9/6/1/350x350/auc7745647210896/rw/nain-de-jardin-exterieur-impermeabiliser-nain-de-j.jpg",
                                        "description"=>'"He protec ..."',
                                        "nom"=>"Schmongus"),
                    "Steph" => array("prix"=>450,
                        "photo"=>"https://commentseruiner.com/32058-large_default/nain-de-jardin-i-m-sexy.jpg",
                        "description"=>'"... he attac"',
                        "nom"=>"Steph")
);

$prix1=45;
$nom1="Schmongus Egide de Fer";
$photo1="https://www.cdiscount.com/pdt2/8/9/6/1/350x350/auc7745647210896/rw/nain-de-jardin-exterieur-impermeabiliser-nain-de-j.jpg";
$description1='"He protec ..."';
$prix2=450;
$nom2="l'autre naing";
$photo2="https://commentseruiner.com/32058-large_default/nain-de-jardin-i-m-sexy.jpg";
$description2='"... he attac"';

?>

<div class="produit" id="produit1">
    <h3><?php echo $articles["Schmongus"]["prix"]," € ",$articles["Schmongus"]["nom"];
        ?></h3>
    <p><?php echo $articles["Schmongus"]["description"]?></p>
    <img src="<?php echo $articles["Schmongus"]["photo"] ?>" alt="photo du nain protec">
</div>

<div class="produit" id="produit2">
    <h3><?php echo $articles["Steph"]["prix"]," € ",$articles["Steph"]["nom"];
        ?></h3>
    <p><?php echo $articles["Steph"]["description"]?></p>
    <img src="<?php echo $articles["Steph"]["photo"] ?>" alt="photo du nain attac">
</div>