<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../../public/img/school.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Registro - Academia</title>
</head>
<body class="roboto-tipografia">
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
  color: #0F1E3D;
  text-decoration: none;
}

a:hover {
  color: #60E069;
}
</style>
    <?php include ('layout/header.php');?>
    <main>
        <div class="mt-4 text-center border-bottom">
          <h1 class="display-4 fw-bold text-body-emphasis mb-5">
              Curso de Python desde cero
          </h1>
        <div class="col-lg-5 mx-auto">
        <img src="../../public/img/python.jpg" class="img-fluid rounded-3 shadow-lg mb-3" alt="Curso de Python">
          <div class="d-flex gap-5 justify-content-center py-3 fs-5">
            <span class="badge text-bg-primary rounded-pill">Python</span>
            <span class="badge text-bg-secondary rounded-pill">Desarrollo Web</span>
            <span class="badge text-bg-success rounded-pill">Automatización</span>
          </div>
        <a href="./perfil.php"><h2 class="py-3">Laura Cristina Pérez Soler</h2></a>
          <p class="lead mb-5">
            Aprende Python desde cero con nuestro curso completo. Domina los fundamentos de la programación, 
            estructuras de datos, funciones, programación orientada a objetos y librerías populares como NumPy 
            y Pandas. Ideal para principiantes que desean iniciar su carrera en desarrollo de software y ciencia 
            de datos.
          </p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <a href="curso_python.php" class="btn btn-primary btn-lg px-4 me-sm-3">Inscribirse</a>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">
              Guardar en favoritos
            </button>
          </div>
        </div>
      </div>
    </main>
    <?php include ('layout/footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>