<?php
session_start();
 include ('../models/db.php');    
 $usuario = $_POST['email'];
 $contrasena =$_POST['contrasena'];

$q = "SELECT COUNT(*) as contar FROM usuario WHERE email ='$usuario' AND contrasena ='$contrasena'";

$consulta = mysqli_query($conn,$q);

$array=mysqli_fetch_array($consulta);

if( $array['contar']>0){

    $_SESSION['email']=$email;
    header("location: ../view/dashboard.php");

}else{
    header("location: ../../public/index.php");
}
?>