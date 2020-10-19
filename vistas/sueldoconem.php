<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Nuevo porcentaje </title>
<!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>-->
<link rel="stylesheet" href="../bootstrap/styles.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<!--encabezado-->
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

<h4>REGISTRO HORAS EXTRAS Y DOBLES</h4>
<div class="container">
<form method="POST" action="../modelo/reghoras.php"  enctype="multipart/form-data">
<div class="form-group">
    <label>Empleado</label>
     <select name="id">
        <option value="0">Seleccione:</option>
        <?php
        require '../controlador/conexion.php';
          $checkemail=mysqli_query($conexion,"SELECT IdEmpleado,Nombre,Apellidos FROM empleado");
          while ($valores = mysqli_fetch_array($checkemail)) {
            echo '<option value="'.$valores[0].'">'.$valores[1]." ".$valores[2].'</option>';
          }
        ?>
      </select>
  </div>
  <div class="form-group">
    <label>Mes</label>
     <select name="mes">
        <option value="0">Seleccione:</option>
          <option value="1">ENERO</option>';
          <option value="2">FEBRERO</option>';
          <option value="3">MARZO</option>';
          <option value="4">ABRIL</option>';
          <option value="5">MAYO</option>';
          <option value="6">JUNIO</option>';
          <option value="7">JULIO</option>';
          <option value="8">AGOSTO</option>';
          <option value="9">SEPTIEMBRE</option>';
          <option value="10">OCTUBRE</option>';
          <option value="11">NOVIEMBRE</option>';
          <option value="12">DICIEMBRE</option>';
      </select>
  </div>
  <div class="form-group">
    <label>Horas extras</label>
    <input type="number" class="form-control" name="extras" placeholder="Ejemplo:1" required="required">
  </div>
  <div class="form-group">
    <label>Horas dobles</label>
    <input type="number"  class="form-control" name="dobles" placeholder="Ejemplo: 1" required="required" >
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div><!-- /container -->
<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
