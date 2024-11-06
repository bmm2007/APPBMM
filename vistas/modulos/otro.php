<?php


echo "https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
// Salida: midominio.com
// echo $_SERVER['REQUEST_URI'];
// Salida: /pagina/index.php?user=pepito