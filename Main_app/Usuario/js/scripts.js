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

		//captura el atributo sucursal para mostrarlo en modal

	$(".modalmapa").click(function(){
		//obtiene el nombre de la sucursal
		var sucursal=$(this).attr('data-sucursal');
		//div de la pagina para mostrar la imagen
		var contenedor = document.getElementById('contenedor');
		//variable imagen que se carga con los mismos datos
		var img=document.createElement('img'); 
		//verificamos que no se hayan guardado los datos 
		//en los ChildNode, de lo contrario hay que eliminarlos
		//ya que almacena todas las imagenes para mostrarlas en el modal
		while (contenedor.firstChild) {
  			contenedor.removeChild(contenedor.firstChild);
		}
		//verificamos que no contenga elementos childappend
		//y le asignamos la imagen al div contenedor
		if (contenedor.childElementCount== 0){
			if (sucursal== "San_José") {
				img.src="./img/sanjose.jpg";
				contenedor.append(img); 
			}else if (sucursal== "San_Carlos"){
				img.setAttribute("src","./img/sancarlos.jpg");
				contenedor.append(img); 
			}else if (sucursal== "Guápiles"){
				img.setAttribute("src","./img/guapiles.jpg");
				contenedor.append(img); 
			}else if (sucursal== "Puntarenas"){
				img.setAttribute("src","./img/puntarelas.jpg");
				contenedor.append(img); 
			}else if (sucursal== "Liberia"){
				img.setAttribute("src","./img/liberia.jpg");
				contenedor.append(img)	
			}
		}
	
	});
}		
$(document).on('ready',inicio);


