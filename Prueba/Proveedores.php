<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="js/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
    </head>
    <body>
          <div class="container">
        <div class="row">
            <div class="col-md-offset-5"></div>
            <div class="col-md-5">
              <nav class="navbar navbar-light bg-faded">
                  <form class="form-inline" method="POST" action="BuscaProveedores.php">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" name="txtBuscar">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
              </nav>
            </div>
          </div>
          <a href="index.php">Salir</a>
        <?php 
                  $mysql = new mysqli("localhost", "root", "fcfmedson", "db_examen");
                  $sql;
                  $numero = 0;
                  if(isset($_POST['txtUsuario'])!=true && isset($_POST['txtPassword'])!=true){
                      $numero = 1;
                  }else{
                       $sql = "call csp_Login('".$_POST['txtUsuario']."','".$_POST['txtPassword']."')";
                  }
                  if($numero!=1){
                     if($resultado = $mysql->query($sql)){
                        while($actor = $resultado->fetch_assoc()){
                            $numero = $actor['numUsuario'];
                        }
                      }   
                      $resultado->free();
                  
                  }
                  $mysql->close();
                  if($numero > 0 ){ ?>
      
            <div class="row" style="margin-top: 2%;">
                <div class="col-md-4 col-xs-5">
                    <h4>Catalogo de Proveedores</h4>
                </div>
                <div class="col-md-1 col-xs-1">
                    <form method="POST" action="AgregaProveedores.php">
                        <button type="submit" name="btnNuevo" class="btn btn-primary" style="border-radius: 5px;">Nuevo</button>
                    </form>
                </div>
            </div>
              <form action="EliminaProveedores.php" method="POST">
            <div class="row" style="margin-top: 2%;">
                <div class="col-md-10">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre(s)</th>
                                <th>Telefono</th>
                                <th>Ciudad</th>
                                <th>Descuento</th>
                                <th>Metodo de Cobro</th>
                            </tr>
                        </thead>
                        <?php
                            $mysql = new mysqli("localhost", "root", "fcfmedson", "db_examen");
                            $sql = "select * from tblProveedores";
                            if($resultado = $mysql->query($sql)){
                                while($actor = $resultado->fetch_assoc()){
                                    echo "<tr><th><a href='AgregaProveedores.php?Id=".$actor['IdProveedor']."'>".$actor['Nombres']."</a></th><th>".$actor['Telefono']."</th><th>".$actor['Ciudad']."</th><th>".$actor['Descuento']."</th><th>".$actor['MetodoCobro']."</th><th><input type='checkbox' name='chkEliminar[]' value='".$actor['IdProveedor']."'> </th></tr>";
                                }
                            }
                            $resultado->free();
                            $mysql->close();
                        ?>
                    </table>
                </div>
            </div>
              <div class="row" style="margin-top: 5%;">
                  <div class="col-md-offset-4 col-md-1">
                       <input type="submit" class="btn btn-danger" name="btnEliminar" style="border-radius: 5px;" value="Eliminar">
                  </div>
              </div>
             </form>
        </div>
        <?php          }else{
            echo "<h4>Contraseña Incorrecta o Nombre de Usuario</h4>";
        }
              
          
        ?>
    </body>
</html>