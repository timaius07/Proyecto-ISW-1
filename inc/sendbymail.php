<?php
	//metodo utilizado para enviar correo electronico al cliente
    //datos del formulario contacto
		$nombre=$_POST['nombrec'];
		$desde=$_POST['emailc'];
		$telefono= $_POST['telefonoc'];
		$mensaje=$_POST['comentarioc'];
		$provincia= $_POST['provincia'];
		

		//datos adicionales al correo
        $fecha=date("d-m-Y");
        $hora=date("H:i:s");      
        $asunto='Información de la Web';
        //Direccion del remitente
        $correo="timaius22@gmail.com";
       $comentario='
        <div style="
	        border: 1px solid #d6d2d2;
	        border-radius: 5px;
	        box-shadow: 5px 5px 10px rgba(57,29,150,0.5);
	        color:#9378f0;
	        padding:10px;
	        width:800px%;
	        heigth:400px;
        ">
        <center>
        <img src="http://www.mirepuestoya.com.ar/content/industry/images/industry.png" width="400" heigth="250">
        <h1><em>Alguien solicita información desde la página Web</em></h1></center>

            <hr width="90%">

            <p>Nombre : '.$nombre.' </p>
            <p>Correo : '.$desde.'</p>
            <p>Provincia : '.$provincia.'</p>
          	<p>Teléfono : '.$telefono.'</p>
			<p>Asunto : '.$mensaje.'</p>
            ';


        //para el envío en formato HTML 
         echo $comentario;
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=utf8\r\n"; 

        //dirección del remitente 
        $headers .= "From: Remitente\r\n"; 
        
        //FUNCION PARA ENVIAR EL EMAIL
        mail($correo,$asunto,$comentario,$headers);
        header("location: ../index.php");
?>