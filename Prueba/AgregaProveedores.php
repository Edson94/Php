<!--
    Este php sirve para llenar los datos del proveedor y enviar los datos al php llamado 
    Agrega.php que es quien los procesa para su posterior insercion
    Fecha:03/03/2017
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="js/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
        <script type="text/javascript">
          function soloNumeros(e){
                var key = window.Event ? e.which : e.keyCode
                return (key >= 48 && key <= 57)
          }
        </script>
    </head>
    <body>
       <a href="Proveedores.php">Regresar</a>
       <?php
        if(isset($_GET['Id'])!=true){
            ?>
        <form action="Agrega.php" method="POST">
            <div class="container">
                <input type="hidden" value="1" name="txtOpcion">
                <div class="row">
                    <div class="col-md-4 col-xs-5">
                        <h4>Nuevo Proveedor</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-2">
                        <p>Nombre :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-3">
                        <input type="text" name="txtNombre" required="required" maxlength="100">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-2">
                        <p>Telefono :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-3">
                        <input type="text" name="txtNumero" required="required" value="52" onKeyPress="return soloNumeros(event)">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-2">
                        <p>Ciudad :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-3">
                        <input type="text" name="txtCiudad" required="required" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-2">
                        <p>Descuento :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-3">
                        <input type="number" name="txtDescuento" required="required">
                    </div>
                    <div class="col-md-1">
                        %
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-xs-2">
                        <p>Metodo de Cobro :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-3">
                        <select name="dblMetodoCobro">
                            <option value="Efectivo">Efectivo</option>
                            <option value="Cheque">Cheque</option>
                            <option value="Tarjeta">Tarjeta</option>
                        </select>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-offset-4 col-md-1">
                        <input type="submit" id="btnGuardar" class="btn btn-success" style="border-radius: 5px;" value="Guardar">
                    </div>
                </div>
            </div>
        </form>
        <?php
        }else{
            $mysql = new mysqli("localhost", "root", "fcfmedson", "db_examen");
            $sql = "select * from tblProveedores where IdProveedor=".$_GET['Id']."";
            if($resultado = $mysql->query($sql)){
               while($actor = $resultado->fetch_assoc()){
                        
                
            ?>
            <form action="Agrega.php" method="POST">
            <div class="container">
                <input type="hidden" value="<?php echo $_GET['Id'];?>" name="txtIdProveedor">
                <input type="hidden" value="2" name="txtOpcion">
                <div class="row">
                    <div class="col-md-4 col-xs-5">
                        <h4>Nuevo Proveedor</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-2">
                        <p>Nombre :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-3">
                        <input type="text" name="txtNombre" required="required" maxlength="100" value="<?php echo $actor['Nombres'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-2">
                        <p>Telefono :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-3">
                        <input type="text" name="txtNumero" required="required" value="<?php echo $actor['Telefono'];?>" onKeyPress="return soloNumeros(event)">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-2">
                        <p>Ciudad :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-3">
                        <input type="text" name="txtCiudad" required="required" value="<?php echo $actor['Ciudad'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-2">
                        <p>Descuento :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-3">
                        <input type="number" name="txtDescuento" required="required" value="<?php echo $actor['Descuento'];?>">
                    </div>
                    <div class="col-md-1">
                        %
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-xs-2">
                        <p>Metodo de Cobro :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-3">
                        <select name="dblMetodoCobro">
                            <option value="Efectivo">Efectivo</option>
                            <option value="Cheque">Cheque</option>
                            <option value="Tarjeta">Tarjeta</option>
                        </select>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-offset-4 col-md-1">
                        <input type="submit" id="btnGuardar" class="btn btn-success" style="border-radius: 5px;" value="Guardar">
                    </div>
                </div>
            </div>
        </form> 
        <?php
           }
            }
            $resultado->free();
                  $mysql->close();
               }?>
    </body>
</html>