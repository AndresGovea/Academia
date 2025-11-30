<?php
// app/models/acciones_usuarios.php
session_start();
require_once('db.php'); // Al estar en la misma carpeta 'models', solo lo llamamos así.

// --- LÓGICA PARA ACTUALIZAR ---
if (isset($_POST['actualizar'])) {
    $id = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $email = $_POST['email'];
    $rol = $_POST['rol'];

    $sql = "UPDATE usuario SET nombre='$nombre', ap_paterno='$ap_paterno', ap_materno='$ap_materno', email='$email', rol='$rol' WHERE id_usuario='$id'";
    
    if ($conn->query($sql) === TRUE) {
        // Redirigir de vuelta a la vista (subimos un nivel con ../ y entramos a view)
        header("Location: ../view/admin.php"); 
        exit();
    } else {
        // En caso de error, podrías redirigir con un mensaje de error
        header("Location: ../view/admin.php?error=" . urlencode($conn->error));
        exit();
    }
}

?>