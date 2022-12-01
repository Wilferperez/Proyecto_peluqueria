<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel="stylesheet" href="./public/css/welcome.css">
</head>

<body>
    <!-- <header>
        <div class="logo">
            <img src="./public/img/logo.png" alt="logo de veterinaria">
            <h2 class="nombre empresa"></h2>

        </div>
        <nav>
            <ul class="menu">
                <li><a href="index.php?page=admin">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=service">Service</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
        <div class="buscador">
            <input type="text" placeholder="search.." required>
            <button class="button"></button>
        </div>
    </header> -->
    <?php
    require "./vista/admin/layouts/header.php"
    ?>
    <div class="bloque2">
        <div class="segundo_articule">
            <p class="segundo_titulo">As a veterinarian and lover of animals.</p>
            <p class="segundo_mensaje">Lorem ipsum available but the majority have
                suffered alteration in some form, by injected
                humour randomised words.
            </p>
            <div class="boton">
                <button class="segundo_service">Our Service</button>
            </div>

        </div>
        <div class="video">
            <video src="./public/videos/video_perro.mp4" preload="metadata" width="500" height="500" controls></video>
        </div>
    </div>
</body>

</html>