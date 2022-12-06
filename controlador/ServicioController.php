<?php
require "./modelo/Servicio.php";
class ServicioController
{
    public function guardarServicio()
    {
        $_modelo = new Servicio();


        $_descripcion = trim($_POST['descripcion']);
        $_duracion = trim($_POST['duracion']);
        $_precio = trim($_POST['precio']);


        $_servicioGuardado = $_modelo->registrarServicio($_descripcion, $_duracion, $_precio);

        if ($_servicioGuardado) {
            header('location:' . urlsite . "index.php?page=admin");
        } else {
            header('location:' . urlsite . "index.php?msg=servicio no guardado");
        }
    }
}
