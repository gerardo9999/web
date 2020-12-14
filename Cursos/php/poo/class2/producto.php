<?php
    include_once "../class2/categoria.php";
    
    class Producto extends Categoria{
        var $id;
        var $nombre;
        

        public function __construct(){
            $this->id = 0;
            $this->nombre    = "";
            $this->idCategoria = 0;   
        }

        public function agregarCategoria($nombre,$categoria){
            $this->nombre = $nombre;
            $this->categoria = $categoria;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $categoria = new Categoria();
        $categoria->agregarCategoria(1,"Electrodomesticos");

        echo "<h1>".$categoria->categoria."</h1>"
    ?>

</body>
</html>