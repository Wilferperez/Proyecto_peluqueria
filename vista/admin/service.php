<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
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
    <div class="bloque4">
        <div class="cuarto_articule">
            <p class="cuarto_titulo">Title Here</p>
            <p class="cuarto_mensaje">Lorem ipsum available but the majority have
                suffered alteration in some form.
            </p>
            <div class="fotos">

                <div class="foto_texto4">

                    <img src="./public/img/veterinaria4.png" alt="how to center an image in css">
                    <h2 class="titulo4">
                        veterinarian
                    </h2>
                    <p class="texto4">
                        Lorem ipsum available but the majority have
                        suffered alteration in some
                    </p>
                </div>
                <div class="foto_texto5">
                    <img src=".public/img/veterinaria5.png" alt="how to center an image in css">
                    <h2 class="titulo5">
                        Vaccination care
                    </h2>
                    <p class="texto5">
                        Lorem ipsum available but the majority have
                        suffered alteration in some
                    </p>
                </div>
                <div class="foto_texto6">
                    <img src="./public/img/veterinaria6.png" alt="how to center an image in css">
                    <h2 class="titulo6">
                        Dental care
                    </h2>
                    <p class="texto6">
                        Lorem ipsum available but the majority have
                        suffered alteration in some
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>