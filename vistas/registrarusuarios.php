<?php require '../controlador/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>REGISTRO</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-box">
 <h2>REGISTRO USUARIO</h2>
<body>
<div class="container">
<form method="POST" action="../modelo/usuariodb.php">
<div class="user-box">
        <div>
        <select name="rol">
        <?php
// Realizamos la consulta para extraer los datos
          $q = "SELECT IdRol, Nombre FROM rol where IdRol>1";
          $consulta = mysqli_query($conexion,$q);
          while ($valores = mysqli_fetch_array($consulta)) {
// En esta sección estamos llenando el select con datos extraidos de una base de datos.
            echo '<option value="'.$valores[0].'">'.$valores[1].'</option>';
          }
        ?>
        </select>
        </div>
      </div>
  <div class="user-box">
      <input name="nombre" type="text" required="">
      <label>Nombre completo</label>
    </div>
  <div class="user-box">
      <input name="email" type="email" required="">
      <label>Correo electronico</label>
    </div>
     <div class="user-box">
      <input name="clave" type="text" required="">
      <label>Contraseña</label>
    </div>
  <div class="user-box">
      <input name="direccion" type="text" required="">
      <label>Direccion</label>
    </div>
   <div class="user-box">
      <input name="telefono" type="number" required="">
      <label>Telefono</label>
    </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
   <br>
  <div>
   <p>Regresar al inicio <a class="alert-link" href="../index.html">Login </a></p></a></p>
   </div>
</div><!-- /container -->
<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
