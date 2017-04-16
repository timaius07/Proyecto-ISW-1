<?php
session_start();
include "../conexion.php";
		$arreglo=$_SESSION['carrito'];
		$user = $_SESSION['user'];		
		$total=0;

			$query = "SELECT nombreu FROM login WHERE correou='$user' ";
			$resultado = mysql_query($query);
			$row = mysql_fetch_array($resultado);
							
								
		$tabla='<table border="1">
			<tr>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Subtotal</th>
			</tr>';
		for($i=0;$i<count($arreglo);$i++){
			$tabla=$tabla.'<tr>
				<td>'.$arreglo[$i]['Nombre'].'</td>
				<td>'.$arreglo[$i]['Cantidad'].'</td>
				<td>'.$arreglo[$i]['Precio'].'</td>
				<td>'.$arreglo[$i]['Cantidad']*$arreglo[$i]['Precio'].'</td>
				</tr>
			';
			$total=$total+($arreglo[$i]['Cantidad']*$arreglo[$i]['Precio']);
		}

		$tabla=$tabla.'</table>';
		//echo $tabla;
		$nombre=$row['nombreu'];
		$fecha=date("d-m-Y");
		$hora=date("H:i:s");
		$asunto="Compra en MRY Tienda de Repuestos";
		$desde="www.mry.com";
		$correo="timaius22@gmail.com";
		$comentario='
			<div style="
				border:1px solid #d6d2d2;
				border-radius:5px;
				padding:10px;
				width:800px;
				heigth:300px;
			">
			<center>
				<img src="https://yt4.ggpht.com/-3eVnkBJn2y4/AAAAAAAAAAI/AAAAAAAAAAA/hAqolVRolHc/s48-c-k-no/photo.jpg" width="300px" heigth="250px">
				<h1>Muchas gracias por comprar en mi carrito de compras</h1>
			</center>
			<p>Hola '.$nombre.' muchas gracias por tu compra la siguiente lista contiene los productos que compraste</p>
			<p>Lista de Artículos<br>
				'.$tabla.'
				<br>
				Total del pago es: '.$total.'

			</p>
			</div>

		';

		//echo $comentario;
		$headers="MIME-Version: 1.0\r\n";
		$headers.="Content-type: text/html; charset=utf8\r\n";
		$headers.="From: Remitente\r\n";
		mail($correo,$asunto,$comentario,$headers);
		//unset($_SESSION['carrito']);
		//header("Location: ../admin.php");