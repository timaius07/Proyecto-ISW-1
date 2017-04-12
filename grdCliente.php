<?php

	include("conexionusu.php");
	

	strtolower($string);

	$nombre=$_POST['nombrec'];
	$contrasena = $_POST['pass'];
	$correo= $_POST['correo'];
	$tipousuario=$_POST['tipou'];
	$correoval = strtolower($correo);	
	$very = mysql_query("select * from login where correou = '$correoval'" );

	 if(mysql_num_rows($very)!=0){
	 	echo '<script language="javascript">alert("Usuario ya esta registrado");</script>';
	 	sleep(2);
	 	echo "<script type =\"text/javascript\"> history.go(-1);</script>";
	 	exit();
	}else{
		$query = "INSERT INTO login(nombreu, contrasenau, correou, tipousuario) VALUES 
	('$nombre', '$contrasena', '$correoval', '$tipousuario')";
	$resultado = mysql_query($query);

	if ($resultado) {
		header("Location: index.php");
	}else {
		echo "No se inserto";
	}
	}
	
?>