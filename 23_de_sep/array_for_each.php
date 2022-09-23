<?php
   
    # podemos tener repositorios con id de tipo String asociado 
    #es decir que al pasarle un String valido al index nos retornara 
    #el valor de ese index
    $arr2=array("Viernes"=>24,
    "Sabado"=>34
    );

    #este for each aunque intente cambiar el valor del array list en el foreach 
    #ya que el valor de este es pasado por valor y por tanto no puede cambiar
    foreach($arr2 as  $cantidad){
        $cantidad=$cantidad*2;
    }
    print_r($arr2);

   #en cambio en este for each 
    foreach($arr2 as  $cantidad){
        $cantidad=$cantidad*2;
    }

    print_r($arr2);


?>