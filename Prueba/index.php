<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <form method="POST" action="Proveedores.php">
            <table>
                <tr>
                    <td>Usuario: </td>
                    <td><input type="text" name="txtUsuario" required="required"></td>
                </tr>
                <tr>
                    <td>Contraseña: </td>
                    <td><input type="password" name="txtPassword" required="required"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="btnIngresar">Ingresar</button></td>
                    <td><button type="reset" name="btnCancelar">Cancelar</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>
