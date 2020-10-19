<?php
require '../controlador/conexion.php';
session_start();
header("location: ../index.html");
if(isset($_GET['salir.php'])){
    session_unset();
    session_destroy();
}
if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1:
            header('location: ../vistas/administrador.php');
        break;
        case 2:
            header('location: ../vistas/inicio.php');
        break;
        default;
    }
}
$email = $_POST['email'];
$clave = $_POST['clave'];
$q = "SELECT * FROM usuario WHERE Email = '$email'";
$consulta = mysqli_query($conexion,$q);
if (mysqli_num_rows($consulta)>0){
    $array = mysqli_fetch_array($consulta);
}
if(password_verify($clave,$array['Clave']))
{
    $_SESSION['username'] = $email;
}else{
    header("location: ../index.html");
}
$rol=$array[1];
$_SESSION['rol']=$rol;
switch($_SESSION['rol']){
    case 1:
        header('location: ../vistas/administrador.php');
    break;
    case 2:
        header('location: ../vistas/inicio.php');
    break;
    default;
}
?>