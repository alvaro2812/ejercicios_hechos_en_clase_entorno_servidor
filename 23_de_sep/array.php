<?php
    #un array en php se puede definir de la manera convencional que es asignandole
    #un valor con una posicion en entero solo que aqui le indicamos el index
    $arr1 = [0=>444,1=>222,2,333,];

    #la funcion print_r se usa para imprimir un array en su totalidad con sus id
    print_r($arr1);

    #podemos imprimir la posicion 0 como en otro lenguaje de programacion asi 
    #como cambiarla
    echo "<br> pos 0". $arr1[0]."<br>";
    $arr1[0]= 555;
    print_r($arr1);
    
    #tambien podemos tener repositorios con id de tipo String asociado 
    #es decir que al pasarle un String valido al index nos retornara 
    #el valor de ese index
    $arr2=array("1111A"=>"Juan Vera Ochoa",
    "1112A"=>"Maria Mesa Cabeza",
    "1113A"=>"Ana Puertas Peral"
    );
    #podemos cambiarlo de igual manera que con un id entero
    $arr2["1113A"] = "Ana Puertas Segundo"; 

    #el foreach se usa para que interprete todos los elementos internos del array
    foreach($arr2 as $nombre){
        echo "$nombre <br>";
    }

    #este foreach es similar al anterior solo que aqui al indicarle una variable con el simbolo =>
    # nos imprimira tambien el index
    foreach($arr2 as $codigo => $nombre){
        echo "Codigo:$codigo Nombre:$nombre <br>";
    }

?>