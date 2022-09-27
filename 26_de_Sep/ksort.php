<?php

    #creamos un array desordenado
    $texto= array("b"=>2,"a"=>1,"f"=>5,"c"=>3);

    #llamamos al metodo ksort ,este lo que hace es usar la clave para ordenar
    #el array de forma alphabetica
    ksort($texto);

    #imprimimos el resultado 
    foreach ($texto as $key=>$item){
        echo "$key $item<br>";
    }


?>