<?php

	include("conexion.php");
	$id=$_REQUEST['id'];
	$nombre=$_POST['nombrec'];
	$contrasena=$_POST['pass'];
	$correo=$_POST['correo'];

	$query= "UPDATE login SET nombreu='$nombre', contrasenau='$contrasena', correou= '$correo' 
			 WHERE id='$id'";
	$resultado = mysql_query($query);

	if ($resultado) {
		header("Location: administradores.php");
	}else {
		echo "No se inserto";
	}
?>