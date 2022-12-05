<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Editar Producto</title>
</head>
<body>


<?php 
    include_once "ConexionPHP.php";
    $CodID = $_GET['id'];
    $sql = $pdo->prepare("SELECT * FROM productos WHERE id = ?");
    $resultado = $sql->execute([$CodID]);

    $Fila = $sql->fetch(PDO::FETCH_OBJ);

?>
    <div class="container">
        <h1 class="text-center" style="background-color: blueviolet; color: aliceblue; border-radius: 10px;">Editar Producto</h1>
    </div>

    <div class="container">
        <br>
        <form action="editar.php" method="POST">
        <input type="Hidden" class="form-control" name="Id" value ="<?php echo $Fila -> id ?>">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" name="nombreproducto" value ="<?php echo $Fila -> nombreProducto ?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcionProducto" value ="<?php echo $Fila -> descripcion ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precioProducto" value ="<?php echo $Fila -> precio ?>">
        </div>
       
        <button type="submit" class="btn btn-success">Enviar</button>
        <a href="admin.php" class="btn btn-dark">Regresar</a>
        </form>
    </div>
</body>
</html>