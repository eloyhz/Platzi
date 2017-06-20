<?php

// PHP solamente establece una relación entre llaves y valores.
// PHP no utiliza arreglos, sino que utiliza mapas ordenados
// Si no se asigna un valor, entonces PHP automáticamente asigna llaves enteras
$arrayVar = [
    'color1' => 'red',
    'color2' => 'blue',
    3 => 'black'
];
var_dump($arrayVar['color1']);