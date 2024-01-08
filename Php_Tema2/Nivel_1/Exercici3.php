<?php
/* Declara dos variables X e Y de tipo int, dos variables N y M de tipo double
y asigna a cada una un valor. A continuación, muestra por pantalla para X e Y:

El valor de cada variable.
La suma.
El resto.
El producto.
El módulo.
Por N y M realizarás lo mismo.
*/
// Declarando variables tipo int y double

$X = 10; 
$Y = 5;
$N = 3.5;
$M = 5.5;

echo "El valor de X es " .$X . "\n";
echo "El valor de Y es " .$Y . "\n";

// Operaciones con las variables X e Y
$suma = $X + $Y;
echo "Suma (X + Y) " .$suma . "\n";

$resta = $X - $Y;
echo "Resta (X - Y) " .$resta . "\n";

$producto = $X * $Y;
echo "Producto (X + Y) " .$producto . "\n";

$modulo = $X % $Y;
echo "Resto (X % Y) " .$modulo . "\n";

// Operaciones con las variables N y M
echo "El valor de N es " .$N . "\n";
echo "El valor de M es " .$M . "\n";

echo "Suma (N + M) " . ($N + $M) . "\n";
echo "Resta (N - M) " . ($N - $M) . "\n";
echo "Multiplicacion (N * M) " . ($N * $M) . "\n";
echo "Division (N / M) " . ($N / $M) . "\n";

/* Para todas las variables (X, Y, N, M):

El doble de cada variable.
La suma de todas las variables.
El producto de todas las variables.

*/

echo "El doble de cada variable: " . (2 * $X) . ", " . (2 * $Y) . ", " . (2 * $N) . ", " . (2 * $M) . "\n";
echo "La suma de todas las variables " .($X + $Y + $N + $M) ."\n";
echo "El producto de todas las variables " .($X * $Y * $N * $M) ."\n";

/* 
b) Crea una función Calculadora que entre dos números por parámetro, 
y en un tercer parámetro te permita realizar la suma, la resta, la multiplicación 
o la división de los dos números.
*/

function calculadora($num1, $num2, $operacion) {
    switch($operacion) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':       
            if($num2 != 0){
                return $num1 / $num2;
            } else {
                return "Error: Division por cero";
            }
        default:
            return "Operacion no valida";  
    }
}

echo "Suma: " . calculadora(10, 5, "+") ."\n";
echo "Resta: " . calculadora(10, 5, "-") ."\n";
echo "Multiplicacion: " . calculadora(10, 5, "*") ."\n";
echo "Division: " . calculadora(10, 5, "/") ."\n";
?>