<?php require '../controlador/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Regristro de Empleados</title>
<!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>-->
<link rel="stylesheet" href="../bootstrap/styles.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
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
<h4>REGISTRO EMPLEADO</h4>
<div class="container">
<form method="POST" action="../modelo/registroem.php">
  <div class="form-group">
    <label>Nombres</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ejemplo: Kathy" required="">
  </div>
  <div class="form-group">
    <label>Apellidos</label>
    <input type="text" class="form-control" name="apellido" placeholder="Ejemplo: Urizar" required="">
  </div>
  <div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" name="direccion" placeholder="Ejemplo:Mazatenango" required="">
  </div>
  <div class="form-group">
    <label>Telefono</label>
    <input type="number" class="form-control" name="telefono" placeholder="00000000" required="">
  </div>
  <div class="form-group">
    <label>CUI</label>
    <input type="number" class="form-control" name="dpi" placeholder="ejemplo: 0000000000000" required="">
  </div>
  <div class="form-group">
    <label>NIT</label>
    <input type="number" class="form-control" name="nit" placeholder="ejemplo: 0000000" required="">
  </div>
  <div class="form-group">
    <label>Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fecha" placeholder="dd-mm-aaaa" required="">
  </div>
  <div class="form-group">
        <div>
        <select name="cargo">
        <?php
// Realizamos la consulta para extraer los datos
          $q = "SELECT Idcargo,Nombre FROM cargo";
          $consulta = mysqli_query($conexion,$q);
          while ($valores = mysqli_fetch_array($consulta)) {
// En esta sección estamos llenando el select con datos extraidos de una base de datos.
            echo '<option value="'.$valores[0].'">'.$valores[1].'</option>';
          }
        ?>
        </select>
        </div>
      </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div><!-- /container -->

<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>