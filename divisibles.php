<?php
    #indicamos el numero del que queremos saber cuantas veces se puede dividir entre numero dado 
    $numero=6;

    #este es el numero por el cual se dividira
    $divisible_entre = 2;

    #este es el numero de veces que se dividira
    $veces_que_es_divisible=0;

    #si el numero obteniendo el resto vale 0 , es decir que es disible entre este numero
    if($numero%divisible_entre==0){
        #si es par creamos un for que se recorrera hacia atras haciendo que $i igual a numero recorriendo hacia
        #atras el array moviendo el valor hacia atras restandole el valor divisible que siempre sera el valor
        for($i=$numero;$i>0;$i-=$divisible_entre){

            echo "$i<br>";
            $veces_que_es_divisible++;

        }
        echo "el numero $numero es divisible   $veces_que_es_divisible veces entre $divisible_entre";
    }
    else{
        echo "el numero $numero  no es divisible entre $divisible_entre , es decir que este sera divisible cero veces entre $divisible_entre";
    }
?>