<?php
    class Categoria{
        var $id;
        var $categoria ;
        
        public function __construct(){
            $this->id = 0 ;
            $this->categoria = "";
        }

        public function getIdCategoria(){
            return $this->id;
        }
        public function getCategoria(){
            return $this->categoria;
        }
        public function setIdCategoria($id){
            $this->id = $id;
        }
        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }

        public function agregarCategoria($id, $categoria){
            $this->id        = $id;
            $this->categoria = $categoria;
        }

    }

?>