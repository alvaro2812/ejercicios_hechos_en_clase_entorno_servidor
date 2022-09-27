<?php

    function calculator($operacion, $numa , $numb){
        return $operacion($numa,$numb);
    }
    function sumar($a,$b){
        return $a+$b;
    }

    function multiplicar($a,$b){
        return $a*$b; 
    }

    $a= 4;
    $b= 5;
    $rl= calculator("multiplicar",$a,$b);
    echo $rl+"<br>";


    $rl2= calculator("sumar",$a,$b);
    echo $rl2+"<br>";
?>