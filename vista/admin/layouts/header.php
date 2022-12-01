<!-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="<?php echo urlsite ?>/public/css/bootstrap.min.css">
</head>

</html> -->

<header>
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
    <div class="container">
        <a href="<?php echo urlsite ?>?page=logout">X</a>
    </div>
</header>