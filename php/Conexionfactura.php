<?php
  
  $Servidor = "localhost";
  $Base_Datos = "proyectobd";
  $usuario = "root";   //usuario del motor de base de datos
  $clave = "Qlarinetemaffe2" ;  // clave del usuario del motor de la base de datos

  $conexion = new mysqli($Servidor,$usuario,$clave);
  mysqli_select_db($conexion,$Base_Datos);
