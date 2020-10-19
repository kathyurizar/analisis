<?php 
   // session_start();
    $email = $_SESSION['username'];
    if(!isset($email)){
        header("location: ../index.html");
    }else{
    //echo "bienvenido $email";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #922b3e">
  <a class="navbar-brand" href="../vistas/inicio.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
        <a class="nav-link" href="">    <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          EMPLEADOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">    
          <a class="dropdown-item" href="../vistas/registroempleados.php">Registro Empleados</a>
          <div class="dropdown-divider"></div>    
        <a class="dropdown-item" href="../vistas/tablaem.php"> Tabla empleados</a>
        </div>
      </li>
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          GESTION DE SUELDOS</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ingresohoras.php">Ingreso de horas extras y dobles</a>
          <div class="dropdown-divider"></div>          
          <a class="dropdown-item" href="../vistas/tabla_sueldos_generales.php">Tabla sueldos</a>
          <div class="dropdown-divider"></div>  
          <a class="dropdown-item" href="../vistas/generapag.php">Generar pagos</a>
        </div>
        </li>
        <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">    
          GESTION DEPARTAMENTOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../vistas/depuno.php">dep. finanzas</a>
          <div class="dropdown-divider"></div>          
          <a class="dropdown-item" href="../vistas/depdos.php">dep. producción</a>
          <div class="dropdown-divider"></div>          
          <a class="dropdown-item" href="../vistas/deptres.php">dep. logística</a>
          <div class="dropdown-divider"></div>          
          <a class="dropdown-item" href="../vistas/depcuatro.php">dep. RRHH</a>
          <div class="dropdown-divider"></div>          
          <a class="dropdown-item" href="../vistas/depcinco.php">dep. mercadeo</a>
        </div>
        </li>
        <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          DESCUENTOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../vistas/iggsv.php">IGSS</a>
          <div class="dropdown-divider"></div>          
          <a class="dropdown-item" href="../vistas/isrv.php">ISR</a>          
        </div>
        </li>
        <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CUMPLEAÑEROS</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cumples.php">Ver por mes</a>
        </div>
        </li>
    </ul>
<span class="navbar-text">
    <?php 
    echo date("d-m-Y  |   ");
    ?>
  </span>
    <span class="navbar-text">
      <?php echo $email ?>
    </span>
    <a class="nav-link active btn btn-dark my-2 my-sm-0" href="../controlador/salir.php">Salir</a>
  </div>
</nav>
</body>
</html>