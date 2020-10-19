<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEP. FINANZAS</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../bootstrap/styles.css">
</head>
<?php require "../vistas/terceros.php"; ?>
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
<!-- partial:index.partial.html -->
<div class="container-xl">
  <div class="row">
    <div class="col-xs-10">
    <h2 align="center">FINANZAS</h2>
<?php
        require("../controlador/conexion.php");
    $sql=("SELECT * FROM `finanzasvs`");
        $query=mysqli_query($conexion,$sql);
        echo '<table border="1">';
        echo "<thead>";
        echo "<tr>";
        echo" <th >ID_pago</th>";
        echo" <th>NOMBRE COMPLETO</th>";
        echo" <th>CARGO</th>";
        echo" <th>SALARIO</th>";
        echo" <th>IGSS</th>";
        echo"  <th>ISR</th>";
        echo"  <th>HORAS EXTRAS</th>";
        echo '<th >HORAS DOBLES</th>';
        echo '<th >AHORRO</th>';
        echo '<th >BONO</th>';
        echo '<th >BONO_PRO</th>';
        echo '<th >SUELDO A DEVENGAR</th>';
        echo '<th >MES</th>';
        echo '<th >AÑO</th>';
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
              echo "<td>$arreglo[7]</td>";
              echo "<td>$arreglo[8]</td>";
              echo "<td>$arreglo[9]</td>";
              echo "<td>$arreglo[10]</td>";
              echo "<td>$arreglo[11]</td>";
              echo "<td>$arreglo[12]</td>";
              echo "<td>$arreglo[13]</td>";
          echo "</tr>";        }
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
