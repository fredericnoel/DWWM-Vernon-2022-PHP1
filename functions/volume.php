<?php

function volume(int|float $longueur, int|float $largeur, int|float $hauteur): int|float {
    $volumePiece = surface($longueur, $largeur) * abs($hauteur);
    return round($volumePiece, 2);
}
