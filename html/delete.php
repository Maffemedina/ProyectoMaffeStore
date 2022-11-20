<?php

include("../php/conexion.php");
$con=conectar();

$idCliente=$_GET['id'];//EL PRECIONAR ELIMINAR , SE ELIMINA EL CON REFERENCIA al idCliente

$sql="DELETE FROM clientes  WHERE idCliente='$idCliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
