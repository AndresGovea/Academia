<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar cada campo en su propia variable
    $nombre     = $_POST['nombre'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $email      = $_POST['email'];
    $telefono   = $_POST['telefono'];
    $contrasena = $_POST['contrasena'];

    // Preparar la sentencia SQL con placeholders
    $sql = "INSERT INTO usuario (nombre, ap_paterno, ap_materno, email, telefono, contrasena) 
            VALUES (?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    if ($stmt = $conn->prepare($sql)) {
        // Vincular parámetros (s = string)
        $stmt->bind_param("ssssss", $nombre, $ap_paterno, $ap_materno, $email, $telefono, $contrasena);

        // Ejecutar
        if ($stmt->execute()) {
            // Redirigir si todo salió bien
            header('Location: ./registro.php');
            exit();
        } else {
            echo "Error al registrar: " . $stmt->error;
        }

        // Cerrar statement
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
}
?>
