<?php
	session_start();
	include './Main_app/serv.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="index.php"; </script>';
	}
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php include 'inc/head_common.php' ; ?>
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="./css/workshops2.css">
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./css/registro.css">
		<title>Repuestos</title>
		 <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   		 <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   		 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<?php include 'inc/headerinicio.php'; ?>	
		<div id ="workshop-list">
					<article id="w1" class="workshop workshop-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 main-info">
						<div class="section-content">
							<h1 class="section-header">Bienvenido a nuestra Tienda <span class="content-header wow fadeIn " data-wow-delay="0.2s" 	data-wow-duration="2s"> Repuestos MRY</span></h1>
						</div>
						</div>
						<div class="error">
							<span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
						</div>
						<div class="main">
							<form method="post" action="./Main_app/validar.php">
								<span class="glyphicon glyphicon-user"></span>
								<label type="text" class="label">Correo</label>
								<input type="text" name="usuariolg"  placeholder="ejemplo@gmail.com" required/>
								<span class="glyphicon glyphicon-lock"></span>
								<label type="text" class="label">Contraseña</label>
								<input type="password" name="passlg" pattern="[A-Za-z0-9_-]{1,15}" placeholder="Contraseña" required/>
								<input type="submit" class="botonlg" name="login" value="Iniciar Sesion">
								<br>
								
								<a button type="button" class="btn btn-success" href="loggin.php">Registrarse</button></a>
							</form>
						</div>		
					</div>
				</div>
			</article>
		</div>
		<script src="js/jquery1.min.js"></script>
		<script src="js/main1.js"></script>
		<?php include 'inc/footer.php';?>
		<?php include 'inc/footer_common.php';?>
		
	
	</body>