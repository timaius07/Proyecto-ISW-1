<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <?php include 'inc/head_common.php' ; ?>

  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/workshops2.css">
 <link rel="stylesheet" href="./css/mainarticulos.css">
  <title>Inicio de Sessión</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
</head>

<body>
<?php include 'inc/headerinicio.php'; ?>
  	<div id ="workshop-list">
			<article id="w1" class="workshop workshop-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-8 main-info">
							<h3 class="highlighted">Módulo Nuevo Usuario</h3>
						</div>
						<div class="error">
							<span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
						</div>
						<div class="main">
							<form action='grdCliente.php' id="formlg" method="POST" enctype="multipart/form-data">
							<div class="sign-up-htm">
								<div class="group">
									<label type="text" class="label">Nombre de Usuario</label>
									<input id="user" type="text" name="nombrec" class="input" placeholder="Ingresa tu nombre" required />
								</div>
								<div class="group">
									<label type="text" class="label">Contraseña</label>
									<input id="pass" type="password" name="pass" pattern="[A-Za-z0-9_-]{1,15}" class="input" required placeholder="Ingresa contraseña" required/>
								</div>
								<div class="group">
									<label type="text" class="label">Correo/E-mail</label>
									<input id="mail" type="text" name="correo" class="input" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  required placeholder="Ingresa tu E-mail o Correo" required/>
								</div>
								<br>
								<div class="group">
									<label for="tipo" class="label">Tipo Usuario</label>
									<br>
									<select class="input" name="tipou">
 					 				<option>Cliente</option>
 									</select>
								</div>
								<br>
								<div class="group">
									<input type="submit" class="button"  value="Registrarse">
								</div>
				
							</div>
							</form>
						</div>		
					</div>
				</div>
			</article>
	</div>
  
  
  <?php include 'inc/footer.php';?>
  <?php include 'inc/footer_common.php';?>
</body>
</html>
