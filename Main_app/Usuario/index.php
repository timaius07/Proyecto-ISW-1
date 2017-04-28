<?php
session_start();
include '../serv.php';
if(isset($_SESSION['user'])) {?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php include '../../inc/head_common.php' ; ?>
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/workshops2.css">
		<link rel="stylesheet" href="./css/registro.css">
		<title>Repuestos Usu</title>
		<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   		 <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   		 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<?php include '../../inc/header.php'; ?>	
		<div id ="workshop-list">
			<article id="w1" class="workshop workshop-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 main-info">
						<br>
							<?php 
								$id = $_SESSION['user'];
								$query = "SELECT nombreu FROM login WHERE correou='$id' ";
								$resultado = mysql_query($query);
								$row = mysql_fetch_array($resultado);
							
								echo '<span style="color:white; font-size:30px;">Bienvenido '.$row['nombreu'].'</span>';
							?>
						<br>
						<br>
							<h2 class="highlighted">Nuestros Repuestos</h2>
							<p> Contamos con una amplia cantidad de repuestos.</p><br>
							<p>Ofrecemos calidad, asesoramiento y garantía en nuestros repuestos.</p>
							<a href="detalles.php" class="btn btn-primary" role="button">Tienda</a>
						</div>
						
					</div>
				</div>
			</article>
		</div>
		<?php include '../../inc/footerua.php';?>
		<?php include '../../inc/footer_common.php';?>
	</body>
<?php  
}else{
echo '<script> window.location="../../index.php"; </script>';}?>	
	