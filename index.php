<?php 

$truc = 20;
echo $truc++;
echo "<br />";
echo $truc;
echo "<br />";

$x = 210;

// Selon PSR-12 : mettre des espaces après if et elseif

// if ($x)
if (isset($x) && is_numeric($x)) {
    if ($x > 0) {
        echo '$x est positif';
    } elseif ($x < 0) {
        echo '$x est negatif';
    } else {
        echo '$x est nul';
    }

} else {
    echo '$x n\'esiste pas';
}


