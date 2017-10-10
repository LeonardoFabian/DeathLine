<?php require_once("funciones.php"); 
    
        $con = conexion();
        $Query = "
        select g.*,t.id,concat(t.nombre,' ',t.apellido),t.correo,t.usuario
        from grupo as g inner join tutor as t
        on g.id_tutor = '".$_SESSION["id"]."'
        and t.usuario = '".$_SESSION["usuario"]."'
        ";
    
        $result = mysqli_query($con,$Query);

        if(!$result){ die("Error en la consulta a la Base de Datos: " . mysqli_error($result)); }
        
        $myData = array();
           # print_r($result);

        while($row = @mysqli_fetch_row($result)) {
            $myData[] = $row;
            echo "<pre>";
            print_r($myData);
            echo "</pre>";
            #return $datosGrupo; 
        }

    echo "<pre>";
    echo json_encode(array("results" => $myData)) . "<br/>";
    
     echo "</pre>";
    $result->close();
    $con->close();
    #mostrarGrupos();
    

?>