<?php

function compterChaine($chaine) {
    $chaine = trim($chaine);
    $nombreCaracteres = mb_str_split($chaine);
    $nombreMots = 1;

    for ($i = 0 ; $i < count($nombreCaracteres) ; $i++) {
        if ($nombreCaracteres[$i] === "'" || $nombreCaracteres[$i] === " ") {
            $nombreMots++;
        }
    }

    return $nombreMots;
}
