<?php
    $var1= 100;
    $var2= &$var1;
    $var3= $var1;
    echo "el valor de var2 vale $var2, lo mismo que var1<br>";
    $var2= 300;
    echo "se cambio el valor de var2 , este es el valor de var1: $var1<br>";
    $var3= 400;
    
    echo "<br>el valor de var1 es ".$var1;
    
?>