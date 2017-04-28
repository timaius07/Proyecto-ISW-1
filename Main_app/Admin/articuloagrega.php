  <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Mantenimiento Articulos</title>
  <?php include '../../inc/head_common.php' ; ?>

 <link rel="stylesheet" href="../../css/workshops2.css">
 <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/registro.css">
 <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">

  <title>Agregar Artículo</title>
</head>
<?php include '../../inc/headeradmin.php'; ?>
	
		<section id="contact">
			<div class="section-content">
				<h1 class="section-header">Formulario de Registro <span class="content-header wow fadeIn " data-wow-delay="0.2s" 	data-wow-duration="2s"> Repuestos MRY</span></h1>
			</div>
			<br>
			<br>
			<div class="contact-section">
			<div class="container">
				<form action='./procesoguardar.php' id="formlg" method="POST" enctype="multipart/form-data">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<span class="glyphicon glyphicon-barcode"></span>
			  				<label for="codigo">Código</label>
						    <input name="codigo" type="text" class="form-control" placeholder="Código del Artículo" value="" required/>
				  		</div>
				  		<div class="form-group">
				  			<span class="glyphicon glyphicon-list-alt"></span>
				  			<label for="Desc">Descripción</label>
				            <input name="descrp" type="text" class="form-control" placeholder="Descripción" value="" required/>	
 				    	</div>	
 				    	<div class="form-group">
 				    		<span class="glyphicon glyphicon-usd"></span>
			  				<label for="prec">Precio</label>
				            <input name="precio" type="text" class="form-control" onkeypress="return valida(event)" placeholder="Precio" value="" required/>
				  		</div>
					  	<div class="form-group">
					  		<span class="glyphicon glyphicon-paste"></span>
					  		<label for="exists">Existencia</label>
				            <input name="exist" type="text" class="form-control" onkeypress="return valida(event)" placeholder="Existencia" value="" required/>
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<span class="glyphicon glyphicon-picture"></span>
			  				<label for="pict">Foto de Artículo</label>
				            <input type="file" name="Imagen" accept="image/*" required="Falta Imagen" />
			  			</div>
			  			<div class="form-group">
			  				<span class="glyphicon glyphicon-home"></span>
			  				<label for="dept">Departamento</label>
								<select class="form-control" name="dept">
 									<option>Automovil</option>
 									<option>Camiones</option>
 									<option>Motocicletas</option>
 								</select>
			  			</div>
			  			<div class="form-group">
			  				<span class="glyphicon glyphicon-globe"></span>
			  				<label for="suc">Sucursal</label>
							<br>
								<select class="form-control" name="sucs">
 									<option>San_José</option>
 									<option>San_Carlos</option>
 									<option>Guápiles</option>
 									<option>Puntarenas</option>
 									<option>Liberia</option>										
 								</select>
			  			</div>
			  			<div>
			  				<button type="submit" class="btn btn-success submit"><i class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></i>Guardar</button>
			  			</div>
			  			
					</div>
				</form>
			</div>
		</section>

  <script src="./js/valida.js"></script>
  <?php include '../../inc/footerua.php';?>
  <?php include '../../inc/footer_common.php';?>
</body>
</html>