<?php

    #este es el numero que deberemos refactorizar
    $numero = 5;
    #creamos la variable factorial que sera el valor del numero
    $factorial= $numero;

    #imprimiremos el numero que deberemos factorizar
    echo "el numero a factorizar es $numero<br><br>";

    #indicamos que vamos a usar un for
    echo "usando un for <br><br>";
   
    #creamos un for que se recorra siempre que el valor  $n que es igual al $numero-1  sea mayor a 0
    for($n=$numero-1 ; $n>0; $n--){
        #imprimimos el valor actual del factorial y que se multiplicara en el siguiente instante
        echo "se tiene  $factorial y se multiplica ($factorial*$n) dando ";

        #asignamos al factorial el valor de si mismo por $n
        $factorial= $factorial*$n;

        #imprimimos el valor del factoril
        echo " $factorial<br>";
        
      
    }
    #indicamos que el numero factorial 
    echo "el factorial de $numero es $factorial<br>";

    #indicamos que usaremos el do while 
    echo "<br>usando do while <br><br>";

    #reusamos las variables factorial y n para el do while
    $factorial= $numero;
    $n = $numero-1;

    #creamos un do while que se recorrera siempre que n sea mayor a 0
    do {
        #imprimimos el valor actual del factorial y que se multiplicara en el siguiente instante
        echo "se tiene  $factorial y se multiplica ($factorial*$n) dando ";

        #asignamos al factorial el valor de si mismo por $n
        $factorial= $factorial*$n;
  
        #imprimimos el valor del factoril
        echo " $factorial<br>";
        $n--;

    }while($n > 0);

    #imprimimos el factorial
    echo "el factorial de $numero es $factorial";


?>