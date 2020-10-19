<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>MODIFICAR PORCENTAJE</title>
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
   	$sql="SELECT id_por, Nombre, porcen FROM porcentajes WHERE id_por='$id'";
		$ressql=mysqli_query($conexion,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$nombre=$row[1];
		    	$porcentaje=$row[2];
		    }
		?>
  <h4>MODIFICAR DATOS DEL PORCENTAJE</h4>
<div class="container">
<form method="POST" action="../modelo/actuapor.php">  
  <div class="form-group">
    <label>id</label>
    <input type="number" class="form-control" name="id" value= "<?php echo $id ?>" readonly="readonly">
  </div>
  <div class="form-group">
    <label>nombre</label>
    <input type="text" class="form-control" name="nombre" value= "<?php echo $nombre ?>">
  </div>
  <div class="form-group">
    <label>porcentaje</label>
    <input type="number" class="form-control" name="porcentaje" value= "<?php echo $porcentaje ?>" step="any">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
</div><!-- /container -->
<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
