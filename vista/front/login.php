<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wilfer Peluqueria Con Estilo </title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
    <div class="login-box">
        <img class="avatar" src="public/img/logo.jpg" alt="logo de peluqueria">
        <h1>Peluqueria</h1>
        <form action="<?php echo urlsite ?>index.php?page=loginauth" method="post">
            <!--USERNAME-->
            <!-- <label for="username">Username</label>
            <input type="text" placeholder="Enter Username"> -->

            <!--Password-->
            <!-- <label for="Password">Password</label>
            <input type="Password" placeholder="Enter Password"> -->
            <!-- <input type="password" name="clave" value="" maxlength="10" placeholder="Enter Password" class="redondeando" ><br> -->

            <div class="form-group">
                <input type="email" class="form-control" name="txtemail" placeholder="correo">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="txtpassword" placeholder="contraseña">
            </div>


            <input type="submit" value="LOGIN">
            <!-- <a href=''>LOGIN</a> -->


            <a href="#">Recuperar contraseña</a><br>
            <a href="index.php?page=register">Registrarse </a>
        </form>
    </div>

</body>

</html>