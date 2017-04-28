<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Mantenimiento Administrador</title>
		<?php include '../../inc/head_common.php';?>
	</head>

	<body>
		<?php include '../../inc/headeradmin.php'; ?>
		<!--detail cambia los estilos workshop w1 cambia todo-->
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/registro.css">
 		<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
 		<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
		
			<header>
			<!--Cabecera de la pagina repuesto, imagen de menu-->
					<div class="container">
						<div class="col">
							<div class="col-xs-12 main-info">
								<div class="section-content">
								<h1 class="section-header">Menú Administración<span class="content-header wow fadeIn " data-wow-delay="0.2s" 	data-wow-duration="2s"> Repuestos MRY</span></h1>
								<br>
								<h3>Presione una opción para iniciar</h3>
							</div>
						</div>
						</div>
					</div>
		</header>
		<br>
		<br>
		<article id="w1-detail" class="detail">
				<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="tipos-repuestos">
									<div class="tiprepuestos col">
										<div class="col-xs-4">
										<h2>Administradores</h2>
											<a title="Agregar Administrador" href="administradores.php"><img src="../../img/admin.png" class="img-thumbnail"/></a>
											<br>
											<br>
											 <a href="administradores.php" class="btn btn-primary" role="button"><h4>Agregar Administrador</h4></a>	
										</div>
										<div class="col-xs-4">
										<h2>Administrar Usuarios</h2>
											<a title="Agregar Administrador" href="usuarios.php"><img src="../../img/user128.png" class="img-thumbnail"/></a>
											<br>
											<br>
											<a href="usuarios.php" class="btn btn-success" role="button"><h4>Administrar Usuarios</h4></a>
										</div>
										<div class="col-xs-4">
										<h2>Cotizar</h2>
											<a title="Agregar Administrador" href="./agregauser.php"><img src="../../img/coti.png" class="img-thumbnail"/></a>
											<br>
											<br>
											<a href="agregaradmin.php" class="btn btn-warning" role="button"><h4>Realizar Cotización</h4></a>
										</div>	
									</div>
									
								</section>
							</div>
						</div>
					</div>	
		</article>						
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		<?php include '../../inc/footerua.php';?>
		<?php include '../../inc/footer_common.php';?>
	</body>
	</html>	 
