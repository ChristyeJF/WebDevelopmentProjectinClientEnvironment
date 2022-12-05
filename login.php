<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <form action="validacionLogin.php" method="POST">
        <h2>Iniciar Sesión</h2>
        <hr>
        <?php
                if(isset($_GET['error'])){
                ?>
                <p class="error"> 
                    <?php
                        echo $_GET['error']
                    ?>
                </p>
        <?php
        }
        ?>
        <hr>
        <input type="text" placeholder="&#128273; Usuario" name="usuario" required>
        <input type="text" placeholder="&#128274; Contraseña" name="pass" required>
        <input type="submit" value="Ingresa" name="btningresar">
        <br>
        <a href="registro.html" style="float:right">Crear una cuenta</a>

    </form>
</body>

</html>
