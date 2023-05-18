<?php
/**
 * Programa de calculadora básica en php.
 *
 * @author Francisco Javier Ruiz Carvajal
 * @version 1.0
 */
/**
 * Suma dos números.
 *
 * @param int|float $num1 El primer número.
 * @param int|float $num2 El segundo número.
 * @return int|float El resultado de la suma.
 */
function sumar($num1, $num2) {
    return $num1 + $num2;
}

/**
 * Resta dos números.
 *
 * @param int|float $num1 El primer número.
 * @param int|float $num2 El segundo número.
 * @return int|float El resultado de la resta.
 */
function restar($num1, $num2) {
    return $num1 - $num2;
}

/**
 * Divide dos números.
 *
 * @param int|float $num1 El primer número.
 * @param int|float $num2 El segundo número.
 * @return int|float|string El resultado de la división o un mensaje de error si se intenta dividir entre cero.
 */
function dividir($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Error: No se puede dividir entre cero.";
    }
}

/**
* Ejemplos de uso de las funciones.
*
*@internal Esto está sólo disponible para desarrolladores. 
*/
$numero1 = 10;
$numero2 = 5;

echo "Suma: " . sumar($numero1, $numero2) . "<br>";
echo "Resta: " . restar($numero1, $numero2) . "<br>";
echo "División: " . dividir($numero1, $numero2) . "<br>";
?>
