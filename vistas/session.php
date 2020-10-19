<?php 
    session_start();
    $email = $_SESSION['username'];
    if (!isset($_SESSION['rol'])){
      header("location: ../index.html");
    }else{
      if($_SESSION['rol'] != 1){
        require "../encabezado/header2.php";
      }else{
      require "../encabezado/header.php";
      }
    }  
    
?>