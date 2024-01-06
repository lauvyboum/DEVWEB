<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "yanservice");

try {
    $dsn = "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME;
    $connexion = new PDO($dsn, DB_USER, DB_PASSWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "La connexion à la base de données réussie avec PDO !";

    $sql = "SELECT * FROM users";
    $res = $connexion->query($sql);

    if ($res) {
        while ($line = $res->fetch(PDO::FETCH_ASSOC)) {
            echo "Nom : " . $line["nom"] . " Prénom : " . $line["prenom"] . "<br>";
        }
    } else {
        echo "Aucun resultat trouvé";
    }
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
