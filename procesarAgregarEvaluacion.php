<?php 

    require_once("funciones.php");

        $titulo = $_POST['titulo'];
        $idgrupo= $_POST['id_grupo'];
        $idtutor = $_SESSION['id'];
        $fechalimite = $_POST['fecha_limite'];
        $cronometro = $_POST['cronometro']; 

    agregarEvaluacion($idgrupo,$idtutor,$titulo,$fechalimite,$cronometro);

?>