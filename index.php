<?php

require_once './functions/autoLoad.php';
autoLoad("*.php");

define("TVATAUXNORMAL", 0.22);

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

    $valeur = 0;

    function ajouter22(&$num) {
        $num += 22;
        echo "La valeur dans la fonction est de $num";
    }

    ajouter22($valeur);

    echo "<br />";
    echo $valeur;
    ?>
</body>
</html>