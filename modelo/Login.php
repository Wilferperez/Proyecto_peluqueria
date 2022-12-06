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
    // INSERT INTO usuarios (cedula, nombre, celular, correo, contraseña)
    // VALUES ( 123466398, 'pedro', 318586674,'pedro@gmail.com', 'ped1234');
    public function registrarUsuario($cedula, $nombre, $celular, $correo, $contraseña)
    {

        $this->_db->conectar();
        $sql = "INSERT INTO usuarios (cedula, nombre, celular, correo, contraseña) VALUES ( ".$cedula.", '".$nombre. "', ".$celular.",'".$correo. "',  '".$contraseña. "');";
        
        $r = $this->_db->conexion->prepare($sql);
        $r->execute();
        $this->_db->desconectar();
        if ($r->fetch(PDO::FETCH_OBJ))
            return true;
        else
            return false;
    }
}
