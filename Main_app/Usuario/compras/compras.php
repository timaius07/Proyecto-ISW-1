<?php
session_start();
//guarda las compras realizadas por el usuario
include "../conexion.php";
		$arreglo=$_SESSION['carrito'];
		$exist=0;
		$exist2=0;
		$total=0;
		$codig=0;
		$re=mysql_query("select codigo,existencia from articulos");		
		
		for($i=0; $i<count($arreglo);$i++){
		while (	$f=mysql_fetch_array($re)) {
		  $codig=$f['codigo'];
				if ($arreglo[$i]['Codigo'] == $codig) {
					$exist= $f['existencia'];
					$exist2= $arreglo[$i]['Cantidad'];
					$total = $exist - $exist2; 	
					mysql_query("UPDATE articulos SET existencia='$total' WHERE codigo = '$codig'")or die(mysql_error());
				}	
		}	
			
		}
		
		//variable de session que contiene el correo del usuario que  hace login
		$user = $_SESSION['user'];		
		$total=0;
			//Seleccionamos el Nombre de la persona que se registro para mostrar
			$query = "SELECT nombreu, correou FROM login WHERE correou='$user' ";
			$resultado = mysql_query($query);
			$row = mysql_fetch_array($resultado);
							
								
		$tabla='<table border="1">
			<tr>
			<th>Codígo</th>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Subtotal</th>
			</tr>';
		for($i=0;$i<count($arreglo);$i++){
			$tabla=$tabla.'<tr>
				<td>'.$arreglo[$i]['Codigo'].'</td>
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
		$correo=$row['correou'];
		$fecha=date("d-m-Y");
		$hora=date("H:i:s");
		$asunto="Compra en MRY Tienda de Repuestos";
		$desde="www.mry.com";
		$comentario='
			<div style="
				border:1px solid #d6d2d2;
				border-radius:5px;
				padding:10px;
				width:800px;
				heigth:300px;
			">
			<center>
				<img src="https://pbs.twimg.com/profile_images/493504264220602369/kBVjqWby_400x400.png" width="300px" heigth="250px">
				<h1>Muchas gracias por comprar en mi carrito de compras</h1>
			</center>
			<p>Hola '.$nombre.' muchas gracias por Cotizar a continuación te mostramos una lista que contiene los productos que deseabas cotizar</p>
			<center>
			<p>Lista de Artículos<br>
				'.$tabla.'
				<br>
				Monto Total en Colones: '.$total.'
			</center>	
			</p>
			</div>

		';

		//echo $comentario;
		$headers="MIME-Version: 1.0\r\n";
		$headers.="Content-type: text/html; charset=utf8\r\n";
		$headers.="From: Remitente\r\n";
		mail($correo,$asunto,$comentario,$headers);		
		
?>