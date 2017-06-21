<?php

session_start();

// para eliminar los datos de las sesiones existen dos maneras:
// 1) unset (para una variable individual, no se debe aplicar a la supervariable)
// 2) session_destroy() elimina la sesión y la borra

// unset($_SESSION['count']);

session_destroy();