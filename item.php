<?php
$articles = array(
        "Schmongus" => array(
            "prix"=>45,
            "photo"=>"https://www.cdiscount.com/pdt2/8/9/6/1/350x350/auc7745647210896/rw/nain-de-jardin-exterieur-impermeabiliser-nain-de-j.jpg",
            "description"=>'"He protec ..."'
        ),
        "Steph" => array(
            "prix"=>450,
            "photo"=>"https://commentseruiner.com/32058-large_default/nain-de-jardin-i-m-sexy.jpg",
            "description"=>'"... he attac"'
        )
);

foreach ($articles as $nom => $article):?>
    <div class="produit">
        <h3><?php echo $article["prix"]," € ",$nom;
            ?></h3>
        <p><?php echo $article["description"]?></p>
        <img src="<?php echo $article["photo"] ?>" alt="photo de<?php echo $nom?>">
    </div>
<?php endforeach;


?>

