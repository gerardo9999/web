<?php
    include_once "../class3/array.php";
    $array1 = new Vector();
    $array1->setElemento(10);
    $array1->setElemento(11);
    $array1->setElemento(12);
    $array1->setElemento(13);
    $array1->setElemento(14);
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

        for ($i=0; $i < $array1->getContador; $i++) { 
            echo $array1->getElemento($i);
        }
        
        
        
    ?>
    
</body>
</html>