<?php

    #podemos definir un array indicando solo el valor lo cual generara un id del tipo entero consecutivo
    $arr1= array(10,20,30,40);
    #lo imprimimos
    print_r($arr1);
    echo "<br>";

    #si nosotros le añadimos al array un valor sin indicarle la posicion
    #este asignara al valor el id mas alto registrado + un uno
    $arr1[] =5;
    print_r($arr1);
    echo "<br>";

    #si le añadimos al arr1 con un id asignado como por ejemplo 10 añadira el elemento
    #el tamaño del array no variara lo unico que cambia aqui es el id por el cual empezara a contar
    $arr1[10] =6;
    $arr1[] =5;
    print_r($arr1);
    echo "<br>";
    echo(sizeof($arr1));
?>