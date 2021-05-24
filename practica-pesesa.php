<?php

/**
 * Script que contiene 2 funciones para la práctica 5 de DAW.
 * @author Pedro J. Serrano <- pedroj.serrano0@gmail.com ->
 * @version 05.21
 */
{@internal Funciones para cálculo}
/**
 * Función para la realización de la suma de dos números.
 * 
 * La función recibe 2 parámetros y si se trata de números, devolverá su
 * suma. En otro caso devolverá cero.
 * @param int $a número entero a sumar.
 * @param int $b número entero a sumar.
 * @return int suma de los parámetros o cero.
 */
function suma($a,$b){
    // Declaramos la variable que contrendrá el resultado.
    $result=0;
    /* Validamos si los parámetros son valores numéricos antes de hacer
     * la operación para evitar errores no deseados.*/
    if(is_numeric($a)&&is_numeric($b)){
        $result= intval($a)+intval($b);
    }
    // Devolvemos el resultado.
    return $result;
}

/**
 * Función para la realización del producto de dos números.
 * 
 * La función recibe 2 parámetros y si se trata de números, realiza el producto
 * de los mismos. Si no son números devolverá cero.
 * @param int $a
 * @param int $b
 * @return int producto de los dos números o cero.
 */
function producto($a,$b){
    // Declaramos la variable que contendrá el resultado
    $result=0;
    /* Validamos si los parámetros son valores numéricos antes de hacer
     * la operación para evitar errores no deseados.*/
    if(is_numeric($a)&&is_numeric($b)){
        $result= intval($a)*intval($b);
    }
    // Devolvemos el resultado.
    return $result;
}