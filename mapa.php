
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<style type="text/css">
      		html, body { height: 50%; margin: 0; padding: 0; }
      		#map { height: 30%; }
    	</style>
		<?php include 'inc/head_common.php' ; ?>
		<title>Repuestos</title>
	</head>
	<?php include 'inc/headerinicio.php'; ?>	
	 <body onload="initMap();">
		

		<iframe
 			 width="600"
 			 height="450"
 			 frameborder="0" style="border:0"
   			 <div id="map"></div>
		</iframe>
		 
    

    <script type="text/javascript" src="./js/mapas.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVneXLOEsEjPRuvbtIgqHsyvNh0ecNpPE&callback=initMap">
    </script>

		<?php include 'inc/footer.php';?>
		<?php include 'inc/footer_common.php';?>
	</body>
	</html>	
	