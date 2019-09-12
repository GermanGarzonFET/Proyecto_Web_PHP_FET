<?php


require 'conectio.php';

$usuario  = $_POST['usuario'];
$contrasena  = $_POST['contrasena'];

$consultar="SELECT * FROM  usuarios WHERE usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conectar,$consultar);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
    echo "<script> alert('secion iniciada');
    location.href = 'inicio.php';
   </script>";
} else {
   echo "<script> alert('contraseña o usuario incorrecto');
    location.href = 'login.php';
    </script>";
}


?>