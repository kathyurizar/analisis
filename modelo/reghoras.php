<?php
	$id=$_POST['id'];
	$extra=$_POST['extras'];
	$dobles=$_POST['dobles'];
	$cumpli=$_POST['trabajo'];
	$mes=$_POST['mes'];
			require("../controlador/conexion.php");

$checkemail=mysqli_query($conexion,"SELECT * FROM horas WHERE id_empleado='$id' AND mes='$mes'");
	$check_mail=mysqli_num_rows($checkemail); 
			if($check_mail==1){
				echo "Error:  las horas ya existen <br>" . mysqli_error($conexion);
				header("Location: ../vistas/ingresohoras.php");
			}else{
				mysqli_query($conexion,"INSERT INTO `horas` (`extras`,`dobles`,`id_empleado`,`trabajo`,`mes`) VALUES ('$extra','$dobles','$id','$cumpli','$mes')");
				echo "horas ingrsadas correctamente Correctamente";
				header("Location: ../vistas/terceros.php");
			}

?>
