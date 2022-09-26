<?php
    #creamos la cadena que se dividira
    $cadena= "hola mundo,que te den,te quiero,largate,adios";
    
    #creamos la variable output que dividira la cadena usando la coma como diviso
    #para los que esteis familiarizados es similiar al split en java
    $output= explode(",",$cadena);
    
    #creamos un for each que recorrera el array imprimiendolo para demostrar que lo divido
    #mostrando el indice
    foreach ($output as $key=>$item){
        echo "$key $item <br>";
    }
    echo "<br>";

    #tambien se puede imprimir usando un print_r
    print_r($output);
?>