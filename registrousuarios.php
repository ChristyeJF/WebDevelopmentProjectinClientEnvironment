<?php
    include_once('ConexionPHP.php');
    //Dato usuario contraseña
    $namecj=$_POST['nam'];
    $user=$_POST['usuario'];
    $passw=$_POST['pass'];
    $id_cargo=2;
    //Registro en la BD
    $quer = "INSERT INTO usuarios(nombre, usuario, contraseña, id_cargo) VALUES (:namecj, :user, :passw, :id_cargo)";
    $sql = $pdo->prepare($quer);
    $sql->bindParam(':namecj', $namecj);
    $sql->bindParam(':user', $user);
    $sql->bindParam(':passw', $passw);
    $sql->bindParam(':id_cargo', $id_cargo);
    //$sql->execute(['Email' => $email, 'Fecha' => $fecha]);
    if($sql->execute()){
        echo '<script> alert("Usuario registrado!") </script>';
    }
    else{
        echo '<script> alert("No registrado!") </script>';
    }
    header ('Location: login.php');
?>