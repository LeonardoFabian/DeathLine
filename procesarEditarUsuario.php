<?php 
    require_once("funciones.php");

   $usuario = $_POST['usuario'];
   $id = $_POST["id"];
    
   
   editarUsuario($usuario,$id);

   
/*
    if(validarLogin($_POST['usuario'],$_POST['clave'])){
        header("tutor_iniciado.php");

    } else {
        echo "Usuario o email inválido";
    }*/
?>