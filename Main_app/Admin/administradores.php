<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Mantenimiento Articulos</title>
		<?php include '../../inc/head_common.php';?>
		

	</head>

	<body>
		<?php include '../../inc/headeradmin.php'; ?>
		<!--detail cambia los estilos workshop w1 cambia todo-->
		
		<link rel="stylesheet" href="../../css/workshops2.css">
		<link rel="stylesheet" href="../../css/style.css">
		<article id="w1-detail" class="detail">
				<header>
				<!--Cabecera de la pagina, imagen de menu-->
				
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2>Administradores</h2>
							</div>
						</div>
					</div>
				</header>
				<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="tipos-repuestos">
									<h3>Tabla de Administradores</h3>
									<div class="col-xs-12">									
										<table class="table table-bordered">
										<thead>
											<tr>
												<td >
													<a href="./agregaradmin.php" class="btn btn-primary" role="button">Agregar Administradores</a>				
												</td>
											</tr>
											 <tr>
											    <th>CÓDIGO:</th>
											    <th>NOMBRE:</th> 
											    <th>CORREO:</th>
											    <th colspan="2">MANTENIMIENTO</th>
											  </tr>
										</thead>
										<tbody>
											<?php 
												include("conexion.php");
												$query = "SELECT * FROM login WHERE tipousuario = 'Administrador'";
												$resultado = mysql_query($query);
												while ($row = mysql_fetch_assoc($resultado)) {
											 ?>	
											 	<tr>

											 		<td><?php echo $row['id']; ?></td>
											 		<td><?php echo $row['nombreu']; ?></td>
											 		<td><?php echo $row['correou']; ?></td>
											 		<th><a href="modificaadmin.php?id=<?php echo $row ['id'];?>" class="btn btn-primary" role="button">Modificar</a></th>
											 		<th><a href="procesoeliminaradmin.php?id=<?php echo $row ['id'];?>" class="btn btn-primary" role="button">Eliminar</a></th>
											 	</tr>
											 <?php
												 }
											 ?>
										</tbody>
										<table>
											<tr>
																
											</tr>	
										</table>				
									</div>			
								</section>
		
		</article>						
		
		<?php include '../../inc/footerua.php';?>
		<?php include '../../inc/footer_common.php';?>
	</body>
	</html>	