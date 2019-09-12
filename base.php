  
<?php
    require 'conectio.php';

    $usuario  = $_POST['usuario'];
    $contrasena  = $_POST['contrasena'];
    echo("$usuario y $contrasena");
   
   $insertar = "INSERT INTO usuarios VALUES ('$usuario','$contrasena') ";
   
   $query = mysqli_query($conectar, $insertar);
   
   if($query){ 
   
      echo "<script> alert('registro correcto');
       location.href = 'inicio.php';
      </script>";
   
   }else{
       echo "<script> alert('registro incorrecto');
       location.href = 'registro.php';
       </script>";
   }
   




?>