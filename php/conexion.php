<?php
  $Servidor ="localhost";
  $Base_Datos= "proyectoBD";
  $usuario= "root";
  $clave= "Qlarinetemaffe2";


  $conexion = new mysqli($Servidor,$usuario,$clave);
  mysqli_select_db($conexion,$Base_Datos);
//