<?php

$color = 'green';

if ($color == 'black') {
    echo 'Color is black';
}   elseif ($color == 'white')    {
    echo 'Color is white';
}   else    {
    echo 'Color...';
}

echo '<br>';

switch ($color) {
    default:
        echo 'Other color';
        break;
    case 'blue':
        echo 'Color is blue';
        break;
    case 'red':
        echo 'Color is red';
        break;
}