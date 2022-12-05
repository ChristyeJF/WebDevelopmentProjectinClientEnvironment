<?php
    include_once "ConexionPHP.php";

    $nomProduct = $_POST['nombreproducto'];
    $desProduct = $_POST['descripcionProducto'];
    $preProduct = $_POST['precioProducto'];


    $sql = $pdo->prepare("INSERT INTO productos(nombreProducto,descripcion,precio) VALUE (?,?,?)");
    $resultado = $sql->execute([$nomProduct, $desProduct, $preProduct ]);
    if ($resultado){
        header("Location:admin.php");
    }
    else{
        echo "No se insertaron los datos!";
    }

?>
