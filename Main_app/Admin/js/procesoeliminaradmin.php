<?php

	include("conexion.php");

	$id = $_REQUEST['id'];

	$query = "DELETE  FROM login WHERE id='$id'";
	$resultado = mysql_query($query);

	if ($resultado) {
		header("Location: administradores.php");
	}else {
		echo "No se ELIMINO";
	}
?>