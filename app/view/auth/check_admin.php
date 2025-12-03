<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../../../public/index.php");
    exit();
}

if ($_SESSION['rol'] !== 'admin') {
    header("Location: ../dashboard.php");
    exit();
}
?>
