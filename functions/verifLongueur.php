<?php 

function verifLongueur(string $chaine, int $nbrMinimumCaracteres): string {
    if (mb_strlen($chaine) >= $nbrMinimumCaracteres)
        $message = "Nombre de caractères suffisant";
    else 
        $message = "Nombre de caractères insuffisants, il en manque " . $nbrMinimumCaracteres - mb_strlen($chaine);
    return $message;
}
