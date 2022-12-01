<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
    <div class="bloque3">
        <div class="tercer_articule">
            <p class="tercer_titulo">Title Here</p>
            <p class="tercer_mensaje">Lorem ipsum available but the majority have
                suffered alteration in some form.
            </p>
            <div class="fotos">

                <div class="foto_texto1">

                    <img src="./public/img/veterinaria.png" alt="how to center an image in css">
                    <h2 class="titulo1">
                        veterinarian
                    </h2>
                    <p class="texto1">
                        Lorem ipsum available but the majority have
                        suffered alteration in some
                    </p>
                </div>
                <div class="foto_texto2">
                    <img src="./public/img/veterinaria2.png" alt="how to center an image in css">
                    <h2 class="titulo2">
                        Vaccination care
                    </h2>
                    <p class="texto2">
                        Lorem ipsum available but the majority have
                        suffered alteration in some
                    </p>
                </div>
                <div class="foto_texto3">
                    <img src="./public/img/foto1.jpg" alt="how to center an image in css">
                    <h2 class="titulo3">
                        Dental care
                    </h2>
                    <p class="texto3">
                        Lorem ipsum available but the majority have
                        suffered alteration in some
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>