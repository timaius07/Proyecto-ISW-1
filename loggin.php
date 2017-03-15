<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <?php include 'inc/head_common.php' ; ?>
  <?php include 'inc/connect_db.php' ; ?>
 <link rel="stylesheet" href="./css/registro.css">
  <title>Inicio de Sessión</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
</head>

<body>
<?php include 'inc/header.php'; ?>
  <div class="login-wrap"  >
	<div class="login-html" style="width: 400px; height: 530px;">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
		<div class="login-form" >
			<div class="sign-in-htm">
			<form action='./inc/validar.php' method="post">
				<div class="group">
					<label for="mail" class="label">Correo/E-mail</label>
					<input id="mail" name="mail" type="text" class="input" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/>
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="tipo" class="label">Tipo Usuario</label>
					<select class="input" name="tipousu">
 					 <option>Cliente</option>
 					 <option>Administrador</option>
 					</select>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Mantener Iniciado</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Iniciar Sessión">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Olvido su Contraseña?</a>
				</div>
			</div>
			</form>
<!-- formulario registro -->			
			<form method="post" action="">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Nombre de Usuario</label>
					<input id="user" type="text" name="realname" class="input" placeholder="Ingresa tu nombre" />
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input id="pass" type="password" name="pass" class="input" required placeholder="Ingresa contraseña" />
				</div>
				<div class="group">
					<label for="pass2" class="label">Repita Contraseña</label>
					<input type="password" name="rpass" class="input" required placeholder="Repite la Contraseña" />
				</div>
				<div class="group">
					<label for="mail" class="label">Correo/E-mail</label>
					<input id="mail" type="text" name="correo" class="input" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  required placeholder="Ingresa tu E-mail o Correo"/>
				</div>
				<div class="group">
					<label for="tipo" class="label">Tipo Usuario</label>
					<select class="input" name="tipou">
 					 <option>Cliente</option>
 					</select>
				</div>
				<div class="group">
					<input type="submit" class="button" name="submit" value="Registrarse">
				</div>
				
			</div>
			</form>
			<?php
				if(isset($_POST['submit'])){
					require("registro.php");
				}
			?>
		</div>
	</div>
</div>
  
  <?php include 'inc/footer.php';?>
  <?php include 'inc/footer_common.php';?>
</body>
</html>
