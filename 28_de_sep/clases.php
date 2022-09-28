<?php
#para crear una clase en php utilizamos la palabra class
    class Persona {

        #definimos  la variables y le decimos que sean privativas
        private $DNI;
        private $nombre;
        private $apellido;


        #creamos el constructor usando la palabra reserbada  __construct , posdata
        #son dos guiones _ _ -> __
        function __construct($DNI, $nombre,$apellido)
        {
            #para  llamar a las variables internas en vez de usar  this.DNI  se usa this->DNI
            $this->DNI=$DNI;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
        }
    
 
        #la funciones get y set son practicamente igual a java o c#
        public function getDNI()
        {
            return $this->DNI;
        }

        public function getNombre()
        {
            return $this->nombre;
        }


        public function getApellido()
        {
            return $this->apellido;
        }

    
        public function setDNI($DNI)
        {
            $this->DNI = $DNI;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

        #el tostring se definiria igual solo que con dos guiones 
        public function __toString()
        {
            return "Persona:".$this->DNI." ".$this->nombre." ".$this->apellido;
        }
    }

    #para crear una clase derivada de otra seguieremos usando el extends como en java
    class cliente extends Persona{
        private $saldo =0;

        #para crear el constructor de esta deberemos de invocar al constructor de la clase
        #padre  esto se hace usando la palabra parrent::
        function __construct($DNI,$nombre,$apellido, $saldo )
        {
            parent::__construct($DNI,$nombre,$apellido );
            $this->saldo= $saldo;
        }

        /**
         * Get the value of saldo
         */ 
        public function getSaldo()
        {
                return $this->saldo;
        }


        public function setSaldo($saldo)
        {
                $this->saldo = $saldo; 
        }

        public function __toString()
        {
            return "Cliente: ". $this->getNombre();
        }
    }

    #para crear una variable de este objecto 
    $persona = new Persona("11111111A","Ana","Puerta");
    
    echo $persona."<br>";
    $persona->setApellido("Montes");
    echo $persona."<br>";


    $cliente = new cliente("11111111A","Ana","Puerta","1000");
    echo $cliente;
?>