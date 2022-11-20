<?php
include("../php/conexion.php");
$con=conectar();

$idcliente=$_POST["idCliente"];
$documento= $_POST["documentoCliente"];
$nombres= $_POST["nombresCliente"];
$apellidos= $_POST["apellidosCliente"];
$direccion= $_POST["direccionCliente"];
$telefono= $_POST["telefonoCliente"];

$sql="INSERT INTO clientes VALUES('$idcliente','$documento','$nombres','$apellidos','$direccion','$telefono')";
$query= mysqli_query($con,$sql);//HACE LA CONSULTA

if($query){
    Header("Location: cliente.php");//SI ME HACE LA CONSULTA ME DEVUELVE A LA PAGINA CLIENTE
    
}else {
}
?>