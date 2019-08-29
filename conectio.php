<?php


 function conectar(){
  $host="localhost";
  $user="root";
  $contrasena="";
  $db="Proyecto_Web_PHP_FET";
  
  $con=mysqli_connect($host,$user,$contrasena) or die ("error".mysql_error());
  mysqli_select_db($con,$db);

  return $con;

 }

?>
