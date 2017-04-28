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
		
		
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/registro.css">
		<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   		<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
		<article id="w1-detail" class="detail">
		<header>
			<!--Cabecera de la pagina repuesto, imagen de menu-->
					<div class="container">
						<div class="col">
							<div class="col-xs-12 main-info">
								<div class="section-content">
								<h1 class="section-header">Articulos en Tienda <span class="content-header wow fadeIn " data-wow-delay="0.2s" 	data-wow-duration="2s"> Repuestos MRY</span></h1>
								<h3>Presione añadir al carrito para poder realizar la cotización.</h3>
							    </div>
						    </div>
						</div>
					</div>
					<br>
		</header>
				<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="tipos-repuestos">
									<div class="col-xs-12">									
										<table class="table table-bordered">
										<thead>
											 <tr>
											    <th>CÓDIGO:</th>
											    <th>DESCRICIÓN:</th> 
											    <th>PRECIO ¢:</th>
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
											 		<td><center><?php echo $row['existencia']; ?></center></td>
											 		<td><img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/></td>
											 		<td><?php echo $row['departamento']; ?></td>									 		
											 		<td><center><a href="#" class="btn btn-primary" class="button" role="button"><?php echo $row['sucursal']; ?></a></center></td>
											 		<th><center><a href="cotiza.php?id=<?php echo $row ['id'];?>"><img src="../../img/carritorep.jpg"></a></center></th>
											 		
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