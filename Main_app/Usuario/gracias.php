<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sucursales</title>
		<?php include '../../inc/head_common.php';?>
	</head>

	<body>
		<?php include '../../inc/header.php'; ?>
		<!--detail cambia los estilos workshop w1 cambia todo-->
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/registro.css">
		<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   		 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<header>
			<!--Cabecera de la pagina repuesto, imagen de menu-->
					<div class="container">
						<div class="col">
							<div class="col-xs-12 main-info">
								<div class="section-content">
								<h1 class="section-header">Gracias por tu compra en <span class="content-header wow fadeIn " data-wow-delay="0.2s" 	data-wow-duration="2s"> Repuestos MRY</span></h1>
								<h3>Una copia del pedido a sido enviada a tu correo.</h3>
							</div>
						</div>
						</div>
					</div>
		</header>
		<article id="w1-detail" class="detail">
			<!--mapa de googlemaps-->
				<div class="panel panel-default">
  					<div class="panel-body">
 						<div class="col-xs-12" style="width: 98%; height: 440px;">
							<center><img src="./img/gracias.jpg" height="435px"></center>
    					</div>
 					</div>		
				</div>		
		</article>					
							
								
		<?php unset($_SESSION['carrito']); ?>
		<?php include '../../inc/footerua.php';?>
		<?php include '../../inc/footer_common.php';?>
	</body>
	</html>	