<?php
$host = "localhost";
$user = "root";
$pass = "123456";
$db = "academia_meli";

$conn = new mysqli($host,$user,$pass,$db);

if( $conn ->connect_error ){
    die("Conexion con error". $conn->connect_error);
}
?>