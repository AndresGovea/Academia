<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar sesión - Academia</title>
    <link rel="icon" type="image/x-icon" href="../../public/img/school.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php include 'layout/header.php'; ?>
    <main class="container py-5">
        <div class="alert alert-info text-center" role="alert">
            <h4 class="alert-heading">Has cerrado sesión correctamente.</h4>
            <p>Gracias por visitarnos. ¡Hasta pronto!</p>
            <hr>
            <a href="../../../public/index.php" class="btn btn-primary mt-3">Volver a la página de inicio</a>
        </div>
    </main>
    <?php include 'layout/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>