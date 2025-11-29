<?php
session_start();
include('../models/db.php');

$email = $_POST['email'];
$password = $_POST['password'];

$q = "SELECT * FROM usuario WHERE email ='$email' AND contrasena ='$password'";

$consulta = mysqli_query($conn, $q);

if (mysqli_num_rows($consulta) > 0) {
    
    $datos_usuario = mysqli_fetch_array($consulta);
    $_SESSION['email'] = $email;
    
    $_SESSION['rol'] = $datos_usuario['rol']; 

    header("location: ../view/dashboard.php");

} else {
    header("location: ../../public/index.php");
}
?>