<?php
    session_start();
    $email = $_SESSION['username'];
    if(!isset($email)){
        header("location: ../index.html");
    }else{
    //echo "bienvenido $email";
    if (!isset($_SESSION['rol'])){
      header("location: ../index.html");
    }else{
      if($_SESSION['rol'] != 2){
        header("location: ../index.html");
      }
    }
    }  
    require "../encabezado/header2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenidos Usuario</title>
</head>
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
</body>
</html>