<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Productos - Administrador</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center" style="background-color: blueviolet; color: aliceblue; border-radius: 10px;">Listado de productos</h1>
        <br>
    </div>
    
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nombre del Producto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once("ConexionPHP.php");
                    $sql = $pdo-> query("SELECT *FROM productos");
                    $fila = $sql -> fetchAll(PDO::FETCH_OBJ);
                    foreach($fila as $row){
                
                ?>
                <tr>
                    <th scope="row"><?php echo $row-> id?></th>
                    <td><?php echo $row-> nombreProducto?></td>
                    <td><?php echo $row-> descripcion?></td>
                    <td><?php echo $row-> precio?></td>

                    <td>
                        <a href="editarProducto.php?id=<?php echo $row -> id?>" class="btn btn-warning">Editar</a>
                        <a href="eliminarProducto.php?id=<?php echo $row -> id?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>


                <?php       
                    }
                ?>

                
             
            </tbody>
        </table>
        <a href="FormProduct.php" class="btn btn-success">Agregar Producto</a>
    </div>
</body>
</html>