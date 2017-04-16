
  <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
   <title>Modifica Administrador</title>
  <?php include '../../inc/head_common.php' ; ?>

 <link rel="stylesheet" href="../../css/mainarticulos.css">
 <link rel="stylesheet" href="../../css/workshops2.css">
 <link rel="stylesheet" href="../../css/style.css">
 
  <title>Agregar Artículo</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
 
</head>
<body>


<?php include '../../inc/headeradmin.php'; ?>
    
    
        <?php 

            include("conexion.php");
            $id = $_REQUEST ['id'];
            $query = "SELECT * FROM login WHERE id='$id' ";
            $resultado = mysql_query($query);
            $row = mysql_fetch_assoc($resultado);
        ?>

    <div id ="workshop-list">
            <article id="w1" class="workshop workshop-left">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8 main-info">
                            <h3 class="highlighted">Módulo Modificar Administrador</h3>
                        </div>
                        <div class="error">
                            <span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
                        </div>
                        <div class="main">
                            <form action="procesomodificaradmin.php?id=<?php echo $row['id']; ?> " method="POST" enctype="multipart/form-data">
                               <label type="text" class="label">Nombre de Usuario</label>
                               <input name="nombrec"  type="text" class="form-control" placeholder="Ingresa tu nombre" value="<?php echo $row['nombreu'];?>"  required />
                               <label type="text" class="label">Contraseña</label>
                               <input name="pass" type="password"  pattern="[A-Za-z0-9_-]{1,15}" class="form-control" required placeholder="Ingresa contraseña" value="<?php echo $row['contrasenau'];?>" required/>
                               <label type="text" class="label">Correo/E-mail</label>
                               <input name="correo" type="text"  class="form-control" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  placeholder="Ingresa tu E-mail o Correo" value="<?php echo $row['correou'];?>" disabled/>
                                <br>
                               <div class="usuario">
                                    <label type="text" class="label">Tipo Usuario</label>
                                    <br>     
                                    <select class="input" name="tipou">
                                    <option>Administrador</option>
                                    </select>

                                </div>
                               <input type="submit" class="button" value="Modificar">
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