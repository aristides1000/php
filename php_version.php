<?php
// Imprime ejemplo 'Versión actual de PHP: 5.3.8'
echo 'Versión actual de PHP: ' . phpversion();

// Imprime ejemplo '2.0' o nada si la extensión no está habilitada
echo phpversion('tidy');

//Imprime la información de nuestro php levantado
echo phpinfo();
?>