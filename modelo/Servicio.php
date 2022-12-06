<?php
require "modelo/conexion.php";
class Servicio
{
    private $_db;
    public function __construct()
    {
        $this->_db = new Conexion();
    }
    
    // INSERT INTO usuarios (cedula, nombre, celular, correo, contraseña)
    // VALUES ( 123466398, 'pedro', 318586674,'pedro@gmail.com', 'ped1234');
    public function registrarServicio($descripcion, $duracion, $precio)
    {

        $this->_db->conectar();
        // INSERT INTO `peluqueria`.`servicios` (`idServicio`, `descripcion`, `duracion`, `precio`) VALUES (3, 'tinte', 30, 20000);

        $sql = "INSERT INTO servicios (descripcion, duracion, precio) VALUES ('".$descripcion."', ".$duracion. ", ".$precio. ");";
        // var_dump($sql);
        $r = $this->_db->conexion->prepare($sql);
        $r->execute();
        $this->_db->desconectar();
        var_dump($r->fetch(PDO::FETCH_PROPS_LATE));
        die();
        if ($r->fetch(PDO::FETCH_NUM))
            return true;
        else
            return false;
    }
}
