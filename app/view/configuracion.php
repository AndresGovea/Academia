<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">    <link rel="icon" type="image/x-icon" href="img/logo.svg">
    <title>Configuración - Academia</title>
    <link rel="icon" type="image/x-icon" href="../../public/img/school.svg">
</head>
<body>
<style>
body {
  background-color: #F4F6F5 !important;
}

.form-signin {
  max-width: 330px;
  padding: 2rem;
  background: white;
  border-radius: 12px;
  box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
}

.form-control {
  border-radius: 8px !important;
  border: 1px solid #cfd6d3 !important;
}

.form-control:focus {
  border-color: #60E069 !important;
  box-shadow: 0 0 0 0.2rem rgba(96, 224, 105, 0.25) !important;
}

/* Botón verde personalizado */
.btn-primary {
  background-color: #60E069 !important;
  border-color: #60E069 !important;
  color: #0F1E3D !important;
  font-weight: 600;
  border-radius: 8px;
}

.btn-primary:hover {
  background-color: #4AB655 !important;
  border-color: #4AB655 !important;
  color: white !important;
}

/* Enlaces */
a {
  color: #60E069;
  text-decoration: none;
}

a:hover {
  color: #60E069;
}
</style>
<?php include 'layout/header.php'; ?>
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
<?php include 'layout/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>