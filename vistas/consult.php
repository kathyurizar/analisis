<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>CUMPLEAÑEROS</title>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>-->
<link rel="stylesheet" href="../bootstrap/styles.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<?php require "../vistas/cumples.php"; ?>
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
 <img alt="full screen background image" src="../images/rosa.jpg" id="full-screen-background-image" /> 
<div class="container">
<header class="header">
</header>
</div>
  <?php
    require("../controlador/conexion.php");
    extract($_POST);
    $sql="SELECT e.Idempleado,d.nombre as departamento,c.Nombre as cargo,CONCAT(e.Nombre,' ',e.Apellidos) as nombre,CONCAT(day(e.fecha_n),' ',(select nombre from meses where id_mes=month(e.fecha_n))) as fecha FROM cargo as c
INNER join departamento as d on c.departamento=d.iddep
inner join empleado as e on c.Idcargo=e.Idcargo where MONTH(e.fecha_n)='$mes' order by day(e.fecha_n)";
    $ressql=mysqli_query($conexion,$sql);
    ?>
<h4>cumpleañeros</h4>
<div class="container">
        <?php  
  echo '<table border="1">';
        echo "<thead>";
        echo "<tr>";
        echo" <th >ID</th>";
        echo" <th>DEPARTAMENTO</th>";
        echo" <th>CARGO</th>";
        echo" <th>NOMBRE</th>";
        echo"  <th>FECHA DE NACIMIENTO</th>";
        echo "</tr>";
      ?> 
      <?php      
        while($arreglo=mysqli_fetch_array($ressql)){
        echo "</thead>";
        echo "<tbody>";
            echo "<tr>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "</tr>";
        }
?>      	
        </tbody>
        <tfoot>
       </tfoot>
      </table>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script><script  src="./script.js"></script>
</body>
</html>
