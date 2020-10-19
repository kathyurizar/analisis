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

<div class="container">
<header class="header">
</header>
</div>
  <?php
    require("../controlador/conexion.php");
    extract($_GET);
    $sql="SELECT Idempleado,Idcargo,Nombre,Apellidos,Direccion,Telefono,DPI,nit,fecha_n FROM empleado where Idempleado='$id'";
    $ressql=mysqli_query($conexion,$sql);
    while ($row=mysqli_fetch_row ($ressql)){
         $id=$row[0];
          $cargo=$row[1];
          $nombre=$row[2];
          $apellidos=$row[3];
          $direccion=$row[4];
          $telefono=$row[5];
          $dpi=$row[6];
          $nit=$row[7];
          $fecha=$row[8];
        }
    ?>
<h4>MODIFICAR DATOS DEL USUARIO</h4>
<div class="container">
<form method="POST" action="../modelo/actualizaem.php">
<div class="form-group">
    <label>Id</label>
    <input type="text" class="form-control" name="id" value= "<?php echo $id ?>" readonly="readonly">
  </div>
 <div class="form-group">
    <label>Cargo</label>
     <select name="cargo">
        <option value="0">Seleccione cargo:</option>
        <?php
          $checkemail=mysqli_query($conexion,"SELECT Idcargo,Nombre FROM cargo");
          while ($valores = mysqli_fetch_array($checkemail)) {
            echo '<option value="'.$valores[0].'">'.$valores[1].'</option>';
          }
        ?>
      </select>
   </div>  
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>">
  </div>
  <div class="form-group">
    <label>apellido</label>
    <input type="text" class="form-control" name="apellido" value="<?php echo $apellidos ?>">
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
    <label>CUI</label>
    <input type="number" class="form-control" name="dpi" value="<?php echo $dpi?>">
  </div>
  <div class="form-group">
    <label>NIT</label>
    <input type="number" class="form-control" name="nit" value="<?php echo $nit?>">
  </div>
  <div class="form-group">
    <label>Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fecha" value="<?php echo $fecha?>">
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