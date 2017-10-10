<?php 

    require_once("funciones.php");

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

    registrar($nombre,$apellido,$correo,$usuario,$clave);

?>