<?php

// para destruir una cookie se utiliza la función setcookie con un tiempo
// de expiración ya pasado (el valor no importa)

echo 'Destroy';
setcookie('count', null, time() - 1);