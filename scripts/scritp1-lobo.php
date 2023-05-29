<?php
/**
 * Script que contiene funciones matemáticas básicas.
 *
 * Este script proporciona funciones para realizar operaciones de suma, resta, multiplicación y división.
 *
 * @package EjercicioDocumentacion
 * @subpackage Scripts
 * @version 1.0
 * @author Cristian Lobo Jiménez
 *
 */

/**
 * Función para sumar dos números.
 *
 * @param float $num1 El primer número.
 * @param float $num2 El segundo número.
 * @return float El resultado de la suma.
 * @since 1.0
 */
function sumar($num1, $num2) {
  return $num1 + $num2;
}

/**
 * Función para restar dos números.
 *
 * @param float $num1 El primer número.
 * @param float $num2 El segundo número.
 * @return float El resultado de la resta.
 * @since 1.0
 */
function restar($num1, $num2) {
  return $num1 - $num2;
}

/**
 * Función para multiplicar dos números.
 *
 * @param float $num1 El primer número.
 * @param float $num2 El segundo número.
 * @return float El resultado de la multiplicación.
 * @since 1.0
 */
function multiplicar($num1, $num2) {
  return $num1 * $num2;
}

/**
 * Función para dividir dos números.
 *
 * @param float $num1 El numerador.
 * @param float $num2 El denominador.
 * @return float|string El resultado de la división o un mensaje de error si el denominador es cero.
 * @since 1.0
 */
function dividir($num1, $num2) {
  if ($num2 == 0) {
    return "Error: No se puede dividir entre cero.";
  } else {
    return $num1 / $num2;
  }
}
?>
