<h1>Pratique de PHP </h1>
<hr>
<div>
    <?php

    // tableau indexé
    // $fruits = array("Pomme", "Banane", "Ananas");
    // echo "<h1> Mon fruit preferé $fruits[2]</h1>";

    // // tableau associatif
    // $personne = array("prenom" => "Lauvy", "nom" => "BOUM", "age" => "30");
    // echo "<h1> Mon nom complet est " . $personne['prenom'] . " " . $personne['nom'] . "</h1>";

    // boucle for
    // for ($i = 0, $size = count($personne); $i < $size; $i++) {
    //     echo "Iteration $i <br>";
    // }

    // boucle while
    // $i = 10;
    // while ($i < 10) {
    //     echo "Iteration $i <br>";
    //     $i++;
    // }
    // echo "La condition n'est pas satisfaite car i = $i <br>";
    // // boucle do...while
    // $i = 10;
    // do {
    //     echo "Iteration $i <br>";
    //     $i++;
    // } while ($i < 10);
    // echo "La condition n'est pas satisfaite car i = $i <br>";

    // boucle foreach
    // $nbres = array(14, 12, 3, 74, 50);
    $colors = array("green", "yellow", "red", "blue");

    foreach ($colors as $key => $value) {
        $color = $value;
        if ($color == "blue") {
            echo "Voici ma couleur préfeérée est : $color <hr>";
        } else {
            echo "La couleur $color <br>";
        }
    }

    // fonctions
    // definition d'une fonction
    function addition($a, $b)
    {
        $som = $a + $b;
        return $som;
    }
    // appel de la fonction
    $somme = addition(5, 8);
    echo "<h1>La somme est : $somme</h1>";

    ?>
</div>