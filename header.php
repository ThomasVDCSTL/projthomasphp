<?php
if (!isset ($_SESSION)){
    session_start();
}
if (!isset($_SESSION["panier"])){
    $_SESSION["panier"]=[];

}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="Projet"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title><?php echo $nom_page?></title>
</head>
<body>
<header>
    <nav>
        <ul class="navbar" >
            <li><a href="index.php">HOME</a></li>
            <li>PRODUITS</li>
            <img src="Image/nain_de_jardingue.PNG" alt="Logo nain 2 jar-dingue">
            <li><a href="panier_piano.php">PANIER</a></li>
            <li>CONTACT</li>
        </ul>
    </nav>


</header>
<main>
