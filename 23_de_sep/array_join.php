<?php
    $arr1= array(10=>"3000",20=>"4000",30=>"6000");
    $arr2=  array(10=>"8000",15=>"6000",20=>"4000");

    print_r($arr1);
    echo "<br>";
    print_r($arr2);
    echo "<br>";

    $arr3 = $arr1+$arr2;
    print_r($arr3);
    echo "<br>";


    $arr4 = $arr2+$arr1;
    print_r($arr4);
    echo "<br>";
?>
