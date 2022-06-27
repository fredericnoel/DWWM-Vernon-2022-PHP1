<?php 

$toto = 0;
$resultat = "<ul>";

do {   
    $resultat .= "<li>";
    $resultat .= $toto;
    $resultat .= "</li>";
    $toto++;
} while ($toto < 10);

$resultat .= "</ul>";
echo $resultat;
