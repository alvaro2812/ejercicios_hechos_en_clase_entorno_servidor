<?php
    #creamos la cadena que se dividira
    $cadena= "hola mundo,que tal,buenas,algo,adios";
    
    #creamos la variable output que dividira la cadena usando la coma como diviso
    #para los que esteis familiarizados es similiar al split en java
    $output= explode(",",$cadena);
    
    #creamos un for  que recorrera el array imprimiendolo para demostrar que lo divido
    #mostrando el indice
    for($i=0;$i<count($output);$i++){
        echo "$i ".$output[$i]. "<br>";
    }
    echo "<br>";

    #tambien se puede imprimir usando un print_r
    print_r($output);
?>