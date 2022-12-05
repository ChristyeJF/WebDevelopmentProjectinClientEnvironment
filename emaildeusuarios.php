<?php
    include_once('ConexionPHP.php');
    //Dato email usuario
    $email=$_POST['Email'];
    $fecha = date('y-m-d');
    //Registro en la BD
    $query = "INSERT INTO emaildeusuarios(Email, Fecha) VALUES (:email, :fecha)";
    $sql = $pdo->prepare($query);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':fecha', $fecha);
    //$sql->execute(['Email' => $email, 'Fecha' => $fecha]);
    if($sql->execute()){
        echo '<script> alert("Email enviado correctamente!) </script>';
    }
    else{
        echo '<script> alert("Email no enviado!) </script>';
    }
    header ('Location: index.html');
?>