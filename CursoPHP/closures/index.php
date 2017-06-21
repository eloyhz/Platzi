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
$closure = function ($n) use ($x) {
    return $n * $x;
};

// el valor de la dependencia no se puede modificar una vez asignado el valor con use
$x = 4;

// uso de funciones anónimas como parámetros de funciones (callback)
$result = array_map($closure, $numbers);

var_dump($result);
