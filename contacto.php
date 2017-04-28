<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <?php include 'inc/head_common.php' ; ?>
 <link rel="stylesheet" href="./css/registro.css">
 <link rel="stylesheet" href="./css/style.css">
  <title>Contáctenos</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
</head>

<body>
<?php include 'inc/headerinicio.php'; ?>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
		<section id="contact">
			<div class="section-content">
				<h1 class="section-header">Gracias por estar en contacto con <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Repuestos MRY</span></h1>
				<br>
				<h3>Para consultar sobre nuestros productos complete el formulario y nos pondremos en contacto con usted.</h3>
			</div>
			<br>
			<br>
			<div class="contact-section">
			<div class="container">
				<form action='./inc/sendbymail.php' method="post">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<span class="glyphicon glyphicon-user"></span>
			  				<label for="nombre">Nombre Completo:</label>
							<input id="user" type="text" name="nombrec" class="form-control" maxlength="50" placeholder="Ingrese su Nombre" />
				  		</div>
				  		<div class="form-group">
				  			<span class="glyphicon glyphicon-envelope"></span>
				  			<label for="mail">Correo/E-mail</label>
							<input id="mail" name="emailc" type="text" maxlength="80" class="form-control" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Ingrese su Correo" required/>	
 				    	</div>	
 				    	<div class="form-group">
			  				<span class="glyphicon glyphicon-globe"></span>
			  				<label for="mail">Provincia</label>
			  				<select class="form-control" name="provincia" required/>
 							 <option>San_José</option>
							 <option>Alajuela</option>
							 <option>Cartago</option>
							 <option>Heredia</option>
							 <option>Guanacaste</option>
							 <option>Puntarenas</option>
							 <option>Limón</option>
							</select>
				  		</div>
					  	<div class="form-group">
					  		<span class="glyphicon glyphicon-earphone"></span>
					  		<label for="telefono">Teléfono:</label>
					  		<input id="user" type="tel" name="telefonoc" class="form-control" onkeypress="return valida(event)" maxlength="80" placeholder="Ingrese su Teléfono" required/> 
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  			<span class="glyphicon glyphicon-comment"></span>
			  			<label for="mensaje">Mensaje:</label>
						<textarea id="mensaje" class="form-control" name="comentarioc" maxlength="1000" cols="20" rows="4"  placeholder="Ingrese su Mensaje" required></textarea>
			  			</div>
			  			<div>
			  				
			  				<button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Enviar Mensaje</button>
			  			</div>
			  			
					</div>
				</form>
			</div>	
			</div>
		</section>
  <script src="./js/valida.js"></script>		
  <?php include 'inc/footer.php';?>
  <?php include 'inc/footer_common.php';?>
</body>
</html>