<?php
    class Vector{
        var $contador;
        var $dimension;
        var $vector;
    
        public function __construct(){
            $this->contador  = 0;
            $this->dimension = 0;
            $this->vector    = [];
        }

        public function getDimension(){
            return $this->dimension;
        }
        public function getContador(){
            return $this->contador;
        }
        public function getElemento($i){
            return $this->vector[$i];
        }
       

        public function setDimension($dimension){
            $this->dimension = $dimension;
        }
        public function getContarElemento(){
            $length = count($this->vector);
            return $this->contador = $length;
        }
       
        public function setElemento($elemento){
            array_push($this->vector,$elemento);
            $this->contador++;
        }
    
    }


?>