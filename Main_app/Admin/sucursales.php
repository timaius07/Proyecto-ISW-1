<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sucursales</title>
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
								<h1 class="section-header">Sucursales de  <span class="content-header wow fadeIn " data-wow-delay="0.2s" 	data-wow-duration="2s"> Repuestos MRY</span></h1>
								<h3>Presione en la ubicacion de la Sucursal para obtener mas información.</h3>
							</div>
						</div>
						</div>
					</div>
		</header>
		<article id="w1-detail" class="detail">
			<!--mapa de googlemaps-->
				<div class="panel panel-default">
  					<div class="panel-body">
 						<div class="col-xs-12" id="map" style="width: 98%; height: 440px;">
							<div class="col-xs-8">
  							<script type="text/javascript" src="../../js/mapas.js"></script>
    						<script async defer
      						src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVneXLOEsEjPRuvbtIgqHsyvNh0ecNpPE&callback=initMap">
    						</script>
    						</div>
    					</div>
 					</div>		
				</div>		
		</article>					
							
								
		
		<?php include '../../inc/footerua.php';?>
		<?php include '../../inc/footer_common.php';?>
	</body>
	</html>	