<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Usuarios</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../bootstrap/styles.css">
</head>
<?php require "../encabezado/header.php"; ?>
 <style type="text/css">
    html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
    }
    #full-screen-background-image {
        z-index: -999;
        width: 100%;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
    }
</style>
<body>
  <img alt="full screen background image" src="../images/blanco.jpg" id="full-screen-background-image" /> 
<!-- partial:index.partial.html -->
<div class="container-xl">
  <div class="row">
    <div class="col-xs-10">
    <h2>USUARIOS</h2>
<?php
        require("../controlador/conexion.php");
    $sql=("SELECT usuario.IdUsuario, rol.Nombre, usuario.Nombre, usuario.Direccion, usuario.Telefono, usuario.Email, usuario.Estado FROM usuario INNER JOIN rol ON usuario.IdRol=rol.IdRol");
        $query=mysqli_query($conexion,$sql);
        echo '<table border="1">';
        echo "<thead>";
        echo "<tr>";
        echo" <th >ID</th>";
        echo" <th>CARGO</th>";
        echo" <th>NOMBRE COMPLETO</th>";
        echo" <th>DIRECCION</th>";
        echo" <th>TELEFONO</th>";
        echo"  <th>CORREO ELECTRONICO</th>";
        echo"  <th>ESTADO</th>";
        echo '<th >EDITAR</th>';
        echo '<th >BORRAR</th>';
        echo "</tr>";
      ?>  <?php      
        while($arreglo=mysqli_fetch_array($query)){
        echo "</thead>";
        echo "<tbody>";
            echo "<tr>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";
              echo "<td>$arreglo[6]</td>";
              echo "<td><a href='../vistas/actualizarusuario.php?id=$arreglo[0]'><img src='../images/actualizar.gif' class='img-rounded'></td>";
              echo "<td><a href='usuarios1.php?id=$arreglo[0]&idborrar=2'><img src='../images/eliminar.png' class='img-rounded'/></a></td>";     
          echo "</tr>";        }
          extract($_GET);
          if(@$idborrar==2){
            $sqlborrar="DELETE FROM usuario WHERE IdUsuario=$id";
            $resborrar=mysqli_query($conexion,$sqlborrar);
            echo '<script>alert("USUARIO ELIMINADO")</script> ';
            echo "<script>location.href='usuarios1.php'</script>";        }
?>      	
        </tbody>
        <tfoot>
       </tfoot>
      </table>
    </div>
  </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script><script  src="./script.js"></script>
</body>
</html>
