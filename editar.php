<?php
    include_once "ConexionPHP.php";

    $Id = $_POST['Id'];
    $nomProduct = $_POST['nombreproducto'];
    $desProduct = $_POST['descripcionProducto'];
    $preProduct = $_POST['precioProducto'];


    $sentencia = $pdo->prepare("UPDATE productos SET nombreProducto = ?, descripcion = ?, precio = ? WHERE id = ?");


    $resultado = $sentencia -> execute([$nomProduct, $desProduct, $preProduct, $Id]);


    if($resultado === TRUE){
        header("Location: admin.php");
    }
    else{
        echo "No se actualizó!";
    }


?>