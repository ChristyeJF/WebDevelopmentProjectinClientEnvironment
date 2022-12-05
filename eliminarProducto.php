<?php
    include_once "ConexionPHP.php";

    $id = ($_GET['id']);


    $sql = $pdo->prepare("DELETE FROM productos WHERE id = ?");
    $resultado = $sql->execute([$id]);
    if ($resultado){
        header("Location:admin.php");
    }
    else{
        echo "No se elimino!";
    }

?>
