<?php include 'auth/auth.php'; ?>

<?php
require_once('../models/db.php');

if (isset($_POST['actualizar'])) {
    $id = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $rol = $_POST['rol'];

    $sql = "UPDATE usuario SET nombre='$nombre', ap_paterno='$ap_paterno', ap_materno='$ap_materno', email='$email', telefono='$telefono', rol='$rol' WHERE id_usuario='$id'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$id_a_editar = isset($_GET['editar']) ? $_GET['editar'] : null;

$query = "SELECT * FROM usuario";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Administrar - Academia</title>
</head>
<body>
    <?php include ('layout/header.php');?>
    
    <div class="container fluid mt-5">
        <h1>Usuarios</h1>

        <form action="admin.php" method="POST" id="form-edicion"></form>

        <table class="table table-striped table-hover align-middle mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido P.</th>
                    <th>Apellido M.</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                    
                    <?php if ($id_a_editar == $row['id_usuario']) { ?>
                        
                        <tr class="table-warning border border-warning">
                            <td>
                                <?php echo $row['id_usuario']; ?>
                                <!-- Input oculto para saber a quién actualizamos -->
                                <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']; ?>" form="form-edicion">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>" form="form-edicion">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="ap_paterno" value="<?php echo $row['ap_paterno']; ?>" form="form-edicion">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="ap_materno" value="<?php echo $row['ap_materno']; ?>" form="form-edicion">
                            </td>
                            <td>
                                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" form="form-edicion">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="telefono" value="<?php echo $row['telefono']; ?>" form="form-edicion">
                            </td>
                            <td>
                                <select class="form-select" name="rol" form="form-edicion">
                                    <option value="empleado" <?php if($row['rol']=='empleado') echo 'selected'; ?>>empleado</option>
                                    <option value="proveedor" <?php if($row['rol']=='proveedor') echo 'selected'; ?>>Proveedor</option>
                                    <option value="admin" <?php if($row['rol']=='admin') echo 'selected'; ?>>Admin</option>
                                </select>
                            </td>
                            <td>
                                <button type="submit" name="actualizar" class="btn btn-success btn-sm mb-1" form="form-edicion">Guardar</button>
                                <a href="admin.php" class="btn btn-secondary btn-sm">Cancelar</a>
                            </td>
                        </tr>

                    <?php } else { ?>
                        <tr>
                            <td><?php echo $row['id_usuario']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['ap_paterno']; ?></td>
                            <td><?php echo $row['ap_materno']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td>
                                <span class="badge <?php echo ($row['rol']=='admin') ? 'text-bg-danger' : 'text-bg-primary'; ?>">
                                    <?php echo $row['rol']; ?>
                                </span>
                            </td>
                            <td>
                                <a href="admin.php?editar=<?php echo $row['id_usuario']; ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="../models/delete.php?id_usuario=<?php echo $row['id_usuario']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <br><br><br><br><br><br><br>
    <?php include ('layout/footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>