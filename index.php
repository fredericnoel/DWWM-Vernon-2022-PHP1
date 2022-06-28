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

    function compter() {
        static $x = 0;
        echo "La valeur est $x <br />";
        $x++;
    }

    compter();
    compter();
    compter();
    compter();
    compter();

    ?>
</body>
</html>