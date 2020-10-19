<?php
	$nombre=$_POST['nombre'];
	$porcentaje=$_POST['porcentaje'];
			require("../controlador/conexion.php");

$checkemail=mysqli_query($conexion,"SELECT * FROM porcentajes WHERE Nombre='$nombre'");
	$check_mail=mysqli_num_rows($checkemail); 
			if($check_mail==1){
				echo "Error:  la categoria ya existe <br>" . mysqli_error($conexion);
				header("Location: ../vistas/articulo.php");
			}else{
				mysqli_query($conexion,"INSERT INTO porcentajes(Nombre,porcen) VALUES ('$nombre',$porcentaje)");
				echo "porcentaje Creado Correctamente";
				header("Location: ../vistas/administrador.php");
			}

?>
