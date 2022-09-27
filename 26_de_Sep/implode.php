<?php
    #creamos un array con cadenas que queremos unir
    $output = array("esto","es","una","prueba");

    #creamos la variable salida_formateada  , usando el implode le indicaremos que
    #procese la info del array y le añade un espacio , si este espacio no estuviera
    #pegaria las cadenas sin espacios
    $salida_formateada = implode(" ",$output);

    #imprimimos la salida
    echo $salida_formateada;


?>