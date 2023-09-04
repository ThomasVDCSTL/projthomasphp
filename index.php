<?php
$prix1=45;
$nom1="le naing";
$photo1="https://www.cdiscount.com/pdt2/8/9/6/1/350x350/auc7745647210896/rw/nain-de-jardin-exterieur-impermeabiliser-nain-de-j.jpg";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="Projet"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div></div>
    </header>

    <div class="content">
        <article class="produit"><?php echo $prix1," € ",$nom1;
            ?>
            <img src="<?php echo $photo1 ?>" alt="photo du nain">
        </article>
        <article></article>
        <article></article>
    </div>

</body>
</html>

