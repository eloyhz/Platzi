<?php

// Formas de incluir un archivo externo:
// 1. include
// 2. include_once
// 3. require
// 4. require_once

// include_once solamente lo incluye una sola vez. Utilizado preferentemente cuando se
// quiere evitar la redeclaración de una función o clase
// si no existe el archivo entonces
//      include no detiene el script, solamente genera una advertencia
//      require detiene el script y envía un error fatal

include_once 'functions.php'; // si existe un error solamente se recibe una advertencia
include_once 'functions.php'; // si existe un error solamente se recibe una advertencia
require_once 'functions.php'; // si existe un error PHP se detiene

echo '<p>Text from index.php</p>';

sum(10, 20);