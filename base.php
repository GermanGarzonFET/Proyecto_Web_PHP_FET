  
<?php
include("conectio.php");
if($_POST){
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contraseña'];
    $con=conectar();
    $insertar="INSERT INTO login(usuario,contraseña) VALUES ('$usuario','$contrasena')";
    $query=mysqli_query($con,$insertar);
    header("location:inicio.php");
}
?>