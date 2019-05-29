<?php 
/*
1- Quel est la différence entre un langage de programmation et un langage de description ? Citez un exemple pour chacun d'entre d'eux.

-Un language de programmation est un language qui manipule des données
ex php

alors qu'un language de description ne fait rien d'autre qu'afficher les lignes de code 
ex html

2- PHP s'exécute côté serveur, qu'est-ce que cela veut dire ? Décrivez comment se déroule une communication entre un navigateur et ces éléments côté serveur : php, apache, mysql.

J'aurais mis Client / Serveur web (ex php / mysql) / client


3- Citez un langage de programmation qui s'exécute coté client.
-PHP 


4- Citez quelques types primitifs de variable. Est-il possible en PHP de comparer des variables de type primitif différent ? Si oui, que se passe-t-il si par exemple on compare une chaine avec un entier ?

-string
-entier
-boolean
-decimal


    $string = "42";
    $entier = 42;
    $decimal = 10.5;
    $boolean = false;
    $null = NULL;

	$string = "42";
	$entier = 42;

	$string == $entier : C'est vrai

	$string === $entier : C'est faux


5- Comment peut-on parcourir en PHP une variable de type tableau (array) ?

- il faux faire une boucle sur le tableau

6- Quels sont les opérateurs PHP de comparaison stricte ? Ecrivez une ligne de code qui compare strictement deux variables php.

C'est le triple égale

if( $string === $entier){
	echo"Ce n'est pas égale";
}
7- Ecrivez un script PHP :

    - Codez une fonction multiplication() avec deux paramètres, qui réalise la multiplication de ces paramètres puis renvoie le résultat

    - Utilisez cette fonction dans le script puis affichez l'opération elle-même ainsi que son résultat.
*/

    function multiplication($chiffre1, $chiffre2){
    	$resulat = $chiffre1 * $chiffre2;

    	return $resulat;
    }

    $chiffre1 = 4;
    $chiffre2 = 5;

    echo  $chiffre1 . " * " . $chiffre2 . " le resulat est " . multiplication($chiffre1, $chiffre2);

 ?>