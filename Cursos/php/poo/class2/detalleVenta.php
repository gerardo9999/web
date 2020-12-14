<?php
    class DetalleVenta extends Producto{
        var $subTotal;
        var $cantidad;
        var $producto;
    
        public function __construct(){
            $this->subTotal = 0;
            $this->cantidad = 0;
            $this->producto = "";
        }
        public function getSubTotal(){
            return $this->subTotal;
        }
        public function getCantidad(){
            return $this->cantidad;
        }
        public function getProducto(){
            return $this->producto;
        }
        public function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }
        public function setProducto($producto){
            $this->$producto = $producto;
        }
        public function setSubTotal($subTotal){
            $this->subTotal = $subTotal;
        }
    }





?>