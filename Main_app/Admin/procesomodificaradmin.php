<?php

	include("conexion.php");
	$id=$_REQUEST['id'];
	$nombre=$_POST['nombrec'];
	$contrasena=$_POST['pass'];

	$query= "UPDATE login SET nombreu='$nombre', contrasenau='$contrasena' 
			 WHERE id='$id'";
	$resultado = mysql_query($query);

	if ($resultado) {
		echo "<script type =\"text/javascript\"> history.go(-2);</script>";
	}else {
		echo "No se inserto";
	}
?>