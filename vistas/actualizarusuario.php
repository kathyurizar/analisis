<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Modificar Usuario</title>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>-->
<link rel="stylesheet" href="../bootstrap/styles.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
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
<div class="container">
<header class="header">
</header>
</div>
  <?php
    require("../controlador/conexion.php");
    extract($_GET);
    $sql="SELECT IdUsuario, IdRol, Nombre, Direccion, Telefono, Email, Estado FROM usuario WHERE IdUsuario='$id'";
    $ressql=mysqli_query($conexion,$sql);
    while ($row=mysqli_fetch_row ($ressql)){
         $id=$row[0];
          $idrol=$row[1];
          $nombre=$row[2];
          $direccion=$row[3];
          $telefono=$row[4];
          $email=$row[5];
          $estado=$row[6];
        }
    ?>
<h4>MODIFICAR DATOS DEL USUARIO</h4>
<div class="container">
<form method="POST" action="../modelo/actualizarus.php">
<div class="form-group">
    <label>Id</label>
    <input type="text" class="form-control" name="id" value= "<?php echo $id ?>" readonly="readonly">
  </div>
 <div class="form-group">
    <label>Roles</label>
     <select name="idrol">
        <option value="0">Seleccione:</option>
        <?php
          $checkemail=mysqli_query($conexion,"SELECT IdRol, Nombre FROM rol where IdRol>1");
          while ($valores = mysqli_fetch_array($checkemail)) {
            echo '<option value="'.$valores[IdRol].'">'.$valores[Nombre].'</option>';
          }
        ?>
      </select>
   </div>  
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>">
  </div>
  <div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" name="direccion" value="<?php echo $direccion ?>">
  </div>
  <div class="form-group">
    <label>Telefono</label>
    <input type="text" class="form-control" name="telefono" value="<?php echo $telefono?>">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $email?>">
  </div>
  <div class="form-group">
    <label>Estado</label>
    <input type="text" class="form-control" name="estado" value="<?php echo $estado?>">
  </div>
  <div>
  <button type="submit" class="btn btn-dark btn-sm">Actualizar</button>
  </div>
</form>
</div><!-- /container -->

</div>
</div><!-- /container -->
<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>