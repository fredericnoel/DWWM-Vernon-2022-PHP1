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

    // Syntaxe Heredoc

    $texte =<<<michelestalaplage
    Cupcake ipsum dolor sit amet I love I love cheesecake.
    Croissant sweet danish I love powder. Donut chocolate jelly-o toffee I love.
    Toffee dessert sweet roll liquorice pastry ice cream.
    Gummies dessert marshmallow liquorice lollipop wafer.
    Jelly I love powder shortbread lollipop cake I love.
    I love bonbon brownie pastry shortbread macaroon sweet roll tart cotton candy.
    Sweet chocolate gingerbread pudding sweet tart I love soufflé.
    Tootsie roll sesame snaps tootsie roll I love toffee fruitcake jelly-o.
    Jelly gingerbread cookie gummies carrot cake toffee croissant.
    Gummies muffin sweet roll halvah topping shortbread.
    Pie sesame snaps toffee sweet roll I love I love I love marzipan.
    michelestalaplage;

    echo "<pre>";
    echo $texte;
    echo "</pre>";
    ?>
</body>
</html>