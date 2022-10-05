<?php

    #la funcion generar_raiz_suma_y_cuadrado_de_n obtendra $n como int
    # y realizara la suma sobre si mismo , la potencia del numero y la raiz cuadrada
    function generar_raiz_suma_y_cuadrado_de_n($n){
        #indicamos el numero introducido por parametro
        echo "el numero introducido por el metodo post a traves de un formulario vale  $n "."<br>";
        
        #haremos la suma del numero sobre si mismo
        echo "la suma de el numero $n  sobre si mismo es ".$n+$n."<br>";
        
        #para hacer la potencia usaremos la funcion pow que dado un numero y un exponente en este
        # caso 2 realizara la potencia
        echo "la potencia al cuadrado de $n es ". pow($n,2)."<br>";
        
        #para hacer la raiz cuadrada $n se calcula usando la funcion sqrt
        echo "la raiz cuadrada de $n es ". sqrt($n)."<br>";
        echo "<br>";
    }

    #solicitaremos al servidor que request_method sea de tipo post para que no se acepten conexiones
    #get o de otro tipo

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        #creamos las variables con las que consultaremos el post , las creamos de tal manera 
        #que si el campo en post no existe retornara un string vacio, esto tendra explicacion mas adelante
        $numero1 = (isset($_POST['numero1']))?$_POST['numero1']:"";
        $numero2 = (isset($_POST['numero2']))?$_POST['numero2']:"";
        $numero3 = (isset($_POST['numero3']))?$_POST['numero3']:"";
        $numero4 = (isset($_POST['numero4']))?$_POST['numero4']:"";

        #creamos un array de lo obtenido consultar numero 1 a 4
        $numeros = array( $numero1, $numero2, $numero3, $numero4);
        
        #creamos un for each para recorrer el array
        foreach($numeros as $clave=> $valor){
            #comprobamos si es numerico el valor
            if(is_numeric($valor)){
    
                #si lo es llamamos al metodo generar_raiz_suma_y_cuadrado_de_n con ese valor
                generar_raiz_suma_y_cuadrado_de_n($valor);
            }
        }
      

    
    }
