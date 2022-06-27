<?php 

$x = 210;

// Selon PSR-12 : mettre des espaces après if et elseif
if ($x > 0) {
    echo '$x est positif';
} elseif ($x < 0) {
    echo '$x est negatif';
} else {
    echo '$x est nul';
}
