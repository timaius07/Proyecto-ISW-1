<?php
  include("../conexion.php"); 
  $ubicacion= $_REQUEST['id'];
  $query="SELECT latitud, longitud FROM sucursales WHERE sucursal ='$ubicacion' ";
  $resultado = mysql_query($query);
  $row = mysql_fetch_assoc($resultado);

  $lat =   $row['latitud'];
  $long =   $row['longitud']; 
  echo "<script language='javascript'>alert('$long');</script>"; 
?>
