		//captura el atributo sucursal para mostrarlo en modal
	$(".modalmapa").click(function(){
		var sucursal=document.getElementById('suck');
		var boton = document.getElementById('cliksuc');

		boton.addEventListener("click",function(){
			var contenedor = document.getElementById('contenedor');
			var img=document.createElement('img'); 

		if (sucursal.innerText== "San_José") {
			img.src="./img/sanjose.jpg";
			contenedor.appendChild(img); 
		}else if (sucursal.innerText== "San_Carlos"){
			img.setAttribute("src","./img/sancarlos.jpg");
			contenedor.appendChild(img); 
		}else if (sucursal.innerText== "Guápiles"){
			img.setAttribute("src","./img/guapiles.jpg");
				contenedor.appendChild(img); 
		}else if (sucursal.innerText== "Puntarenas"){
			img.setAttribute("src","./img/puntarelas.jpg");
				contenedor.appendChild(img); 
		}else if (sucursal.innerText== "Liberia"){
			img.setAttribute("src","./img/liberia.jpg");
				contenedor.appendChild(img); 
		}	
		},false);
	});	