<?php
/* Imprimir por pantalla "Hello, World!" utilizando una variable. Después:

Transforma todos los caracteres del string a mayúsculas e imprime en pantalla.
Imprime por pantalla el tamaño (longitud) de la variable.
Imprime por pantalla el string en orden inverso de caracteres.
Crea una nueva variable con el contenido "Este es el curso de PHP"
e imprime por pantalla la concatenación de ambos strings. 
*/

// Declarando variable
$string = "Hello World";
echo $string . "\n"; 

// Convirtiendo a mayúsculas y mostrarlo por pantalla
$upperCase = strtoupper($string);
echo $upperCase . "\n";

// Longitud de la variable
$length = strlen($string);
echo $length . "\n";

// orden inverso
$reverseString = strrev($string);
echo $reverseString . "\n";

// crea una variable con el contenido
$newString = "Este es el curso PHP";
echo $string . " " .$newString . "\n";

?>