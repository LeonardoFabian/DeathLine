<?php 
    require_once("funciones.php");

   $nombre_grupo = $_POST['nombre_grupo'];
   $id = $_POST["id"];
    
   
   crearGrupo($nombre_grupo,$id);

   
/*
    if(validarLogin($_POST['usuario'],$_POST['clave'])){
        header("tutor_iniciado.php");

    } else {
        echo "Usuario o email inválido";
    }*/
?>