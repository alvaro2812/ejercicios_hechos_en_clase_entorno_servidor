<?php
   echo "Ruta dentro de htdocs: ".$_SERVER['PHP_SELF'];
   echo "<br>";
   echo "Nombre del servidor: ".$_SERVER['SERVER_NAME'];
   echo "<br>";
   echo "Software del servidor: ".$_SERVER['SERVER_SOFTWARE'];
   echo "<br>";
   echo "Protocolo del servidor: ".$_SERVER['SERVER_PROTOCOL'];
   echo "<br>";
   echo "Método de la petición: ".$_SERVER['REQUEST_METHOD'];
?>