<?php

function surface(int|float $longueur, int|float $largeur): int|float {
    $surface = abs($longueur) * abs($largeur);
    return round($surface, 2);
}
