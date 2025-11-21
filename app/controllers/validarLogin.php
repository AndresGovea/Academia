<?php
session_start();
 include ('../models/db.php');    
<<<<<<< HEAD
 $usuario = $_POST['email'];
 $contrasena =$_POST['contrasena'];
=======
 $email = $_POST['email'];
 $contrasena =$_POST['password'];
>>>>>>> 6a257d57f428af64d48ad6a8470fcadf64a2b656

$q = "SELECT COUNT(*) as contar FROM usuario WHERE email ='$email' AND contrasena ='$contrasena'";

$consulta = mysqli_query($conn,$q);

$array=mysqli_fetch_array($consulta);

if( $array['contar']>0){

    $_SESSION['email']=$email;
    header("location: ../view/dashboard.php");

}else{
    header("location: ../../public/index.php");
}
?>