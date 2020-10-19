<?php
		require("../controlador/conexion.php");

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$clave = $_POST['clave'];

$clave_cifrada=password_hash($clave,PASSWORD_DEFAULT);

$q = "INSERT INTO usuario (IdUsuario, IdRol, Nombre, Direccion, Telefono, Email, Clave, Estado) 
VALUES ('', '$rol', '$nombre', '$direccion', '$telefono', '$email', '$clave_cifrada', '1')";

if (mysqli_query($conexion, $q)) {
    echo '<script>alert("USUARIO CREADO CON EXITO")</script> ';
    $_SESSION['username'] = $email;
    header("location: ../index.html");
} else {
    echo '<script>alert("ERROR AL CREAR USUARIO")</script> ';
    echo "Error: " . $q . "<br>" . mysqli_error($conexion);
    header("location: ../vistas/registrarusuarios.php");
}
?>