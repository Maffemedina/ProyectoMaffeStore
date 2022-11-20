<?php 
    include("../php/conexion.php");
    $con=conectar();

$idCliente=$_GET['id']; //captura todo lo que diga id

$sql="SELECT * FROM clientes WHERE idCliente='$idCliente'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idCliente" value="<?php echo $row['idCliente']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="documentoCliente" placeholder="Documento" value="<?php echo $row['documentoCliente']  ?>">
                                <input type="text" class="form-control mb-3" name="nombresCliente" placeholder="Nombres" value="<?php echo $row['nombresCliente']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidosCliente" placeholder="Apellidos" value="<?php echo $row['apellidosCliente']  ?>">
                                <input type="text" class="form-control mb-3" name="direccionCliente" placeholder="Direccion" value="<?php echo $row['direccionCliente']  ?>">
                                <input type="text" class="form-control mb-3" name="telefonoCliente" placeholder="Telefono" value="<?php echo $row['telefonoCliente']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>