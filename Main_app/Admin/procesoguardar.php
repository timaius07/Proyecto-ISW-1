<?php

	include("conexion.php");

	$codigo=$_POST['codigo'];
	$descrip=$_POST['descrp'];
	$precio=$_POST['precio'];
	$exist=$_POST['exist'];
	$dept=$_POST['dept'];
	$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
	$sucursal=$_POST['sucs'];
	
	$very = mysql_query("select * from articulos where codigo = '$codigo'" );

	 if(mysql_num_rows($very)!=0){
	 	echo '<script language="javascript">alert("Artículo ya esta registrado");</script>';
	 	sleep(2);
	 	echo "<script type =\"text/javascript\"> history.go(-1);</script>";
	 	exit();
	}else{

	$query = "INSERT INTO articulos(codigo, descripcion, precio, existencia, imagen, departamento,sucursal) 
			  VALUES ('$codigo','$descrip', '$precio','$exist', '$Imagen', '$dept', '$sucursal')";
	$resultado = mysql_query($query);

	if ($resultado) {
	
		header("Location: detalles.php");
	}else {
		echo "No se inserto";
	}
	}
?>