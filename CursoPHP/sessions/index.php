<?php

// inicializar la sesión para acceder a las variables superglobales
session_start();

// las sesiones son únicas por cliente, es decir que si se abre en otro navegador
// o se cierra y completamente y se vuelve a abrir entonces se perderá el valor de la sesión.

// variable superglobal para poder accederla entre varias páginas
$_SESSION['count'] = 0;

echo '<p>Session</p>';