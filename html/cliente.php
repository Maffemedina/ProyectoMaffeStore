<?php 
    include("../php/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM clientes";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA CLIENTE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap-4.6.0/diseño.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>REGISTRO DE CLIENTE</h1>
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="idCliente" placeholder="Codigo Cliente">
                                    <input type="text" class="form-control mb-3" name="documentoCliente" placeholder="Documento">
                                    <input type="text" class="form-control mb-3" name="nombresCliente" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidosCliente" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="direccionCliente" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="telefonoCliente" placeholder="Telefono">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a class="btn btn-primary" href="../index.html">Volver al Menú</a>

                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Documento</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    while($row=mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <th><?php  echo $row['idCliente']?></th>
                                        <th><?php  echo $row['documentoCliente']?></th>
                                        <th><?php  echo $row['nombresCliente']?></th>
                                        <th><?php  echo $row['apellidosCliente']?></th> 
                                        <th><?php  echo $row['direccionCliente']?></th>
                                        <th><?php  echo $row['telefonoCliente']?></th>     
                                        <th><a href="actualizar.php?id=<?php echo $row['idCliente'] ?>" class="btn btn-info">Editar</a></th>
                                        <th><a href="delete.php?id=<?php echo $row['idCliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>