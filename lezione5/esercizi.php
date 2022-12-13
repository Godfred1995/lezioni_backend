<?php

/**
 *  1) puo' votare? l'età di una persona vedere se puo' votare if
 *  2) Dato un $myNumber 5, 1, 0 ,dire se e positivo, se è negetivo o se è zero
 */


 // chiara
 
//primo esercizio

/**  Variabili */
$eta = 21;
$legalAge = 18;

/** check */

if ($eta >= $legalAge) {
    echo "Puoi votare!<br>";
} else {
    echo "Non puoi votare! <br>";
}

//Secondo esercizio

$myNumber = 1;


if (is_int($myNumber)) {
    if ($myNumber > 0) {
        echo "Il numero è positivo!";
    } elseif ($myNumber < 0) {
        echo "Il numero è negativo!";
    } else {
        echo "Il numero è zero!";
    }
} else {
    echo "Non è un numero";
}