<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/color-modes.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/logo.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/registro_curso_vendedores.css">
    <link href="./css/badges.css" rel="stylesheet" />
    <title>Registro</title>
</head>
<body class="roboto-tipografia">
    <?php include ('header.php');?>
    <main>
        <div class="px-4 pt-5 text-center border-bottom">
          <h1 class="display-4 fw-bold text-body-emphasis">
              Curso de Python desde cero
          </h1>
        <div class="col-lg-5 mx-auto">
        <img src="img/curso_python.jpg" class="img-fluid rounded-3 shadow-lg mb-3" alt="Curso de Python">
          <div class="d-flex gap-5 justify-content-center py-3 fs-5">
            <span class="badge text-bg-primary rounded-pill">Python</span>
            <span class="badge text-bg-secondary rounded-pill">Desarrollo Web</span>
            <span class="badge text-bg-success rounded-pill">Automatización</span>
          </div>
        <a href="./perfil.php"><h2 style="padding-top: 10px;"> Miguel Ángel Durán García</h2></a>
          <p class="lead mb-4">
            Aprende Python desde cero con nuestro curso completo. Domina los fundamentos de la programación, 
            estructuras de datos, funciones, programación orientada a objetos y librerías populares como NumPy 
            y Pandas. Ideal para principiantes que desean iniciar su carrera en desarrollo de software y ciencia 
            de datos.
          </p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">
              Inscribirse
            </button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">
              Guardar en favoritos
            </button>
          </div>
        </div>
      </div>
    </main>
    <?php include ('footer.php');?>
    <script src="js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>
</body>
</html>