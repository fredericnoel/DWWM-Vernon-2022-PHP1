<?php

require_once './functions/salut.php';
require_once './functions/surface.php';
require_once './functions/volume.php';

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
    $resultat = surface(10.22, 54.345);
    echo $resultat;
    ?>
</body>
</html>