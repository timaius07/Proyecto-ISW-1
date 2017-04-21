<?php  
	//revisar porque se quiere agregar el codigo del articulo
	session_start();
	include "conexion.php";
	if (isset($_SESSION['carrito'])){
		
		if(isset($_GET['id'])){
			$idv = $_GET['id'];
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$codigo="";
						$nombre="";
						$precio=0;
						$imagen="";
						$query = "SELECT * FROM articulos WHERE id='$idv' ";
						$re = mysql_query($query);
						while ($f=mysql_fetch_assoc($re)) {
							$codigo=$f['codigo']; 
							$nombre=$f['descripcion'];
							$precio=$f['precio'];
							$imagen=$f['imagen'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'Codigo'=>$codigo,
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}	
	
}else{
		if(isset($_GET['id'])){
			$idv = $_GET['id'];
			$codigo="";
			$nombre="";
			$precio=0;
			$imagen="";
			$query = "SELECT * FROM articulos WHERE id='$idv'";
			$re=mysql_query($query);
			while ($f=mysql_fetch_assoc($re)) {
				$codigo=$f['codigo'];
				$nombre=$f['descripcion'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'Codigo'=>$codigo,
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Mantenimiento Articulos</title>
		<?php include '../../inc/head_common.php';?>
		

	</head>

	<body>
		<?php include '../../inc/header.php'; ?>
		<!--detail cambia los estilos workshop w1 cambia todo-->
		
		<link rel="stylesheet" href="../../css/workshops2.css">
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/producto.css">
		<article id="w1-detail" class="detail">
				<header>
				<!--Cabecera de la pagina, imagen de menu-->
				
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2>Su carrito de Compras</h2>
								<center>
								<h3>Articulos Agregados al Carrito</h3>
								</center>
							</div>
						</div>
					</div>
				</header>
				<section id="tipos-repuestos">
					<?php 
					$total=0;
					if (isset($_SESSION['carrito'])){
						$datos = $_SESSION['carrito'];
						$total=0;
						$total=0;
						for ($i=0; $i <count($datos) ; $i++) { 
				?>		<div class="producto">
							
								<center>
									<img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($datos[$i]['Imagen']); ?>"/>
									<br>
									<span>Codígo : <?php echo $datos[$i]['Codigo']; ?></span><br>
									<span><?php echo $datos[$i]['Nombre'];?></span><br>						
									<span>Precio : <?php echo $datos[$i]['Precio']; ?></span>
									<br>
									<span>Cantidad :
										<input type="text" value="<?php echo $datos[$i]['Cantidad']; ?>"
										data-precio="<?php echo $datos[$i]['Precio']; ?>"
										data-id="<?php echo $datos[$i]['Id']; ?>"
										class="cantidad"
										>

									</span> 
									<br>
									<span class="subtotal">Subtotal : <?php echo $datos[$i]['Cantidad']* $datos[$i]['Precio'];  ?></span>
									<br>
									<button type="button" class="btn btn-danger"><a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id'] ?>">Eliminar </a></button>
								</center>
						</div>	
						
				<?php	
					$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
				}	
					}else{
						echo '<center><h2> El carrito de Compras esta Vacio</h2></center>';
					}	
				echo '<center><h2 id="total">Total: '.$total.'</h2></center>';
				if ($total != 0) {
						//echo '<center><a href="./compras/compras.php"  class="aceptar">Comprar</a></center>;';
						echo '<center><a href="./compras/cotizar.php">  <input type=image src="../../img/cotizar1.png" width="200" height="84"></center>;';
						echo '<script language="javascript">alert("Gracias por cotizar con nosotros" <br>
												  "La proforma ha sido enviada a su correo");</script>';
				?>
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="formulario">
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="upload" value="1">
					<input type="hidden" name="business" value="marcocamvar_68-facilitator@hotmail.com">
					<input type="hidden" name="currency_code" value="CRC">
					<input type="hidden" name="return" value="http://127.0.0.1/isw/Main_app/Usuario/gracias.php">
					<?php  
						for ($i=0; $i < count($datos); $i++) { 
					?>
						
						<input type="hidden" name="item_name_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Nombre'];?>">
						<input type="hidden" name="amount_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Precio'];?>">
						<input	type="hidden" name="quantity_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Cantidad'];?>">	
					<?php 
						}
						echo'<center><input type="image" src="../../img/pago1.png" width="200" height="84" name="submit"></center>';
					 ?>
					 
				</form>

					
						
				<?php 
					}	
				 ?>
				</section>
		</article>
	
		<script type="text/javascript" src="../../js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="./js/scripts.js"></script>
		<?php include '../../inc/footerua.php';?>
		<?php include '../../inc/footer_common.php';?>
	</body>
	</html>	