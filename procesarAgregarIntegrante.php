<?php 

    require_once("funciones.php");

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $id_grupo = $_POST['id_grupo'];
        $codigo = $_POST['codigo']; 

    agregarIntegrante($nombre,$apellido,$correo,$id_grupo,$codigo);

?>