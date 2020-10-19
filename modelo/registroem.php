
<?php

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$direccion= $_POST['direccion'];
	$telefono=$_POST['telefono'];
	$dpi=$_POST['dpi'];
	$fecha=$_POST['fecha'];
	$cargo=$_POST['cargo'];
	$nit=$_POST['nit'];
	require("../controlador/conexion.php");
	$checkemail=mysqli_query($conexion,"SELECT * FROM empleado WHERE DPI='$dpi'");
	$check_mail=mysqli_num_rows($checkemail); 
			if($check_mail==1){
				echo ' <script language="javascript">alert("Atencion, ya existe el dpi designado para un usuario, verifique sus datos");</script> ';
				header("Location:../vistas/registroempleados.php");
			}else{
				mysqli_query($conexion,"INSERT INTO empleado(Idcargo,Nombre,Apellidos,Direccion,Telefono,DPI,nit,fecha_n) VALUES ($cargo,'$nombre','$apellido','$direccion','$telefono','$dpi','$nit','$fecha')");
				echo ' <script language="javascript">alert("empleado registrado con éxito");</script> ';
				header("Location:../vistas/terceros.php");
			}
?>