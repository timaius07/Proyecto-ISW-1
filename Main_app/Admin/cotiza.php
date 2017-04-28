<?php  
	//revisar porque se quiere agregar el codigo del articulo
	session_start();
	include "conexion.php";
	if (isset($_SESSION['cotiza'])){
		
		if(isset($_GET['id'])){
			$idv = $_GET['id'];
					$arreglo=$_SESSION['cotiza'];
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
						$_SESSION['cotiza']=$arreglo;
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
						$_SESSION['cotiza']=$arreglo;

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
			$_SESSION['cotiza']=$arreglo;
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
		<?php include '../../inc/headeradmin.php'; ?>
		<!--detail cambia los estilos workshop w1 cambia todo-->
		
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/registro.css">
		<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   		<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">

		<link rel="stylesheet" href="../../css/producto.css">
		<article id="w1-detail" class="detail">
		<header>
			<!--Cabecera de la pagina repuesto, imagen de menu-->
					<div class="container">
						<div class="col">
							<div class="col-xs-12 main-info">
								<div class="section-content">
								<h1 class="section-header">Su Carrito de Compras <span class="content-header wow fadeIn " data-wow-delay="0.2s" 	data-wow-duration="2s"> Repuestos MRY</span></h1>
								<h3>Revise en el Cátalogo los articulos que desea cotizar.</h3>
							</div>
						</div>
						</div>
					</div>
		</header>
			<br>
				<section id="tipos-repuestos">
					<?php 
					$total=0;
					if (isset($_SESSION['cotiza'])){
						$datos = $_SESSION['cotiza'];
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
						echo '<center><a href="./js/cotizar.php"><input type=image src="../../img/cotizar1.png" width="200" height="84"></a></center>;';

				?>
						<div class="contact-section">
			<div class="container">
				<form action='./js/cotizar.php' method="post">
					<div class="col-md-12 form-line">
			  			<div class="form-group">
			  				<span class="glyphicon glyphicon-user"></span>
			  				<label for="nombre">Nombre del Cliente:</label>
							<input id="user" type="text" name="nombrec" class="form-control" maxlength="50" placeholder="Ingrese el Nombre" />
				  		</div>
				  		<div class="form-group">
				  			<span class="glyphicon glyphicon-envelope"></span>
				  			<label for="mail">Correo/E-mail Cliente</label>
							<input id="mail" name="emailc" type="text" maxlength="80" class="form-control" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Ingrese el Correo" required/>	
 				    	</div>	
			  		</div>
			  		<div class="col-md-6">
			  			<div>
			  				<button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Enviar Cotización</button>
			  				<br>
			  				<br>
			  			</div>
					</div>
				</form>
			</div>	
			</div>
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