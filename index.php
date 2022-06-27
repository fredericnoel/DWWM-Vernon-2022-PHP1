<?php 

$compteur = 0;
$resultat = "<ul>";
for($i = -17627 ; $i <= 14256 ; $i++) {
    if ($i % 7 === 0) {
        $resultat .= "<li>";
        $resultat .= $i;
        $resultat .= "</li>";
        $compteur++;
    }
}
$resultat .= "</ul>";
$resultat .= "<p>Il y a $compteur resultats</p>";

echo $resultat;