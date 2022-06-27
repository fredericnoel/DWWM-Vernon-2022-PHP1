<?php 

$resultat = "<ul>";
for($i = 0 ; $i <= 100 ; $i++) {
    $resultat .= "<li>";
    $resultat .= $i;
    $resultat .= "</li>";
}
$resultat .= "<ul>";

echo $resultat;