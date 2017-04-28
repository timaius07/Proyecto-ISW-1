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
   		<link rel="stylesheet" href="../../css/workshops2.css">
 		<link rel="stylesheet" href="../../css/registro.css">
 		<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
 		<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
		<article id="w1-detail" class="detail">
				<header>
				<!--Cabecera de la pagina, imagen de menu-->
				
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								 <div class="section-content">
                                <h1 class="section-header">Módulo  Usuarios<span class="content-header wow fadeIn " data-wow-delay="0.2s"    data-wow-duration="2s"> Repuestos MRY</span></h1>
                            </div>
							</div>
						</div>
					</div>
				</header>
				<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="tipos-repuestos">
									<h3>Tabla de Usuarios</h3>
									<div class="col-xs-12">									
										<table class="table table-bordered">
										<thead>
											<tr>
												<td >
													<a href="./agregaruser.php" class="btn btn-success" role="button">Agregar Usuarios</a>				
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
												$query = "SELECT * FROM login WHERE tipousuario = 'Cliente'";
												$resultado = mysql_query($query);
												while ($row = mysql_fetch_assoc($resultado)) {
											 ?>	
											 	<tr>

											 		<td><?php echo $row['id']; ?></td>
											 		<td><?php echo $row['nombreu']; ?></td>
											 		<td><?php echo $row['correou']; ?></td>
											 		<th><a href="modificauser.php?id=<?php echo $row ['id'];?>" class="btn btn-warning" role="button">Modificar</a></th>
											 		<th><a href="procesoeliminaradmin.php?id=<?php echo $row ['id'];?>" class="btn btn-danger role="button">Eliminar</a></th>
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