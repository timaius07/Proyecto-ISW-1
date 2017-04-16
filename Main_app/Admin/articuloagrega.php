  <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Mantenimiento Articulos</title>
  <?php include '../../inc/head_common.php' ; ?>

 <link rel="stylesheet" href="../../css/mainarticulos.css">
 <link rel="stylesheet" href="../../css/workshops2.css">
 <link rel="stylesheet" href="../../css/style.css">
 
  <title>Agregar Artículo</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
</head>
<?php include '../../inc/headeradmin.php'; ?>

	<div id ="workshop-list">
			<article id="w1" class="workshop workshop-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-8 main-info">
							<h3 class="highlighted">Módulo Nuevo Artículo</h3>
						</div>
						<div class="error">
							<span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
						</div>
						<div class="main">
							<form action='./procesoguardar.php' id="formlg" method="POST" enctype="multipart/form-data">
			 				   <label type="text" class="label">Código</label>
						       <input name="codigo" type="text" class="form-control" placeholder="Código del Artículo" value="" required/>
				               <label type="text" class="label">Descripción</label>
				               <input name="descrp" type="text" class="form-control" placeholder="Descripción" value="" required/>
				               <label type="text" class="label">Precio</label>
				               <input name="precio" type="text" class="form-control" onkeypress="return valida(event)" placeholder="Precio" value="" required/>
				               <label type="text" class="label">Existencia</label>
				               <input name="exist" type="text" class="form-control" onkeypress="return valida(event)" placeholder="Existencia" value="" required/>
				               <label type="text" class="label">Foto de Artículo</label>
				               <input type="file" name="Imagen" required="Falta Imagen" />
				               <div class="group">
							   <br>
							   <label type="text" class="label">Departamento</label>
									<br>
									<select class="input" type="button" name="dept">
 										<option>Automovil</option>
 										<option>Camiones</option>
 										<option>Motocicletas</option>
 									</select>
								</div>
									<br>
								<div class="group">
									<label type="text" class="label">Sucursal</label>
									<br>
									<select class="input" type="button" name="sucs">
 										<option>San_José</option>
 										<option>San_Carlos</option>
 										<option>Guápiles</option>
 										<option>Puntarenas</option>
 										<option>Liberia</option>										
 									</select>
								</div>
								<br>
				               <input type="submit" class="button" value="Guardar">
		   					 </form>
						</div>		
					</div>
				</div>
			</article>
	</div>
	<script src="./js/valida.js"></script>
  <?php include '../../inc/footerua.php';?>
  <?php include '../../inc/footer_common.php';?>
</body>
</html>