<?php

// las cookies son un mecanismo para guardar información del lado del cliente
// las cookies se pueden consultar desde las herramientas del desarrollador en el navegador

// ejemplo para contar el número de veces que el usuario visita la página
setcookie('count', '1', time()+3600);

echo '<p>Cookies</p>';