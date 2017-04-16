<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			include 'serv.php';
			if(isset($_POST['login'])){
				$usuario = $_POST['usuariolg'];
				$pw = $_POST['passlg'];
				$log = mysql_query("SELECT correou, tipousuario, nombreu FROM login WHERE correou='$usuario' AND contrasenau='$pw'");
				if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);
					$_SESSION["user"] = $row['correou']; 
				  	echo 'Iniciando sesión para '.$_SESSION['user'].' <p>';
				  	if ($row['tipousuario'] == "Administrador"):
  						  echo '<script> window.location="Admin/index.php"; </script>';
					elseif($row['tipousuario'] == "Cliente"): // Tenga en cuenta la combinación de las palabras.
    					  echo '<script> window.location="Usuario/index.php"; </script>';
					endif;
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo "<script type =\"text/javascript\"> history.go(-1);</script>";
				}
			}

		?>	
</body>
</html>