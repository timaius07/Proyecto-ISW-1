<?php 
require 'conexion.php' ;

$usuarios = $mysqli->query("SELECT nombreu, tipousuario 
		  FROM login
		  WHERE nombreu  = '".$_POST['usuariolg']."' 
		  AND contrasenau  = '".$_POST['passlg']."'");

if ($usuarios->num_rows == 1){ 
	$datos = $usuarios->fetch_assoc();
	echo json_encode(array('error' => false, 'tipo' => $datos['tipousuario']));
}else{
	echo json_encode(array('error' => true));
}
 ?>