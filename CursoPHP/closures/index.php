<?php

// Funciones anónimas también conocidas como closures
// El scope que se genera dentro de la función anónima no está compartido
// con el scope global, si se quiere utilizar la variable se tiene que usar
// la palabra use

$var2 = 1;

$var = function () use ($var2) {
    echo 'This is a closure<br>';
    echo 'Value: ' . $var2 . '<br>';
};

// llamada a la función anónima
$var();

$x = 3;
$numbers = [1, 2, 3, 4, 5];

// uso de funciones anónimas como parámetros de funciones (callback)
$result = array_map(function ($n) use ($x) {
    return $n * $x;
}, $numbers);

var_dump($result);
