<?php
// @author : rawsrc - 2018 - Pour DVP
// on vérifie si la fonction de connexion a déjà été définie afin d'éviter de la redéfinir
if ( ! function_exists('db_connexion')) {
    function db_connexion() {
        // une fois ouverte, on renvoie toujours la même connexion
        static $pdo;
        // on vérifie si la connexion n'a pas déjà été initialisée
        if ( ! ($pdo instanceof PDO)) {
            // tentative d'ouverture de la connexion MySQL
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=nain2jar-dingue;charset=utf8','admin', '', [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false
                ]);
            }
            catch (PDOException $e) {
                throw new InvalidArgumentException('Erreur connexion à la base de données : '.$e->getMessage());
                exit;
            }
        }
        // renvoi de la ressource : connexion à la base de données
        return $pdo;
    }
}
return db_connexion();

