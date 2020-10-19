<?php
	$mes=$_POST['mes'];
	$año=$_POST['año'];
			require("../controlador/conexion.php");

$checkemail=mysqli_query($conexion,"SELECT * FROM pagos WHERE mes='$mes' and año='$año'");
	$check_mail=mysqli_num_rows($checkemail); 
			if($check_mail>0){
				echo "Error:  la fecha ya existe <br>" . mysqli_error($conexion);
				header("Location: ../vistas/generapag.php");
			}else{
				mysqli_query($conexion,"call generaNomina('$mes','$año')");
				echo "pagos generados Correctamente";
				header("Location: ../vistas/terceros.php");
			}

?>
