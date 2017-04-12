<?php

	include("conexion.php");
	$id=$_REQUEST['id'];
	$codigo=$_POST['codigo'];
	$descrip=$_POST['descrp'];
	$precio=$_POST['precio'];
	$exist=$_POST['exist'];
	$dept=$_POST['dept'];
	$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
	$sucursal=$_POST['sucur'];

	$query= "UPDATE articulos SET codigo='$codigo', descripcion='$descrip', precio= '$precio', existencia= '$exist',imagen = '$Imagen', departamento= '$dept', sucursal='$sucursal' WHERE id='$id'";
	$resultado = mysql_query($query);

	if ($resultado) {
		header("Location: detalles.php");
	}else {
		echo "No se inserto";
	}
?>