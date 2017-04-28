<?php 
require 'conexion.php' ;

$usuarios = $mysqli->query("SELECT correou, tipousuario, nombreu 
		  FROM login
		  WHERE correou  = '".$_POST['usuariolg']."' 
		  AND contrasenau  = '".$_POST['passlg']."'");

if ($usuarios->num_rows == 1){ 
	$datos = $usuarios->fetch_assoc();
	echo json_encode(array('error' => false, 'tipo' => $datos['tipousuario']));
}else{
	echo json_encode(array('error' => true));
}
 ?>