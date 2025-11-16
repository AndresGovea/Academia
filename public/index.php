<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Academia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="img/logo.svg">
</head>
 <body class="d-flex align-items-center py-4" style="background-color: #A8DCD9;">
    <main class="form-signin w-100 m-auto">
      <form action="../app/controllers/validarLogin.php" method="POST" >
        <img
          class="mb-4"
          src="img/logo.svg"
          alt=""
          width="72"
          height="57"
        />
        <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>
        <div class="form-floating">
          <input
            type="email"
            class="form-control"
            id="floatingInput"
            placeholder="nombre@ejemplo.com"
            name="email"
          />
          <label for="floatingInput">Correo electrónico</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Contraseña"
            name="password"
          />
          <label for="floatingPassword">Contraseña</label>
        </div>
        <div class="form-check text-start my-3">
          <input
            class="form-check-input"
            type="checkbox"
            value="remember-me"
            id="checkDefault"
          />
          <label class="form-check-label" for="checkDefault">
            Recordar contraseña
          </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">
          Iniciar sesión
        </button>

        <div class="text-center mt-3">
            <a href="../app/view/auth/registro.php">No tengo cuenta</a>
        </div>
        
        <div class="text-center mt-3">
            <a href="#">Olvide mi contraseña</a>
        </div>

        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p>
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>