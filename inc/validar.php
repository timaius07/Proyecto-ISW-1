<?php


	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];
	$tipusu=$_POST['tipousu'];



	$sql2=mysql_query("SELECT * FROM login WHERE correou='$username'");
	if($f2=mysql_fetch_array($sql2)){
		if($tipusu=='Administrador'){
			//ver como redirecionar al index.php
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>'./isw/index.php'</script>";
		}
	}




	$sql=mysql_query("SELECT * FROM login WHERE correou='$username'");
	if($f=mysql_fetch_array($sql)){
		if($pass==$f['contrasenau']){
			header("index.php");
		}else{
			echo '<script>alert("CONTRASEÃ‘A INCORRECTA")</script> ';
		
			echo "<script>location.href='loggin.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='loggin.php'</script>";	

	}



		


?>