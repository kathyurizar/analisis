<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>PORCENTAJES</title>
<!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css'>-->
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
<div class="container-xl">
  <div class="row">
    <div class="col-xs-10">
    <h2>PORCENTAJE</h2>
    <br>
<?php
        require("../controlador/conexion.php");
    $sql=("SELECT id_por, Nombre, porcen FROM porcentajes");
        $query=mysqli_query($conexion,$sql);
        echo "<br>";
        echo '<table border="1">';
        echo "<thead>";
          echo "<tr>";
           echo" <th >ID</th>";
           echo" <th>NOMBRE</th>";
           echo" <th>PORCENTAJE</th>";
           echo '<th >EDITAR</th>';
            echo '<th >BORRAR</th>';
          echo "</tr>";
      ?> 
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
         echo "</thead>";
        echo "<tbody>";
            echo "<tr>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td><a href='../vistas/actualizar.php?id=$arreglo[0]'><img src='../images/actualizar.gif' class='img-rounded'></td>";
              echo "<td><a href='porcentajes.php?id=$arreglo[0]&idborrar=2'><img src='../images/eliminar.png' class='img-rounded'/></a></td>";     
          echo "</tr>";
        }
          extract($_GET);
          if(@$idborrar==2){
            $sqlborrar="DELETE FROM porcentajes WHERE id_por=$id";
            $resborrar=mysqli_query($conexion,$sqlborrar);
            echo '<script>alert("REGISTRO ELIMINADO")</script> ';
            echo "<script>location.href='porcentajes.php'</script>";
          }
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
