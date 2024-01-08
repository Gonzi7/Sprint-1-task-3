<?php
/* 
Charlie me mordió el dedo! Charlie te morderá el dedo exactamente el 50% del tiempo.

Escribe La función isBitten () que devuelve TRUE con un 50% de probabilidad 
y FALSE de lo contrario.
  
Importante
Consejo: puede que la función rand () te resulte útil.
*/

function isBitten() {
    return rand(0, 1) == 1;
}

if (isBitten()){
    echo "Charlie me mordio el dedo" ."\n";
    } else {
    echo "Charlie no me mordio el dedo" ."\n";
    }
    
?>