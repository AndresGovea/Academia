<?php
include('db.php');

$id = $_GET['id_usuario'];
$sql = "DELETE FROM usuario WHERE id_usuario=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../view/admin.php');
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>
