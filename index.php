<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Residencial</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <?php include('navbar.php'); ?>
    <div class="mastercont">
        <div class="image-slider">
            <div class="image-slider-content">
                <img src="images/imgrefa.png" class="slider-image" alt="Model A">
                <img src="images/modelb.jpg" class="slider-image" alt="Model B">
                <img src="images/modelc.jpg" class="slider-image" alt="Model C">
                <img src="images/imgrefb.jpg" class="slider-image" alt="Model D">
                <div class="carousel-caption d-none d-md-block">
                    <img src="images/bonsai-horizontal-w.png" alt="" width="auto" height="100px">
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="titles">Bienvenido a residencial Bonsái</h1>
            <div class="gallery">
                <a href="casa1.php">
                    <img src="images/casa1/thumbnail.jpg" alt="Casa 1">
                    <p>Model 1</p>
                </a>
                <a href="casa2.php">
                    <img src="images/casa2/thumbnail.jpg" alt="Casa 2">
                    <p>Model 2</p>
                </a>
                <a href="casa3.php">
                    <img src="images/casa3/thumbnail.jpg" alt="Casa 3">
                    <p>Model 3</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
