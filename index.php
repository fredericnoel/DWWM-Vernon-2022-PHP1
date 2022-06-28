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
    $texte = "C'est une belle chose d'être honnête, mais il est également important d'avoir raison.";
    echo compterChaine($texte);
    //dump(mb_str_split($texte));
    //echo mb_strlen(utf8_decode($texte));
    
    ?>
</body>
</html>