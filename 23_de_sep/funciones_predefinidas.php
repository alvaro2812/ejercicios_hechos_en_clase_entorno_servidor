<?php
    function obtener_info( $var1 ,$var2  ,$var3,$var4){
        echo "var 1 Valor: ".$var1." ";
        var_dump(isset($var1));
        var_dump(is_null($var1));
        var_dump(empty($var1));

        echo "<br><br>var 2 Valor: ".$var2." ";
        
        var_dump(isset($var2));
        var_dump(is_null($var2));
        var_dump(empty($var2));

        echo "<br><br>var 3 Valor: ".$var3." ";
        var_dump(isset($var3));
        var_dump(is_null($var3));
        var_dump(empty($var3));

        echo "<br><br>var 4 Valor: ".$var4." ";
        var_dump(isset($var4));
        var_dump(is_null($var4));
        var_dump(empty($var4));


    }

   
?>