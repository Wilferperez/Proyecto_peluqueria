<?php
require "modelo/conexion.php";
class Login
{
    private $_db;
    public function __construct()
    {
        $this->_db = new Conexion();
    }
    public function login($email, $password)
    {

        $this->_db->conectar();
        $r = $this->_db->conexion->prepare("SELECT * FROM usuarios where correo='" . $email . "' AND contraseña='" . $password . "'");
        $r->execute();
        $this->_db->desconectar();
        if ($r->fetch(PDO::FETCH_OBJ))
            return true;
        else
            return false;
    }
}
