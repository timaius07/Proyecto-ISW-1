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
		<header>
			<!--Cabecera de la pagina repuesto, imagen de menu-->
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
								<h2><b><u> Su Repuesto Ya  </u></b>tiene Sucursales en todo el País</h2>
						</div>
					</div>
				</div>
					<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="tipos-repuestos">
									<h3>Conozca nuestras direcciones y Teléfonos:</h3>
									<div class="tiprepuestos col">
										<div class="col-xs-4">
								
										</div>
								</section>
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