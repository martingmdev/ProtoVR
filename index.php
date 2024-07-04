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
    <?php include('slider.php');?>
        <div class="container border">
            <h1>Residencial Bonsái</h1>
            <div class="highlight">
                <p>Descubre la serenidad en Residencial Bonsái, tu oasis urbano en el corazón de la ciudad.</p>
            </div>
            
            <h2>Características destacadas</h2>
            <div class="features">
                <ul>
                    <li><strong>Ubicación privilegiada:</strong> Situado en un área exclusiva, cerca de parques, centros comerciales y vías principales.</li>
                    <li><strong>Diseño sofisticado:</strong> Arquitectura contemporánea con detalles que reflejan la elegancia y el estilo.</li>
                    <li><strong>Amenidades de lujo:</strong> Piscina, gimnasio completamente equipado, áreas verdes y zonas de recreación para toda la familia.</li>
                    <li><strong>Seguridad y privacidad:</strong> Acceso controlado y vigilancia las 24 horas para tu tranquilidad.</li>
                </ul>
            </div>

            <div class="cta">
                <a href="#">Visítanos hoy mismo y descubre por qué nuestro residencial es el lugar ideal para ti y tu familia</a>
            </div>

            <?php include('modelosmod.php');?>
        </div>
        <?php include('footer.php'); ?>
</body>
</html>
