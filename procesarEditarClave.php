<?php 
    require_once("funciones.php");

   $clave = $_POST[md5('claveNueva')];
   $id = $_POST["id"];
    
   
   editarClave($clave,$id);

   
/*
    if(validarLogin($_POST['usuario'],$_POST['clave'])){
        header("tutor_iniciado.php");

    } else {
        echo "Usuario o email inválido";
    }*/
?>