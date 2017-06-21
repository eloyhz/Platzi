<?php

// cuidado!!!
// el valor de la cookie no se puede modificar directamente sobre la superglobal
// de la siguiente manera:
// $_COOKIE['count']++;

// se tiene que utilizar la función setcookie para modificar su valor
$value = $_COOKIE['count'];
$value++;

// no es necesario establecer el tiempo de vida porque utiliza el que se había definido previamente
setcookie('count', $value);

echo '<p>Adding 1</p>';
