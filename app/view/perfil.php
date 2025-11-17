<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../../public/img/school.svg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=check" />
    <title>Perfil - Academia</title>
</head>
<body>
    <?php include ('layout/header.php');?>
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
<main class="container py-5">
  <div class="text-center">
      <img
          src="../../public/img/foto_perfil.jpg"
          alt="foto de perfil"
          width="256"
          height="256"
          class="rounded-circle"
      />
  <div class="py-5">
    <h1 class="display-5 fw-bold text-body-emphasis">Laura Cristina Pérez Soler</h1>
    <h2 style="color: #696969;">Programación JavaScript y Desarrollo Web.</h2>
  </div>
  </div>
  <div>
      <p class="lead mb-4">
          Nacida: 15/06/1993 – Madrid
      </p>
      <div class="mb-4">
          <h4 class="fw-semibold mb-2">Formación:</h4> 
          <ul class="list-unstyled lead">
              <li class="mb-1">Grado en Ingeniería Informática (Universidad Politécnica de Madrid - UPM)</li>
              <li>Máster en Desarrollo de Aplicaciones Web.</li>
          </ul>
      </div>

      <div class="mb-4">
          <h4 class="fw-semibold mb-2">Trayectoria:</h4>
          <ul class="lead">
              <li>Amplia experiencia en el desarrollo de aplicaciones web escalables utilizando React/Vue.js en el frontend.</li>
              <li>Sólidos conocimientos en la gestión de bases de datos NoSQL (MongoDB) e implementación de APIs RESTful con Node.js/Express.</li>
          </ul>
      </div>
      <div>
          <h4 class="fw-semibold mb-2">Motivación y actividades:</h4>
          <ul class="lead">
              <li>Adopción de nuevas tecnologías y mejora continua de la experiencia de usuario (UX) y rendimiento.</li>
              <li>Compartir conocimiento como mentora en comunidades de desarrollo web y fomentar la programación limpia (Clean Code).</li>
          </ul>
      </div>
  </div>
  <h3 class="fw-bold pt-2 border-bottom">Historial</h3>
  <div
    class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
    
    <div class="list-group">
      <a
        href="curso_python.php"
        class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3"
        aria-current="true"
      >
        <img
          src="../../public/img/check_40.png"
          alt="Iconó de curso visto"
          class="img-fluid"
          style="width: 40px; height: 40px; object-fit: contain;"
        />
        <div class="d-flex gap-2 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">Curso de Python</h6>
            <p class="mb-0 opacity-75">
              Domina fundamentos, estructuras de datos y librerías populares.
            </p>
          </div>
          <small class="opacity-50 text-nowrap">ahora</small>
        </div>
      </a>
      <a
        href="#"
        class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true"
      >
        <img
          src="../../public/img/check_40.png"
          alt="Iconó de curso visto"
          class="img-fluid"
          style="width: 40px; height: 40px; object-fit: contain;"
        />
        <div class="d-flex gap-2 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">Curso de JavaScript</h6>
            <p class="mb-0 opacity-75">
              Solido conocimiento en JavaScript para desarrollo web.
            </p>
          </div>
          <small class="opacity-50 text-nowrap">1 sem</small>
        </div>
      </a>
      <a
        href="#"
        class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true"
      >
        <img
          src="../../public/img/check_40.png"
          alt="Iconó de curso visto"
          class="img-fluid"
          style="width: 40px; height: 40px; object-fit: contain;"
        />
        <div class="d-flex gap-2 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">Curso de Liderazgo</h6>
            <p class="mb-0 opacity-75">
              Desarrolla habilidades de liderazgo efectivas para equipos de tecnología. 
            </p>
          </div>
          <small class="opacity-50 text-nowrap">2 meses</small>
        </div>
      </a>
    </div>
  </div>


  <!-- Título de la sección -->
  <div class="pb-3 mb-4 border-bottom">
    <h2 class="h3 fw-bold">Cursos hechos</h2>
  </div>
  <div class="row">

      <!-- TARJETA 1: CURSO DE PYTHON -->
      <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100 shadow-sm">
              <!-- Cambia 'src' a la ruta de tu imagen de portada -->
              <img src="../../public/img/python.jpg" class="card-img-top" alt="Portada del curso de Python">
              <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Curso Completo de Python desde Cero</h5>
                  <p class="card-text">Aprende los fundamentos de la programación con Python en este curso intensivo de 8 horas, ideal para principiantes.</p>
                  
                  <!-- Botón unificado que lleva a la página de detalle con el ID del curso -->
                  <a href="curso_python.php" class="btn btn-primary mt-auto">Ver Detalles</a>
              </div>
          </div>
      </div>

      <!-- TARJETA 2: CURSO DE BASES DE DATOS -->
      <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100 shadow-sm">
              <img src="../../public/img/mysql.jpg" class="card-img-top" alt="Portada del curso de SQL">
              <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Bases de Datos con SQL y MySQL</h5>
                  <p class="card-text">Domina las consultas y la gestión de bases de datos relacionales para tus proyectos backend.</p>
                  
                  <!-- Observa cómo cambia el ID a "2" -->
                  <a href="evento.php?id=2" class="btn btn-primary mt-auto">Ver Detalles</a>
              </div>
          </div>
      </div>

      <!-- TARJETA 3: CURSO DE REACT -->
      <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100 shadow-sm">
              <img src="../../public/img/react.jpg" class="card-img-top" alt="Portada del curso de React">
              <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Desarrollo Frontend con React</h5>
                  <p class="card-text">Crea interfaces de usuario interactivas y modernas utilizando la librería más popular del mercado.</p>
                  
                  <!-- Observa cómo cambia el ID a "3" -->
                  <a href="evento.php?id=1" class="btn btn-primary mt-auto">Ver Detalles</a>
              </div>
          </div>
      </div>
  </div> <!-- Fin de la fila -->
  </div>
</main>
<?php include ('layout/footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>