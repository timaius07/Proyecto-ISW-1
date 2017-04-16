<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Mantenimiento Articulos</title>
		<?php include '../../inc/head_common.php';?>
		

	</head>

	<body>
		<?php include '../../inc/header.php'; ?>
		<!--detail cambia los estilos workshop w1 cambia todo-->
		
		<link rel="stylesheet" href="../../css/workshops2.css">
		<link rel="stylesheet" href="../../css/style.css">
		<article id="w1-detail" class="detail">
				<header>
				<!--Cabecera de la pagina, imagen de menu-->
				
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2>Artículos</h2>
							</div>
						</div>
					</div>
				</header>
				<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="tipos-repuestos">
									<h3>Tabla de Artículos</h3>
									<div class="col-xs-12">									
										<table class="table table-bordered">
										<thead>
											 <tr>
											    <th>CÓDIGO:</th>
											    <th>DESCRICIÓN:</th> 
											    <th>PRECIO:</th>
											    <th>EXISTENCIA:</th>
											    <th>FOTO</th>
											    <th>DEPARTAMENTO</th>
											    <th>SUCURSAL</th>
											    <th>AÑADIR AL CARRITO</th>
											  </tr>
										</thead>
										<tbody>
											<?php 
												include("conexion.php");
												$query = "SELECT * FROM articulos";
												$resultado = mysql_query($query);
												while ($row = mysql_fetch_assoc($resultado)) {
											 ?>	
											 	<tr>

											 		<td><?php echo $row['codigo']; ?></td>
											 		<td><?php echo $row['descripcion']; ?></td>
											 		<td><?php echo $row['precio']; ?></td>
											 		<td><?php echo $row['existencia']; ?></td>
											 		<td><img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/></td>
											 		<td><?php echo $row['departamento']; ?></td>
											 		<th><?php echo $row['sucursal']; ?></td>
											 		<th><a href="carrito.php?id=<?php echo $row ['id'];?>"><img src="../../img/carritorep.jpg"></a></th>
											 		
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