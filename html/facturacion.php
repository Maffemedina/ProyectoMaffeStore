<?php
  include("../php/conexion.php");
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="..\css\bootstrap-4.6.0\dist\css\bootstrap.css">
    <title>Document</title>
</head>
<body onload="fecha()">
    <div class="container">
        <form action="" method="post">
            FACTURACIÓN
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">CLIENTE</label>
                    <input type="text" name="codigoCliente" id="codigoCliente" class="form-control">
                </div>
                <div>
                    <label for="">Nombre: </label>
                    <input type="text" name="nombreCliente" id="nombreCliente" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">Fecha: </label>
                    <input type="text" name="fecha" id="fecha" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">SubTotal: </label>
                    <input type="text" name="subTotal" id="subTotal" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Iva: </label>
                    <input type="text" name="iva" id="iva" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Total: </label>
                    <input type="text" name="total" id="total" class="form-control">
                </div>
            </div> 
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="">IdProd</label>
                    <input type="text" name="idProducto" id="idProducto" class="form-control">
                </div>
                <div class="form-group col-md-5">
                    <label for="">Descripción Producto</label>
                    <input type="text" name="nombreProducto" id="nombreProducto" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">PVP</label>
                    <input type="text" name="pvp" id="pvp" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Cant</label>
                    <input type="text" name="cantidad" id="cantidad" class="form-control">
                </div>
                <div class="form-group col-md-1">
                    <label for="">Registrar</label>
                    <input type="button" value="Add" class="form-control" >
                </div>
            </div>
            <table id="detalle" class ="table table-bordered table-hover">
                <thead>
                    <tr>
                        <tr>IdProducto</tr>
                        <th>Descripción Producto</th>
                        <th>PVP</th>
                        <th>Cant</th>
                        <th>Total</th>
                    </tr>
                </thead>

            </table>   
        </form>
    </div>
</body>
<script>
    function fecha()
    {
        var today= new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        if(dd<10)
        {
            dd = '0' + dd;
        }
        if(mm<10)
        {
            dd = '0' + mm;
        }
        today = dd + '/' + mm + '/' + yyyy;
        document.getElementById("fecha").value = today;

    }
</script>
</html>