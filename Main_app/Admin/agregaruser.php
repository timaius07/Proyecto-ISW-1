  <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Mantenimiento Articulos</title>
  <?php include '../../inc/head_common.php' ; ?>
        <link rel="stylesheet" href="../../css/mainarticulos.css">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/workshops2.css">
        <link rel="stylesheet" href="../../css/registro.css">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
 
  <title>Agregar Usuario</title>
</head>
<?php include '../../inc/headeradmin.php'; ?>
    <div id ="workshop-list">
            <article id="w1" class="workshop workshop-left">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 main-info">
                            <div class="section-content">
                             <h1 class="section-header">Módulo Nuevo Usuario<span class="content-header wow fadeIn " data-wow-delay="0.2s"    data-wow-duration="2s"> Repuestos MRY</span></h1>
                            </div>
                        </div>
                        <div class="error">
                            <span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
                        </div>
                        <div class="main">
                            <form action='procesoagregaadmin.php' id="formlg" method="POST" enctype="multipart/form-data">
                            <div class="sign-up-htm">
                                <div class="group">
                                    <span class="glyphicon glyphicon-user"></span>
                                    <label type="text" class="label">Nombre de Usuario</label>
                                    <input id="user" type="text" name="nombrec" class="input" placeholder="Ingresa tu nombre" required />
                                </div>
                                <div class="group">
                                    <span class="glyphicon glyphicon-lock"></span>
                                    <label type="text" class="label">Contraseña</label>
                                    <input id="pass" type="password" name="pass" pattern="[A-Za-z0-9_-]{1,15}" class="input" required placeholder="Ingresa contraseña" required/>
                                </div>
                                <div class="group">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                    <label type="text" class="label">Correo/E-mail</label>
                                    <input id="mail" type="text" name="correo" class="input" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  required placeholder="Ingresa tu E-mail o Correo" required/>
                                </div>
                                <br>
                                <div class="group">
                                    <span class="glyphicon glyphicon-question-sign"></span>
                                    <label type="text" class="label">Tipo Usuario</label>
                                    <br>
                                    <select class="input" name="tipou">
                                    <option>Cliente</option>
                                    </select>
                                </div>
                                <br>
                                <div class="group">
                                    <input type="submit" class="button"  value="Registrar">
                                </div>
                
                            </div>
                            </form>
                        </div>      
                    </div>
                </div>
            </article>
    </div>
  <?php include '../../inc/footerua.php';?>
  <?php include '../../inc/footer_common.php';?>
</body>
</html>