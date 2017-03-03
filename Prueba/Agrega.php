<a href="Proveedores.php">Regresar</a>
<?php
 $mysql = new mysqli("localhost", "root", "fcfmedson", "db_examen");
switch ($_POST['txtOpcion']){
    case 1:
        $sql = "INSERT INTO tblProveedores(Nombres,Telefono,Ciudad,Descuento,MetodoCobro)
            VALUES ('".$_POST['txtNombre']."',".$_POST['txtNumero'].",'".$_POST['txtCiudad']."',".$_POST['txtDescuento'].",'".$_POST['dblMetodoCobro']."')";
        if($resultado = $mysql->query($sql)){
            echo "<h4>Agregado Correctamente</h4>";
        }
        break;
    case 2:
        $sql = "update tblProveedores set Nombres='".$_POST['txtNombre']."'
                ,Telefono=".$_POST['txtNumero'].",Ciudad='".$_POST['txtCiudad']."',Descuento=".$_POST['txtDescuento'].",MetodoCobro='".$_POST['dblMetodoCobro']."'
                where IdProveedor = ".$_POST['txtIdProveedor']."";
        if($resultado = $mysql->query($sql)){
            echo "<h4>Editado Correctamente</h4>";
        }
        break;
}
