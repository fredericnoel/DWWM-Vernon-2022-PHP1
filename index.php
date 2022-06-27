<?php 

// Afficher une chaîne de caractères qui contient du HTML
$toto = "<h1>12</h1>";
echo $toto;

// Affichage de variables
$jour = "lundi";
//echo 'Nous sommes ' . $jour . '.';

// Avec guillemets doubles, la variable est évaluée
echo "Nous sommes $jour";
echo "<br />";
// Avec guillemets simples, la variable ne l'est pas
echo 'Nous sommes $jour';
echo "<br />";

// Obtenir le type d'une variable
echo gettype($jour);
echo "<br />";

// Afficher des informations sur le type de la variable et son contenu
var_dump($jour);
// La fonction print_r() retour un résultat similaire, mais sans mentionner le type

/*
Quelques règles :
- toutes les variables commencent par le signe $
- toutes les variables commencent par une lettre ou '_'
- le nom d'une variable contient, des chiffres, des underscores et c'est tout
- le nom d'une variable ne contient pas d'espace.



*/