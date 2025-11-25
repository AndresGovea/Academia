<?php

$host = "HOST";
$user = "USER";
$pass = "PASS";
$db = "academia";

$conn = new mysqli($host,$user,$pass,$db);

if( $conn ->connect_error ){
    die("Conexion con error". $conn->connect_error);
}
?>