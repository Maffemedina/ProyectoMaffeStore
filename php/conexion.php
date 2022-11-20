<?php
function conectar(){
    $servername = "localhost";
    $username = "root";
    $password = "Qlarinetemaffe2";

    $dbname = "proyectobd";

    $con=mysqli_connect($servername,$username,$password);

    mysqli_select_db($con,$dbname);

    return $con;
}
?>
