<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wilfer Peluqueria Con Estilo </title>
    <link rel="stylesheet" href="./public/css/servicio.css">
</head>

<body>
    <div class="register-box">
        <img class="avatar" src="public/img/logo.jpg" alt="logo de peluqueria">

        <br><br>
        <fieldset>
            <legend>Registrar Servicio</legend>
            <form action="<?php echo urlsite ?>index.php?page=guardarServicio" method="post">
                <input type="text" name="descripcion" placeholder="Ingrese su nombre">
                <input type="number" name="duracion" placeholder="Digite tiempo de servicio">
                <input type="number" name="precio" placeholder="Digite valor del servicio" >
        </fieldset><br>
        <input type="submit" value="GUARDAR">
        </form>
    </div>

</body>

</html>