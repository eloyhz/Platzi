<?php

// cual es la diferencia entre comillas simples y comillas dobles?
$intVar = 5;
// $stringVar = "Hello $intVar";

$stringVar = "9";

$newVar = $stringVar . $intVar;
echo $newVar . '<br>';

$newVar = $intVar . $stringVar;
echo $newVar . '<br>';

$newVar = $stringVar + $intVar;
echo $newVar . '<br>';

$newVar = $intVar + $stringVar;
echo $newVar . '<br>';

// en comillas dobles PHP evalua la cadena
