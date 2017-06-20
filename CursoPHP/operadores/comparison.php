<?php

$v1 = 10;
$v2 = '10';

// ¿Cuál es la diferencia entre la comparación entre == y === ?
$result = $v1 == $v2;
var_dump($result);

$w1 = 10;
$w2 = '10';

// === compara el valor y el tipo de dato
$result2 = $w1 === $w2;
var_dump($result2);

// nuevo operador (spaceship) a partir de PHP 7 comparar si dos valores
// son menor, igual o mayor
$z1 = 7;
$z2 = 4;

// Operador spaceship regresa:
// 0 si son iguales
// -1 si el primero es menor
// 1 si el primero es mayor
$result3 = $z1 <=> $z2;
var_dump($result3);

