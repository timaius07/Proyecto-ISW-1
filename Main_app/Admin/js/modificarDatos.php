<?php
//modifica los valores de los totales en el carrito de compras.
session_start();
					$arreglo=$_SESSION['cotiza'];
					$total=0;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_POST['Id']){
							$numero=$i;
						}
					}
					$arreglo[$numero]['Cantidad']=$_POST['Cantidad'];
					for($i=0;$i<count($arreglo);$i++){
						$total=($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])+$total;
					}
					$_SESSION['cotiza']=$arreglo;
					echo $total;

?>