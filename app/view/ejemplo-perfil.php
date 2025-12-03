<?php include 'auth/auth.php'; ?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../../public/img/school.svg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=check" />
    <link href="../../public/css/style.css" rel="stylesheet">
    <title>Perfil - Academia</title>
</head>
<body>
<?php include ('layout/header.php');?>
<main class="container py-5">
  <div class="text-center">
      <img
          src="../../public/img/sin_foto.png"
          alt="foto de perfil"
          width="256"
          height="256"
          class="rounded-circle"
      />
  <div class="py-5">
    <h1 class="display-5 fw-bold text-body-emphasis">Nombre de persona</h1>
    <h2 style="color: #696969;"></h2>
  </div>
  </div>
  <div>
        <p class="lead mb-4">No has añadido información personal.</p>
        <a href="dashboard.php" class="btn btn-primary mt-auto mb-4">Añadir Información</a>
  </div>
  <div class="pb-3 mb-4 border-bottom">
    <h2 class="h3 fw-bold">Historial</h2>
  </div>
    <p class="lead mb-4">
        No has visto ningún curso aún.
    </p>
    <a href="dashboard.php" class="btn btn-primary mt-auto mb-4">Explorar Cursos</a>

  <div class="pb-3 mb-4 border-bottom">
    <h2 class="h3 fw-bold">Cursos hechos</h2>
  </div>
    <p class="lead mb-4">
        No has hecho ningún curso aún.
    </p>
    <a href="dashboard.php" class="btn btn-primary mt-auto">Explorar Cursos</a>
</main>
<?php include ('layout/footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>