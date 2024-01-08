<?php
/* 
Escribir una función para verificar el grado de un/a estudiante de acuerdo con la nota.

Condiciones:

Si la nota es 60% o más, el grado debería ser Primera División.
Si la nota está entre el 45% y el 59%, el grado debería ser Segunda División.
Si la nota está entre 33% a 44%, el grado debería ser Tercera División.
Si la nota es menor a 33%, el estudiante reprobará.

*/

function grado($nota){

    if($nota >= 60){
        return "Primera División";
    } elseif ($nota >=45){
        return "Segunda División";
    } elseif ($nota >= 33){
        return "Tercera División";
    } else {
        return "Reprobado";
    }
}

echo grado(80) ."\n"; //Deberia imprimir "Primera División"
echo grado(59) ."\n"; //Deberia imprimir "Segunda División"
echo grado(43) ."\n"; //Deberia imprimir "Tercera División"
echo grado(15) ."\n"; //Deberia imprimir "Reprobado"

?>