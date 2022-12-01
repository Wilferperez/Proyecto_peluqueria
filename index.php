<?php
require "./config.php";
$page = "index";
if (isset($_GET['page']))
  $page = $_GET['page'];
switch ($page) {
  case 'login':
    require "./controlador/LoginController.php";
    $LoginController = new LoginController();
    $LoginController->index();
    // LoginController::index();
    break;
  case 'loginauth':
    require "controlador/LoginController.php";
    $LoginController = new LoginController();
    $LoginController->login();
    // LoginController::login();
    break;
  case 'logout':
    require "controlador/LoginController.php";
    $LoginController = new LoginController();
    $LoginController->logout();
    // LoginController::logout();
    break;
  case 'admin':
    require "vista/admin/welcome.php";
    break;
  default:
    // echo "<a href='" . urlsite . "?page=login'>LOGIN</a>";
    require "vista/front/login.php";
    break;

  case 'about':
    require "vista/admin/about.php";
    break;

  case 'service':
    require "vista/admin/service.php";
    break;

  case 'contact':
    require "vista/admin/contact.php";
    break;
}
