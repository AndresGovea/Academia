<?php
session_start();
 include ('../models/db.php');    

 $email = $_POST['email'];
 $password =$_POST['password'];

$q = "SELECT COUNT(*) as contar FROM usuario WHERE email ='$email' AND contrasena ='$password'";

$consulta = mysqli_query($conn,$q);

$array=mysqli_fetch_array($consulta);

if( $array['contar']>0){

    $_SESSION['email']=$email;
    header("location: ../view/dashboard.php");

}else{
    header("location: ../../public/index.php");
}
?>