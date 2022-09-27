<?php
    #dado un array  semantico devuelve aquellos elementos cuya longitud de clave es mayor de cinco

    #creamos el array con las claves del array
    $output = array("bbbbb"=>0,"ccc"=>3,"fffff"=>2,"aa"=>0,11111=>5);

    #creamos un array vacio para insertarle datos
    $salida= array();



    #creamos un foreach que recorrera el array 
    foreach($output as $clave=>$valor){

        if(strlen($clave)>=5 ){
            $salida[$clave]= $valor;
        }
    }
    print_r($salida);











?>