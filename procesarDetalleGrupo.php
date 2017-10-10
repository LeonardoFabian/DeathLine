<?php 
    require_once("funciones.php");
   # print_r($_REQUEST);
    if(isset($_REQUEST["mandato"])){
        switch($_REQUEST["mandato"]){
            case "ver_grupo":
            selectGrupoById();
            break;
            #case "agregar_noticia":
            #insertarNoticia();            
           # break;
           # case "eliminar_noticia":
           # eliminarNoticia();            
           # break;
        }

     #    header('location:gruposDetalle.php?id=<?php echo $row["id"];);

    }
    
?>