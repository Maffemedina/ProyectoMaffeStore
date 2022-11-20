<?php

include("../php/conexion.php");
$con=conectar();

$idCliente=$_POST["idCliente"];
$documento= $_POST["documentoCliente"];
$nombres= $_POST["nombresCliente"];
$apellidos= $_POST["apellidosCliente"];
$direccion= $_POST["direccionCliente"];
$telefono= $_POST["telefonoCliente"];

$sql="UPDATE clientes SET  documentoCliente='$documento',nombresCliente='$nombres',apellidosCliente='$apellidos',telefonoCliente='$telefono' WHERE idCliente='$idCliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>