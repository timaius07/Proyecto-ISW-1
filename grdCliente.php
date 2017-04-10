<?php

	include("conexionusu.php");

	$nombre=$_POST['nombrec'];
	$contrasena = $_POST['pass'];
	$correo= $_POST['correo'];
	$tipousuario=$_POST['tipou'];
	
	$query = "INSERT INTO login(nombreu, contrasenau, correou, tipousuario) VALUES 
	('$nombre', '$contrasena', '$correo', '$tipousuario')";
	$resultado = mysql_query($query);

	if ($resultado) {
		header("Location: index.php");
	}else {
		echo "No se inserto";
	}
?>