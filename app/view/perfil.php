<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="../public/assets/js/color-modes.js"></script>
    <link rel="icon" type="image/x-icon" href="img/logo.svg">
    <link href="../public/css/heroes.css" rel="stylesheet" />
    <meta name="theme-color" content="#712cf9" />
    <link href="../public/css/list-groups.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=check" />
    <title>Perfil</title>
</head>
<body>
    <?php include ('layout/header.php');?>
<main>
    <div>
        <div class="px-4 py-5 my-5 text-center">
            <img
                src="../../public/img/miguel_angel.jpg"
                alt="foto de perfil"
                width="256"
                height="256"
                class="rounded-circle"
            />
        <h1 class="display-5 fw-bold text-body-emphasis" style="padding-top: 20px;">Miguel Ángel Durán García</h1>
        <h2 style="color: #696969;">Programación JavaScript y Desarrollo Web.</h2>
        <br>
        <div class="col-lg-6 mx-auto">
            <pre class="lead mb-4">
Nacido: 12/02/1985 — Barcelona

Formación:
- Ingeniería Técnica en Informática de Gestión (UOC)

Trayectoria:
- Inició con Locomotive BASIC en un Amstrad CPC 464.
- Amplia experiencia con distintos lenguajes y tecnologías.

Motivación y actividades:
- Aprendizaje continuo: libros, tutoriales, conferencias y talleres.
- Compartir conocimiento y trabajar en entornos que fomenten la evolución.
            </pre>
        </div>
        </div>
    <div>
        <div class='text-center'><h3>Historial</h3></div>
    <div
      class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
      <div class="list-group">
        <a
          href="#"
          class="list-group-item list-group-item-action d-flex gap-3 py-3"
          aria-current="true"
        >
          <img
            src="../../public/img/check_40.png"
            alt="Iconó de visto"
          />
          <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
              <h6 class="mb-0">List group item heading</h6>
              <p class="mb-0 opacity-75">
                Some placeholder content in a paragraph.
              </p>
            </div>
            <small class="opacity-50 text-nowrap">now</small>
          </div>
        </a>
        <a
          href="#"
          class="list-group-item list-group-item-action d-flex gap-3 py-3"
          aria-current="true"
        >
          <img
            src="../../public/img/check_40.png"
            alt="Iconó de visto"
          />
          <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
              <h6 class="mb-0">List group item heading</h6>
              <p class="mb-0 opacity-75">
                Some placeholder content in a paragraph.
              </p>
            </div>
            <small class="opacity-50 text-nowrap">now</small>
          </div>
        </a>
        <a
          href="#"
          class="list-group-item list-group-item-action d-flex gap-3 py-3"
          aria-current="true"
        >
          <img
            src="../../public/img/check_40.png"
            alt="Iconó de visto"
          />
          <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
              <h6 class="mb-0">Third heading</h6>
              <p class="mb-0 opacity-75">
                Some placeholder content in a paragraph.
              </p>
            </div>
            <small class="opacity-50 text-nowrap">1w</small>
          </div>
        </a>
      </div>
    </div>
    </div>
        <div>
    <div class="container py-4">
    <!-- Título de la sección -->
    <div class="pb-3 mb-4 border-bottom">
      <h2 class="h3">Cursos hechos</h2>
    </div>

    <!-- Fila que contendrá todas las tarjetas de los cursos -->
    <div class="row">

        <!-- TARJETA 1: CURSO DE PYTHON -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <!-- Cambia 'src' a la ruta de tu imagen de portada -->
                <img src="../../public/img/curso_python.jpg" class="card-img-top" alt="Portada del curso de Python">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Curso Completo de Python desde Cero</h5>
                    <p class="card-text">Aprende los fundamentos de la programación con Python en este curso intensivo de 8 horas, ideal para principiantes.</p>
                    
                    <!-- Botón unificado que lleva a la página de detalle con el ID del curso -->
                    <a href="evento.php?id=1" class="btn btn-primary mt-auto">Ver Detalles</a>
                </div>
            </div>
        </div>

        <!-- TARJETA 2: CURSO DE BASES DE DATOS -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="../../public/img/curso_bases.jpg" class="card-img-top" alt="Portada del curso de SQL">
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
                <img src="../../public/img/curso_react.jpg" class="card-img-top" alt="Portada del curso de React">
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
</div>
</main>
<?php include ('layout/footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>