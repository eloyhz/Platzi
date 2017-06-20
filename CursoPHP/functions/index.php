<?php

// declaración de la función
// la función puede recibir múltiples parámetros como nombres de variables
function hello($name) {
    echo 'Hello ' . $name;
    echo '<br>';
}

// llamado de la función se tiene que especificar el valor del parámetro
hello('Mary');
hello('Elizabeth');

$x = 100;
// las funciones nos pueden regresar valores
function sum($a, $b)    {
    $x = $a + $b;
    return $x;
}

$c = sum(1,2);
var_dump($c);
var_dump($x);


// scope = alcance o vida de una variable

// la variable tiene un alcance general pero no se accede directamente dentro de las
// funciones
