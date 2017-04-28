<?php
//modifica los valores de los totales en el carrito de compras.
session_start();
include "../conexion.php";
					$arreglo=$_SESSION['carrito'];
					$total=0;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						//obtiene la posición
						if($arreglo[$i]['Id']==$_POST['Id']){
							$numero=$i;
						}
					}
		//**************************************revisar para mantener la cantidad maxima en inventario en la 
		//caja de texto en la que se digita la cantidad. sin tener que hacer refresh a la pagina
		//enviar alertas para ver los datos								
		$cantidad=0;
		$codig=0;
		$exist=0;
		$exist2=0;
		$re=mysql_query("select codigo,existencia from articulos");		
		
		for($i=0; $i<count($arreglo);$i++){
		while (	$f=mysql_fetch_array($re)) {
		  $codig=$f['codigo'];
				if ($arreglo[$numero]['Codigo'] == $codig) {
					$exist= $f['existencia'];
					$exist2= $_POST['Cantidad'];
					$cantidad = $exist - $exist2; 	
				 if ($cantidad > 0) {
				 		$arreglo[$numero]['Cantidad']=$_POST['Cantidad'];	
				 	}else{
				 		$arreglo[$numero]['Cantidad']=$exist;
				 	
				 	}	
				}	
		}	
			
		}
		//**************************
		//busca en el arreglo la posicion obtenida y coloca la cantidad que el ususario 
		//necesita comprar.
		for($i=0;$i<count($arreglo);$i++){
			$total=($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])+$total;
		}
		$_SESSION['carrito']=$arreglo;
		echo $total;
		


?>