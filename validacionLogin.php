<?php
     include_once('ConexionPHP.php');
     $admin = $_POST['usuario'];
     echo $admin;
     if($admin === "Christye" ){
          header("Location:admin.php");
     }else
     {
     if($_POST){
          session_start();
          include_once('ConexionPHP.php');
          $usuarioj = $_POST['usuario'];
          $contra = $_POST['pass'];
          $query = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuarioj AND contraseña = :contra");
          $query->bindParam(":usuarioj", $usuarioj);
          $query->bindParam(":contra", $contra);

          $query->execute();

          $usu = $query->fetch(PDO::FETCH_ASSOC);
          if($usu){
               $_SESSION["usuario"] = $usuario["usuario"];
               header("Location:index.html");
          }
          else{
               echo "Usuario incorrecto";
          }
     }
}


    /*if(empty($_POST["usuario"]) || empty($_POST["pass"]))  
           {  
                $message = '<label>Todos los campos son requeridos</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM usuariosc WHERE usuario = :usuario AND password = :pass";  
                $statement = $pdo->prepare($query);  
                $statement->execute(  
                     array(
                          'usuario'     =>     $_POST["usuario"],  
                          'password'     =>     $_POST["pass"]
      
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["usuario"] = $_POST["usuario"];  
                  
                     header("location:index.html");  
                }  
                else  
                {  
                     $message = '<label>Datos incorrectos</label>';  
                }  
           } 

*/
?>