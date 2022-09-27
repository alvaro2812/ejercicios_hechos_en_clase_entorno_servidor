<?php
#la funcion potencia permitira dos argumentos de entrada aunque ya que uno se encunetra inicializado 
#con un valor se le puede pasar solo uno
    function potencia($base,$exponente=3){
        #el metodo potencia pasado una base y un exponente nos dara sun potencia
        return pow($base,$exponente);

    }
    echo potencia(2);

?>