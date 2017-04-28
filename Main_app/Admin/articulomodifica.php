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
  <title>Modifica Artículo</title>
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

		<section id="contact">
			<div class="section-content">
				<h1 class="section-header">Formulario de Registro (Modificar) <span class="content-header wow fadeIn " data-wow-delay="0.2s" 	data-wow-duration="2s"> Repuestos MRY</span></h1>
			</div>
			<br>
			<br>
			<div class="contact-section">
			<div class="container">
				<form action="procesomodificar.php?id=<?php echo $row['id']; ?> " method="POST" enctype="multipart/form-data">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<span class="glyphicon glyphicon-barcode"></span>
			  				<label for="codigo">Código</label>
						    <input name="codigo" type="text" class="form-control" placeholder="Código del Artículo" value="<?php echo $row['codigo'];?>" >
				  		</div>
				  		<div class="form-group">
				  			<span class="glyphicon glyphicon-list-alt"></span>
				  			<label for="Desc">Descripción</label>
				            <input name="descrp" type="text" class="form-control" placeholder="Descripción" value="<?php echo $row['descripcion'];?>" required/>
 				    	</div>	
 				    	<div class="form-group">
 				    		<span class="glyphicon glyphicon-usd"></span>
			  				<label for="prec">Precio</label>
				            <input name="precio" type="text" class="form-control" onkeypress="return valida(event)" placeholder="Precio" value="<?php echo $row['precio'];?>" required/>
				  		</div>
					  	<div class="form-group">
					  		<span class="glyphicon glyphicon-paste"></span>
					  		<label for="exists">Existencia</label>
				            <input name="exist" type="text" class="form-control" onkeypress="return valida(event)" placeholder="Existencia" value="<?php echo $row['existencia'];?>" required/>
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<span class="glyphicon glyphicon-picture"></span>
			  				<label for="pict">Foto de Artículo</label>
			  				<br>
				            <img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>"/>
				            <br>
				            <br>
							<input type="file" name="Imagen" accept="image/*" required="Falta Imagen" />
			  			</div>
			  			<div class="form-group">
			  			 <div class="depart">
			  				<span class="glyphicon glyphicon-home"></span>
			  				<label for="dept">Departamento</label>
								<select class="form-control" type="button" name="dept" id="dept">
 										<option value="Automovil">Automovil</option>
 										<option value="Camiones">Camiones</option>
 										<option value="Motocicletas">Motocicletas</option>
 								</select>
			  			 </div>
			  			</div>
			  			<div class="form-group">
			  			<div class="sucsa">
			  				<span class="glyphicon glyphicon-globe"></span>
			  				<label for="suc">Sucursal</label>
							<br>
								<select class="form-control" type="button" name="sucur" id="sucur">
 										<option value="San_José">San_José</option>
 										<option value="San_Carlos">San_Carlos</option>
 										<option value="Guápiles">Guápiles</option>
 										<option value="Puntarenas">Puntarenas</option>
 										<option value="Liberia">Liberia</option>
 									</select>
			  			</div>
			  			</div>
			  			<div>
			  				<script type="text/javascript">
 										$('.depart option[value=<?php echo $row['departamento'];?>]').attr('selected','selected');	
 										$('.sucsa option[value=<?php echo $row['sucursal'];?>]').attr('selected','selected');
							</script>
			  				<button type="submit" class="btn btn-success submit"><i class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></i>Modificar</button>
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