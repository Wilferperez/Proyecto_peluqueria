<?php
session_start();
require "./modelo/Login.php";
class LoginController
{
  public function index()
  {
    if (isset($_SESSION['login']))
      header('location:' . urlsite);
    require "vista/front/login.php";
  }
  public function login()
  {
    $_modelo = new Login();
    $_email = trim($_POST['txtemail']);
    $_pass = trim($_POST['txtpassword']);

    $_usuario = $_modelo->login($_email, $_pass);
    if ($_usuario) {
      $_SESSION['login'] = $_email;
      header('location:' . urlsite . "index.php?page=admin");
    } else {
      header('location:' . urlsite . "index.php?msg=No coinciden las creenciales");
    }
  }
  public function logout()
  {
    if (!isset($_SESSION['login']))
      header('location:' . urlsite);
    unset($_SESSION['login']);
    session_destroy();
    header('location:' . urlsite);
  }

  public function guardarUsuario()
  {
    $_modelo = new Login();

    $_cedula = trim($_POST['cedula']);
    $_nombre = trim($_POST['nombre']);
    $_apellido = trim($_POST['apellido']);
    $_correo = trim($_POST['correo']);
    $_celular = trim($_POST['celular']);
    $_clave = trim($_POST['clave']);

    $_usuarioGuardado = $_modelo->registrarUsuario($_cedula, $_nombre . ' ' . $_apellido, $_celular, $_correo, $_clave);
    if ($_usuarioGuardado) {
      header('location:' . urlsite . "index.php?page=admin");
    } else {
      header('location:' . urlsite . "index.php?msg=usuario no guardado");
    }
  }
}
