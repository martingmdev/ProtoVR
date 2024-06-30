<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Casa 1</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="js/script.js" defer></script>
</head>
<body>
<?php include('navbar.php'); ?>
    <div class="container">
        <h1>Casa 1</h1>
        <div class="vr-viewer">
            <a-scene embedded>
                <a-sky id="vr-image" src="images/casa1/sala.jpg"></a-sky>
            </a-scene>
        </div>
        <div class="nav">
            <button onclick="changeImage('images/casa1/sala.jpg')">Sala</button>
            <button onclick="changeImage('images/casa1/cocina.jpg')">Cocina</button>
            <button onclick="changeImage('images/casa1/habitacion.jpg')">Habitación</button>
            <button onclick="changeImage('images/casa1/baño.jpg')">Baño</button>
        </div>
    </div>
</body>
</html>
