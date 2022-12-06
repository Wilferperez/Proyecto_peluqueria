<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wilfer Peluqueria Con Estilo </title>
    <link rel="stylesheet" href="./public/css/register.css">
</head>

<body>
    <div class="register-box">
        <img class="avatar" src="public/img/logo.jpg" alt="logo de peluqueria">

        <br><br>
        <fieldset>
            <legend>Registrar Usuario</legend>
            <form action="<?php echo urlsite ?>index.php?page=guardarUsuario" method="post">
                <input type="number" name="cedula" placeholder="Digite su numero cedula" maxlength="15">
                <input type="text" name="nombre" placeholder="Ingrese su nombre">
                <input type="text" name="apellido" placeholder="Digite su apellido">
                <input type="email" name="correo" placeholder="Digite su correo">
                <input type="number" name="celular" placeholder="Digite su telefono" maxlength="10">
                <input type="password" name="clave" placeholder="Digite su contraseña">
        </fieldset><br>
        <input type="submit" value="GUARDAR">
        </form>
    </div>

</body>

</html>