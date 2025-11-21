<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/color-modes.js"></script>
    <link rel="icon" type="image/x-icon" href="img/logo.svg">
    <title>Document</title>
</head>
<body>
    <?php include ('header.php');?>
    <main>
        <div>
                    <div class="container"> <!-- O cualquier otro contenedor principal -->
        <div class="row justify-content-center"> <!-- justify-content-center para centrar la columna -->
            <div class="col-md-8"> <!-- La columna controla el ancho. "6" es la mitad de 12 -->
            <!-- TU CÓDIGO DEL VIDEO VA AQUÍ DENTRO -->
            <div class="ratio ratio-16x9">
                <iframe 
                src="https://www.youtube.com/embed/TkN2i-_4N4g?si=y-26jEhVvVFZBUmY" 
                title="YouTube video player" 
                allowfullscreen>
                </iframe>
            </div>
            <div>
            <h1>Curso de python</h1>
        </div>
            </div>
        </div>
        </div>
        </div>
    </main>
    <?php include ('footer.php');?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>