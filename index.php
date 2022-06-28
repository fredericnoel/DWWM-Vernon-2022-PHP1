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

    function listerFruits(...$fruits) {
        foreach($fruits as $value) {
            echo "<p>Ce est un ou une $value </p>";
        }
    }

    listerFruits("Banane", "Pomme", "Poire");

    ?>
</body>
</html>