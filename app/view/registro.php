<?php include 'auth/check_admin.php'; ?>

<?php
include('../models/db.php');

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
      VALUES ('$nombre', '$ap_paterno', '$ap_materno', '$email', '$telefono', '$contrasena')";

  // Preparar la consulta
  if ($conn->query($sql) === TRUE) {
    header('Location: ./registro.php');
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../../../public/img/school.svg">
    <title>Registro - Academia</title>
    <!-- Bootstrap básico -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/style.css">
  </head>

  <body style="background-color: #A8DCD9;">
      <?php include 'layout/header.php'; ?>

    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Formulario de Registro</h2>
          <p class="lead">Completa los datos para registrar.</p>
        </div>

        <div class="row g-5">
          <div class="col-md-6 mx-auto">
            <form id="registerForm" class="needs-validation" action="registro.php" method="POST">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Nombre</label>
                  <input name="nombre" type="text" class="form-control" id="firstName" required>
                  <div class="invalid-feedback">Ingresa nombre.</div>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Apellido paterno</label>
                  <input name="ap_paterno" type="text" class="form-control" id="lastName" required>
                  <div class="invalid-feedback">Ingresa apellido paterno.</div>
                </div>

                <div class="col-12">
                  <label for="middleName" class="form-label">Apellido materno</label>
                  <input name="ap_materno" type="text" class="form-control" id="middleName">
                  <div class="invalid-feedback">Ingresa apellido materno.</div>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Correo electrónico</label>
                  <input name="email" type="email" class="form-control" id="email" required>
                  <div class="invalid-feedback">Ingresa un correo válido.</div>
                </div>

                <div class="col-12">
                  <label for="telefono" class="form-label">Teléfono</label>
                  <input name="telefono" type="tel" class="form-control" id="telefono" required>
                  <div class="invalid-feedback">Ingresa número de teléfono.</div>
                </div>

                <div class="col-12">
                  <label for="contrasena" class="form-label">Contraseña</label>
                  <input name="contrasena" type="password" class="form-control" id="contrasena" required>
                  <div class="invalid-feedback">Ingresa una contraseña.</div>
                </div>
              </div>

              <hr class="my-4">

              <button class="w-100 btn btn-primary btn-lg" type="submit">Registrar</button>
            </form>
          </div>
        </div>
        <br><br>
      </main>
    </div>
      <?php include 'layout/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
