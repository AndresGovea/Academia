<?php
<<<<<<< HEAD
$host = "localhost";
$user = "root";
$pass = "123456";
$db = "academia_meli";
=======
$host = "HOST";
$user = "USER";
$pass = "PASS";
$db = "academia";
>>>>>>> 6a257d57f428af64d48ad6a8470fcadf64a2b656

$conn = new mysqli($host,$user,$pass,$db);

if( $conn ->connect_error ){
    die("Conexion con error". $conn->connect_error);
}
?>