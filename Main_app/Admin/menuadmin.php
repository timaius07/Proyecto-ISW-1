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
		
		<link rel="stylesheet" href="../../css/workshops2.css">
		<link rel="stylesheet" href="../../css/style.css">
		<article id="w1-detail" class="detail">
				<header>
				<!--Cabecera de la pagina repuesto, imagen de menu-->
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2>Menú Administrador</h2>
							</div>
						</div>
					</div>
				</header>
				<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="tipos-repuestos">
									<h3>Seleccione una Opcion para Iniciar:</h3>
									<div class="tiprepuestos col">
										<div class="col-xs-4">
										<h2>Agregar Administrador</h2>
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
											<a href="usuarios.php" class="btn btn-primary" role="button"><h4>Administrar Usuarios</h4></a>
										</div>
										<div class="col-xs-4">
										<h2>Cotizar</h2>
											<a title="Agregar Administrador" href="./agregauser.php"><img src="../../img/coti.png" class="img-thumbnail"/></a>
											<br>
											<br>
											<a href="agregaradmin.php" class="btn btn-primary" role="button"><h4>Realizar Cotización</h4></a>
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
