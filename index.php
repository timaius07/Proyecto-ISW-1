<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php include 'inc/head_common.php' ; ?>
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="./css/workshops2.css">
		<title>Repuestos</title>
	</head>
	<body>
		<?php include 'inc/headerinicio.php'; ?>	
		<div id ="workshop-list">
					<article id="w1" class="workshop workshop-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-8 main-info">
							<h3 class="highlighted">Bienvenido a nuestra Tienda de Repuestos</h3>
						</div>
						<div class="error">
							<span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
						</div>
						<div class="main">
							<form action="" id="formlg">
								<label class="label">Usuario</label>
								<input type="text" name="usuariolg" pattern="[A-Za-z0-9_-]{1,15}" placeholder="Usuario" required/>
								<label class="label">Contraseña</label>
								<input type="password" name="passlg" pattern="[A-Za-z0-9_-]{1,15}" placeholder="Contraseña" required/>
								<input type="submit" class="botonlg" value="Iniciar Sesion">
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