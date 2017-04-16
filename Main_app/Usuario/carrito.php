<?php  
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
						$nombre="";
						$precio=0;
						$imagen="";
						$query = "SELECT * FROM articulos WHERE id='$idv' ";
						$re = mysql_query($query);
						while ($f=mysql_fetch_assoc($re)) {
							$nombre=$f['descripcion'];
							$precio=$f['precio'];
							$imagen=$f['imagen'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
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
			$nombre="";
			$precio=0;
			$imagen="";
			$query = "SELECT * FROM articulos WHERE id='$idv'";
			$re=mysql_query($query);
			while ($f=mysql_fetch_assoc($re)) {
				$nombre=$f['descripcion'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
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
						echo '<center><a href="./compras/compras.php"  class="aceptar">Comprar</a></center>;';
						echo '<center><a href="./compras/cotizar.php"  class="aceptar">Cotizar</a></center>;';
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