<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/color-modes.js"></script>
    <link rel="icon" type="image/x-icon" href="img/logo.svg">
    <title>Configuración</title>
</head>
<body>
    <?php
    include 'header.php';
    ?>
<main>
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Configuración</h2>
          <p class="lead">Cambia el valor del(os) campo(s) que quieras modificar.</p>
        </div>

        <div class="row g-5">
          <div class="col-md-6 mx-auto">
            <form id="registerForm" class="needs-validation" novalidate action="register.php" method="post">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Nombre</label>
                  <input name="first_name" type="text" class="form-control" id="firstName">
                  <div class="invalid-feedback">Ingresa tu nombre.</div>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Apellido paterno</label>
                  <input name="last_name" type="text" class="form-control" id="lastName">
                  <div class="invalid-feedback">Ingresa tu apellido paterno.</div>
                </div>

                <div class="col-12">
                  <label for="middleName" class="form-label">Apellido materno</label>
                  <input name="middle_name" type="text" class="form-control" id="middleName">
                  <div class="invalid-feedback">Ingresa tu apellido materno.</div>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Correo electrónico</label>
                  <input name="email" type="email" class="form-control" id="email">
                  <div class="invalid-feedback">Ingresa un correo válido.</div>
                </div>

                <div class="col-12">
                  <label for="phone" class="form-label">Teléfono</label>
                  <input name="phone" type="tel" class="form-control" id="phone">
                  <div class="invalid-feedback">Ingresa tu número de teléfono.</div>
                </div>

                <div class="col-12">
                  <label for="password" class="form-label">Contraseña</label>
                  <input name="password" type="password" class="form-control" id="password">
                  <div class="invalid-feedback">Ingresa una contraseña.</div>
                </div>
              </div>

              <hr class="my-4">
              <button id="submitBtn" class="w-100 btn btn-primary btn-lg" type="submit">Cambiar</button>
              </div>
            </form>
          </div>
        </div>
        <br><br>
      </main>
    </div>
</main>
    <?php
    include 'footer.php';
    ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>