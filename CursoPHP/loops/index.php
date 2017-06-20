<?php

echo 'Ciclo for'.'<br>';
for ($i = 1; $i <= 10; $i++)    {
    echo $i . '<br>';
}

echo 'Ciclo while'.'<br>';
$i = 1;
while ($i <= 10) {
    echo $i . '<br>';
    $i++;
}

echo 'Ciclo do-while<br>';
$i = 1;
do  {  // el contenido se ejecuta al menos una vez
    echo $i . '<br>';
    $i++;
}   while ($i <= 10);

echo 'Ciclo for-each<br>'; // utilizada principalmente para arreglos
$names = ['Alex', 'Elizabeth', 'Mary'];
foreach ($names as $name)   {
    // la variable $name tomará el valor de cada uno de los elementos del arreglo
    echo $name . '<br>';
}

echo 'Ciclo for-each usando la llave<br>';
foreach ($names as $key => $name)   {
    // la variable $name tomará el valor de cada uno de los elementos del arreglo
    echo $key . '-' . $name . '<br>';
}