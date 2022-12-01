<?php
session_start();
require "./modelo/Login.php";
class LoginController{
  public function index(){
    if(isset($_SESSION['login']))
      header('location:'.urlsite);
    require "vista/front/formlogin.php";
  }
  public function login(){
    echo $_POST;
    var_dump($_POST);
    $_modelo = new Login();
    $_email = trim($_POST['txtemail']);
    $_pass = md5(trim($_POST['txtpassword']));
    echo $_email;
    echo $_pass;
    $_usuario = $_modelo->login($_emai,$_pass);
    echo $_usuario;
    var_dump($_usuario);
    var_export($_usuario);
    if($_usuario){
      $_SESSION['login'] = $email;
      header('location:'.urlsite. "index.php?page=admin");
    }else{
      header('location:'.urlsite."index.php?msg=No coinciden las creenciales");
    }
    
  }
  public function logout(){
    if(!isset($_SESSION['login']))
    header('location:'.urlsite);
    unset($_SESSION['login']);
    session_destroy();
    header('location:'.urlsite);
  }
}