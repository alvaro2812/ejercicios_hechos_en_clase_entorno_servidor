<?php
    #creamos los array para operar
    $arr1= array(1=>"3000",2=>"4000",);
    $arr2= array(1=>3000,2=>4000,);
    $arr3= array(2=>"4000",1=>"3000",);

    #creamos un if que comprobara si ambos array son iguales , esto hara que convierta de
    #entero a string para compararlos
    if($arr1 == $arr2){
        echo "arr1 y arr2 son iguales <br>";
    }
    else{
        echo "arr1 y arr2 no son iguales <br>";
    }  
    
    #creamos un if que comprobara si ambos array son iguales , esto hara que convierta de
    #entero a string para compararlos
    if($arr1 == $arr3){
        echo "arr1 y arr3 son iguales <br>";
    }
    else{
        echo "arr1 y arr3 no son iguales <br>";
    }

    #en este caso compara directamente el array lo que significa que el tipo de valor y el index
    # es igual indicara que estos dos son identicos
    if($arr1 === $arr2){
        echo "arr1 y arr2 son identicos <br>";
    }
    else{
        echo "arr1 y arr2 no son identicos <br>";
    }

    if($arr1 === $arr3){
        echo "arr1 y arr3 son identicos <br>";
    }
    else{
        echo "arr1 y arr3 no son identicos <br>";
    }
?>