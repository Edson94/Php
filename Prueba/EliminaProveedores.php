<a href="Proveedores.php">Regresar</a>
<?php
 $mysql = new mysqli("localhost", "root", "fcfmedson", "db_examen");
 $chkEliminar = $_POST['chkEliminar'];
 $bandera = true;
foreach ($chkEliminar as $IdProveedor){
    $sql = "delete from tblProveedores where IdProveedor=".$IdProveedor."";
    if($resultado = $mysql->query($sql)){
        $bandera=true;
    }else{
        $bandera=false;
    }
}
echo "<h4>Eliminacion Completada</h4>";