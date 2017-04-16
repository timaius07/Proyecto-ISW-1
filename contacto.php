<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <?php include 'inc/head_common.php' ; ?>
 <link rel="stylesheet" href="./css/registro.css">
 <link rel="stylesheet" href="./css/style.css">
  <title>Inicio de Sessión</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
</head>

<body>
<?php include 'inc/headerinicio.php'; ?>
  <div class="login-wrap"  >
	<div class="login-html" style="width: 400px; height: 530px;">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
	
		<div class="login-form" >
			<div class="sign-in-htm">
			<form action='./inc/sendbymail.php' method="post">
				<div class="group">
					<label for="nombre" class="label">Nombre Completo:</label>
					<input id="user" type="text" name="first_name" class="input" maxlength="50" placeholder="Ingrese su Nombre" />
				</div>
				<div class="group">
					<label for="mail" class="label">Correo/E-mail</label>
					<input id="mail" name="email" type="text" maxlength="80" class="input" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Ingrese su Correo" required/>
				</div>
				<div class="group">
					<label for="telefono" class="label">Teléfono:</label>
					<input id="user" type="text" name="telephone" class="input" maxlength="80" placeholder="Ingrese su Teléfono" />
				</div>
				<div class="group">
					<label for="mensaje" class="label">Mensaje:</label>
					<textarea id="mensaje" class="input" name="comments" maxlength="1000" cols="20" rows="4"  placeholder="Ingrese su Mensaje"></textarea>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Enviar Mensaje"></a>
				</div>
				<div class="hr"></div>				
			
			</form>

		</div>
	</div>
</div>
</div>
  <?php include 'inc/footer.php';?>
  <?php include 'inc/footer_common.php';?>
</body>
</html>