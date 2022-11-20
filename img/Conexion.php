<?php
$servername = "localhost";
$username = "root";
$password = "Qlarinetemaffe2";
$dbname = "proyectobd";


  $nombre= $_POST["nombresCliente"];
  $apellido= $_POST["apellidosCliente"];
  $direccion= $_POST["direccionCliente"];
  $id= $_POST["documentoCliente"];
  $telefono= $_POST["telefonoCliente"];



// Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO clientes(nombresCliente,apellidosCliente,direccionCliente,documentoCliente,telefonoCliente)
  VALUES ('$nombre', '$apellido', '$direccion','$id', '$telefono')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>
