<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Pagos</title>
		<?php include 'inc/head_common.php';?>
	</head>

	<body>
		<?php include 'inc/header.php'; ?>
		<!--detail cambia los estilos workshop w1 cambia todo-->
		<header>
			<!--Cabecera de la pagina repuesto, imagen de menu-->
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
								<h2><b><u> Su Repuesto Ya  </u></b>Asegura su seguriadad
								al realizar pagos en nuestra página</h2>
						</div>
					</div>
				</div>
					<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="tipos-repuestos">
									<h3>Comprar Articulos en MRY</h3>
									<div class="tiprepuestos col">
										<div class="col-xs-4">
								
										</div>
								</section>
							</div>
						</div>
					</div>
		</header>
		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="timaius22-facilitator@gmail.com">
            <input type="hidden" name="item_name" value="Detalle de la Compra">
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="amount" value="20.00">
            <input type="image" src="https://www.paypalobjects.com/webstatic/mktg/merchant_portal/button/buynow.es.png"
                   name="submit"
                   alt="Make payments with PayPal - it's fast, free and secure!">
        </form>					
							
								
		
		<?php include 'inc/footer.php';?>
		<?php include 'inc/footer_common.php';?>
	</body>
	</html>	