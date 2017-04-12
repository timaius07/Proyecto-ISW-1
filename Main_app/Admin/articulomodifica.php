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
<body>
<script src="../../js/jquery-2.2.4.min.js"></script>	
<?php include '../../inc/headeradmin.php'; ?>
	
	
		<?php 

			include("conexion.php");
			$id = $_REQUEST ['id'];
			$query = "SELECT * FROM articulos WHERE id='$id' ";
			$resultado = mysql_query($query);
			$row = mysql_fetch_assoc($resultado);
		?>

	<div id ="workshop-list">
			<article id="w1" class="workshop workshop-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-8 main-info">
							<h3 class="highlighted">Módulo Modificar Artículo</h3>
						</div>
						<div class="error">
							<span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
						</div>
						<div class="main">
							<form action="procesomodificar.php?id=<?php echo $row['id']; ?> " method="POST" enctype="multipart/form-data">
			 				   <label type="text" class="label">Código</label>
						       <input name="codigo" type="text" class="form-control" placeholder="Código del Artículo" value="<?php echo $row['codigo'];?>" required/>
				               <label type="text" class="label">Descripción</label>
				               <input name="descrp" type="text" class="form-control" placeholder="Descripción" value="<?php echo $row['descripcion'];?>" required/>
				               <label type="text" class="label"">Precio</label>
				               <input name="precio" type="text" class="form-control" placeholder="Precio" value="<?php echo $row['precio'];?>" required/>
				               <label type="text" class="label"">Existencia</label>
				               <input name="exist" type="text" class="form-control" placeholder="Existencia" value="<?php echo $row['existencia'];?>" required/>
				               <label type="text" class="label"">Foto de Artículo</label>
				               <img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>"/>
										<input type="file" name="Imagen" required="Falta Imagen" />
				               <div class="depart">
									<label type="text" class="label">Departamento</label>
									<br>	 
									<select class="departa" type="button" name="dept" id="dept">
 										<option value="Automovil">Automovil</option>
 										<option value="Camiones">Camiones</option>
 										<option value="Motocicletas">Motocicletas</option>
 									</select>

								</div>
								<div class="sucsa">
									<label type="text" class="label"">Sucursal</label>
									<br>
									<select class="sursa" type="button" name="sucur" id="sucur">
 										<option value="San_José">San_José</option>
 										<option value="San_Carlos">San_Carlos</option>
 										<option value="Guápiles">Guápiles</option>
 										<option value="Puntarenas">Puntarenas</option>
 										<option value="Liberia">Liberia</option>
 									</select>
 									
								</div>
				               <br>
				               <script type="text/javascript">
 										$('.depart option[value=<?php echo $row['departamento'];?>]').attr('selected','selected');	
 										$('.sucsa option[value=<?php echo $row['sucursal'];?>]').attr('selected','selected');
								</script>
				               <input type="submit" class="button" value="Modificar">
		   					 </form>
						</div>		
					</div>
				</div>
			</article>
	</div>
  
  <?php include '../../inc/footerua.php';?>
  <?php include '../../inc/footer_common.php';?>
</body>
</html>