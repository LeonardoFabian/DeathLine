<?php 
    require_once("funciones.php");

   $usuario = $_POST['usuario'];
   $clave = $_POST['clave'];

   validarLogin($usuario,$clave);

   
/*
    if(validarLogin($_POST['usuario'],$_POST['clave'])){
        header("tutor_iniciado.php");

    } else {
        echo "Usuario o email inválido";
    }*/
?>