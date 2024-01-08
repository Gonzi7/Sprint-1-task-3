<?php

/* Haz un programa que implemente una función en la que se cuente hasta un número determinado. 
Si no se incluye un número determinado, el número deberá tener un valor por defecto igual a 10. 
Además, esta función debe tener un segundo parámetro que indique de cuánto a cuánto se cuenta(De 1 en 1, de 2 en 2…). 
La cuenta debe mostrarse por pantalla paso a paso.
*/

function contar($hasta = 10, $intval = 1) {
    for($i = 0; $i < $hasta; $i += $intval) {
        echo $i ."\n";
    }
}

// Llamando la funcion contar
contar(); 
contar(20);
contar(20, 2);

?>