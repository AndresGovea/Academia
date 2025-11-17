<?php
    session_start();
    $email=$_SESSION['email'];

    if(!isset($email)){
        header("location: ../public/index.php");
    }else{
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../public/img/school.svg" desciption="Logo de la Academia">
    <title>Academia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="assets/js/color-modes.js"></script>
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
  color: #0F1E3D;
  text-decoration: none;
}

a:hover {
  color: #60E069;
}
</style>

    <?php include 'layout/header.php'; ?>
<main class="container">
    <div class="container py-4">

    <div class="pb-3 mb-4 border-bottom">
      <h2 class="h3">Explora nuestros eventos recientes</h2>
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
                        <a href="registro_curso_python.php" class="btn btn-primary mt-auto">Ver Detalles</a>
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

            <!-- TARJETA 4: CURSO DE INTELIGENCIA ARTIFICIAL -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="../../public/img/ia.jpg" class="card-img-top" alt="Portada del curso de IA">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Introducción a la Inteligencia Artificial</h5>
                        <p class="card-text">Descubre los conceptos fundamentales del Machine Learning y cómo se aplican en Mercado Libre.</p>
                        
                        <!-- Observa cómo cambia el ID a "4" -->
                        <a href="evento.php?id=4" class="btn btn-primary mt-auto">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!-- TARJETA 5: CURSO DE LIDERAZGO -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="../../public/img/liderazgo.jpg" class="card-img-top" alt="Portada del curso de Liderazgo">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Liderazgo de Equipos Técnicos</h5>
                        <p class="card-text">Desarrolla tus habilidades de gestión y liderazgo para guiar a tu equipo hacia el éxito.</p>
                        
                        <!-- Observa cómo cambia el ID a "5" -->
                        <a href="evento.php?id=5" class="btn btn-primary mt-auto">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!-- TARJETA 6: CURSO DE METODOLOGÍAS ÁGILES -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="../../public/img/agile.jpg" class="card-img-top" alt="Portada del curso de Agile">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Metodologías Ágiles y Scrum</h5>
                        <p class="card-text">Aprende a gestionar proyectos de forma eficiente y a entregar valor de manera continua con Scrum.</p>
                        
                        <!-- Observa cómo cambia el ID a "6" -->
                        <a href="evento.php?id=6" class="btn btn-primary mt-auto">Ver Detalles</a>
                    </div>
                </div>
            </div>

        </div> 
    </div>
</main>
<?php include 'layout/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  function redirigir() {
    // Cambia 'otra_pagina.html' por la URL real a la que quieres ir
    window.location.href = 'registro_curso_vendedores.php';
  }
    </script>
</body>
</html>
<?php
}
?>