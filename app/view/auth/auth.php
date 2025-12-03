<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("location: ../../../public/index.php");
    exit(); 
}
?>
