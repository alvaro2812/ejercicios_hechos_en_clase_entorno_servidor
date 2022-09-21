<?php
    $i = 0;
   

    echo "<br>break <br>";
    while($i<5){
        echo "$i <br>";
        $i++;
        if($i==3){
            break;
        }
        
        #echo $j++."<br>";
    }
    echo "se a ejecutado $i veces<br>";
   

    echo "<br>continue <br>";

    $i = 0;
    $j=0;
    while($i<5){
        echo "$i <br>";
        $i++;
        if($i==3){
            continue;
        }
        $j++;
        #echo $j++."<br>";
    }
    echo "se a ejecutado $i veces<br>";
    echo  "veces que pasara por j $j<br>";

?>