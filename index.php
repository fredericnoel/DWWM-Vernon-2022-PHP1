<?php

require_once './functions/salut.php';
require_once './functions/surface.php';
require_once './functions/volume.php';
require_once './functions/factorielle.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Fonctions</title>
</head>
<body>
    <?php

    // Création d'un tableau
    $tableau = array("Michel", "Banane", 12, true, 12.12);
    
    // Création d'un tableau vide
    $tableau2 = array();
    // Ajout d'une valeur à la fin du tableau
    array_push($tableau2, "Toto", "Titi");
    
    // Tableau associatif
    $tableauAssociatif = array("prenom" => "Michel", "nom" => "Dupont", "age" => 42);

    var_dump($tableauAssociatif);

    ?>
</body>
</html>