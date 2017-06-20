<?php

$array1 = [
    1 => 'b',
    2 => 'c',
    0 => 'a'
];

$array2 = [
    2 => 'd',
    4 => 'e'
];

$array3 = ['a', 'b', 'c'];

$result = $array1 + $array2;
var_dump($array1 === $array3);
var_dump($result);
