<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "yanservice");

$connexion = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
// verification de la connexion

if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué " . $connexion->connect_error);
}

// echo "Connexion réussie avec MySQLi";
$sql = "SELECT * FROM users";
$res = $connexion->query($sql);

if ($res->num_rows > 0) {
    while ($line = $res->fetch_assoc()) {
        echo "Nom : " . $line["nom"] . " Prénom : " . $line["prenom"] . "<br>";
    }
} else {
    echo "Aucun resultat trouvé";
}

$connexion->close();
