<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../../../public/index.php");
    exit();
}

if ($_SESSION['rol'] !== 'admin') {
    header("Location: ../dashboard.php");
    exit();
}
?>
