<?php

    class aula{
        private $silla;
        private $mesa;
        private $ordenadores;

        function __construct($silla,$mesa,$ordenadores)
        {
            $this->silla=$silla;
            $this->mesa= $mesa;
            $this->ordenadores= $ordenadores;
        } 

        

        /**
         * Get the value of silla
         */ 
        public function getSilla()
        {
                return $this->silla;
        }

        /**
         * Get the value of mesa
         */ 
        public function getMesa()
        {
                return $this->mesa;
        }

        /**
         * Get the value of ordenadores
         */ 
        public function getOrdenadores()
        {
                return $this->ordenadores;
        }
        public function __toString()
        {
            return "Aula tiene  ". 
            $this->getSilla()." sillas ".
            $this->getMesa()." Mesas ". 
            $this->getOrdenadores()." Ordenadores";
        }
    }
    #20,10,40 10,5,7
    $aula1 = new aula(20,10,40);
    $aula2 = new aula(10,5,7);

    echo   $aula1;
    echo "<br>";

    echo   $aula2;


    echo "<br>";
    echo "<br>";

    echo  "el total de sillas es ".($aula1->getSilla()+$aula2->getSilla());
    echo "<br>";
    echo  "el total de Mesas es ".($aula1->getMesa()+$aula2->getMesa());
    echo "<br>";
    echo  "el total de Ordenadores es ".($aula1->getOrdenadores()+$aula2->getOrdenadores());

    
    
?>