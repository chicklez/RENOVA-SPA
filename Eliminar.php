<?php
		$id = $_POST['id'];
		$con = mysqli_connect("localhost","root","","renova");
	if (!$con) {
    die('No se pudo conectar: ' . mysqli_error($con));
	}
	mysqli_select_db($con,"renova");

				$Eliminarsesiones  = mysqli_query($con,"DELETE FROM sesiones WHERE id = '".$id."' ");
				$Eliminarterapeutas  = mysqli_query($con,"DELETE FROM  terapeutas WHERE id = '".$id."' ");
				$Eliminaropiniones  = mysqli_query($con,"DELETE FROM opiniones WHERE id = '".$id."' ");
				$Eliminartratamientos  = mysqli_query($con,"DELETE FROM tratamientos WHERE id = '".$id."' ");

				$Eliminarclientes  = mysqli_query($con,"DELETE FROM clientes WHERE id = '".$id."' ");
				$Eliminarhoteles  = mysqli_query($con,"DELETE FROM hoteles WHERE id = '".$id."' ");
				$Eliminarpaises  = mysqli_query($con,"DELETE FROM paises WHERE id = '".$id."' ");
				$Eliminarcircustancias  = mysqli_query($con,"DELETE FROM circustancias WHERE id = '".$id."' ");
				$Eliminaragencias  = mysqli_query($con,"DELETE FROM agencias WHERE id = '".$id."' ");

				header("Location:Crud.php");
?>