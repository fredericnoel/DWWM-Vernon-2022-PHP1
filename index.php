<?php 

$compteur = 0;
$i = -17627 ;
$resultat = "<ul>";

while ($i <= 14256) {
    if ($i % 7 === 0) {
        $resultat .= "<li>";
        $resultat .= $i;
        $resultat .= "</li>";
        $compteur++;
    }
    $i++;
}

$resultat .= "</ul>";
$resultat .= "<p>Il y a $compteur resultats</p>";

echo $resultat;
