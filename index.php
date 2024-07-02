<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recorridos Virtuales</title>
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
                <img src="images/modela.jpg" class="slider-image" alt="Model A">
                <img src="images/modelb.jpg" class="slider-image" alt="Model B">
                <img src="images/modelc.jpg" class="slider-image" alt="Model C">
                <img src="images/modeld.jpg" class="slider-image" alt="Model D">
                <div class="slider-text">
                    <h1 id="slider-text">R E S I D E N C I A L</h1>
                </div>
            </div>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/modela.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>R E S I D E N C I A L</h5>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/modelb.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>R E S I D E N C I A L</h5>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/modelc.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>R E S I D E N C I A L</h5>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <h1>Modelos</h1>
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
