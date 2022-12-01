<?php
require "./config.php";
$page = "index";
if(isset($_GET['page']))
  $page = $_GET['page'];
switch($page){
  case 'login': 
    require "./controlador/LoginController.php";
    $LoginController = new LoginController();
    $LoginController->index();
    //LoginController::index();
    break;
    case 'loginauth':
      require "controlador/LoginController.php";
      $LoginController = new LoginController();
      $LoginController->login();
      //LoginController::login();
      break;
      case 'logout':
        require "controlador/LoginController.php";
        LoginController::logout ();
        break;
        case 'admin':
          require "vista/admin/welcome.php";
          break;
          default : echo "<a href='".urlsite."?page=login'>LOGIN</a>"; break;
        }
        
        ?>
<!--         
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
        <img class="avatar" src="public/img/logo.jpg"   alt="logo de peluqueria">
        <h1>peluqueria</h1>
        <form>
        <!-- USERNAME -->
        <!-- <label for="username">Username</label> -->
        <!-- <input type="text" placeholder="Enter Username"> -->
        
        <!--Password-->
        <!-- <label for="Password">Password</label> -->
        <!-- <input type="Password" placeholder="Enter Password"> -->
        <!-- <input type="password" name="clave" value="" maxlength="10" placeholder="Enter Password" class="redondeando" ><br> -->
        
        <!-- <input type="submit" value="log In"> -->
        
        <!-- <a href="#">Lost your password</a><br> -->
        <!-- <a href="#">Don`t have an account?  </a> -->
        <!-- </form>  -->
        <!-- </div> -->
        
        <!-- </body> -->
        <!-- </html> --> -->