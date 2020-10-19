<?php

extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("../controlador/conexion.php");
	$sentencia="UPDATE porcentajes SET Nombre='$nombre',porcen=$porcentaje WHERE id_por='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($conexion,$sentencia);
	if ($resent==null) {
		echo "Error de procesamiento no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: ../vistas/actualizar.php");	
		echo "<script>location.href='../vistas/porcentajes.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		echo "<script>location.href='../vistas/porcentajes.php'</script>";
	}
?>
