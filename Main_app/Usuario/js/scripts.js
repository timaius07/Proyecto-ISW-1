//funcion que se encarga de cambiar los totales según la cantidad que ingrese el usuario 
var inicio=function () {
	$(".cantidad").keyup(function(e){
		if($(this).val()!=''){
			if(e.keyCode==13){
				var id=$(this).attr('data-id');
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val();
				$(this).parentsUntil('.producto').find('.subtotal').text('Subtotal: '+(precio*cantidad));
				$.post('./js/modificarDatos.php',{
					Id:id,
					Precio:precio,
					Cantidad:cantidad
				},function(e){
						$("#total").text('Total: '+e);
				});
			}
		}
	});
	//captura el atributo id del producto para eliminarlo
	$(".eliminar").click(function(e){
		e.preventDefault();
		var id=$(this).attr('data-id');
		$(this).parentsUntil('.producto').remove();
		$.post('./js/eliminar.php',{
			Id:id

		},function(a){
			
			if(a=='0'){
				location.href="./carrito.php";
			}
		});
	});
	//se ejecuta la compra por jquery para almacenarla en la BD
	$("#formulario").submit(function(evento){
		//alert("se omitio el evento");
		$.get('./compras/compras.php',function(e){
			alert("Saldra de la Página para realizar el Pago.");
		}).fail(function (){
			evento.preventDefault();	
		});
	});
}	
$(document).on('ready',inicio);