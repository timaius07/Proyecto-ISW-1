<?php

	include("conexion.php");

	$codigo=$_POST['codigo'];
	$descrip=$_POST['descrp'];
	$precio=$_POST['precio'];
	$exist=$_POST['exist'];
	$dept=$_POST['dept'];
	$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
	
	$query = "INSERT INTO articulos(codigo, descripcion, precio, existencia, imagen, departamento) VALUES ('$codigo','$descrip', '$precio','$exist', '$Imagen', '$dept')";
	$resultado = mysql_query($query);

	if ($resultado) {
	
		header("Location: detalles.php");
	}else {
		echo "No se inserto";
	}
?>