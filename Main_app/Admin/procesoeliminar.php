<?php

	include("conexion.php");

	$id = $_REQUEST['id'];

	$query = "DELETE  FROM articulos WHERE id='$id'";
	$resultado = mysql_query($query);

	if ($resultado) {
		header("Location: detalles.php");
	}else {
		echo "No se ELIMINO";
	}
?>