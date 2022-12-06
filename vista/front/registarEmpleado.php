<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wilfer Peluqueria Con Estilo </title>
    <link rel="stylesheet" href="./public/css/empleados.css">
</head>

<body>
    <div class="register-box">
        <img class="avatar" src="public/img/logo.jpg" alt="logo de peluqueria">

        <br><br>
        <fieldset>
            <legend>Registrar empleados</legend>
            <form action="<?php echo urlsite ?>index.php?page=guardarEmpleado" method="post">
                <input type="text" name="descripcion" placeholder="Ingrese su nombre">
                <input type="number" name="telefono" placeholder="Digite su numero telefonico">
                <input type="email" name="correo" placeholder="Digite su correo">
                <input type="password" name="clave" placeholder="Digite su contraseña">
        </fieldset><br>
        <input type="submit" value="GUARDAR">
        </form>
    </div>

</body>

</html>