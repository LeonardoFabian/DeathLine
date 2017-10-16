<?php 
    session_start();
    require_once('config.php');

    function conexion() {
        $con = mysqli_connect(DDBB_HOST, DDBB_USER, DDBB_PWD, DDBB);

        if($con) {
            #echo "conectado";
            return $con;
        }else {
            die("Error : " . $con->error);
        }
    }

    function registrar($nombre,$apellido,$correo,$usuario,$clave) {
        $con = conexion();
        $Query = "
        INSERT INTO tutor(nombre,apellido,correo,usuario,clave)
        VALUES (
        '".$nombre."','".$apellido."','".$correo."','".$usuario."','".$clave."'
        )";

        $result = mysqli_query($con,$Query);

        if($result) {
            header("location:bienvenido.php");
        }else {
            die(mysqli_error($con));
        }

    }

    function validarLogin($usuario,$clave){
        $con = conexion();
        $Query = "
        SELECT * FROM tutor 
        WHERE usuario = '".$usuario."' AND clave = '".$clave."' ";

        $resultLogin = mysqli_query($con,$Query);

        if($resultLogin) {       

            #echo $resultLogin->num_rows;               
            
            if($datosTutor = $resultLogin->fetch_assoc()) {
                
                $_SESSION["id"] = $datosTutor["id"];
                $_SESSION["nombre"] = $datosTutor["nombre"];
                $_SESSION["apellido"] = $datosTutor["apellido"];
                $_SESSION["correo"] = $datosTutor["correo"];
                $_SESSION["usuario"] = $datosTutor["usuario"];

               # return $datosTutor;
                header("location:tutor_iniciado.php");
            }else{
                die("Error ");
            }
        }else{
            echo "<script type='text/javascript'> alert('Usuario o contraseña incorrecto'); </script>";
        }        
       
    }


        function obtenerDatos(){
        $con = conexion();
        $Query = "
        select * from tutor
        where id = '".$_SESSION["id"]."'
        ";
    
        $result = mysqli_query($con,$Query);

        #print_r($result);

        if($datosTutor = $result->fetch_assoc()) {
           # echo '<pre>';
           # print_r($datosTutor);
           #echo '</pre>';
            return $datosTutor; 
        }
    }

   
        function editarUsuario($usuario,$id) {
        $con = conexion();       
        $Query = "
        update tutor
        set
        usuario = '".$usuario."'
        where
        id = '".$id."'
        ";

        $result = mysqli_query($con,$Query);
        if($result) {

            #print_r($result);
            
           header("location:tutor_iniciado.php");
        }
    }

       function editarClave($clave,$id) {
        $con = conexion();       
        $Query = "
        update tutor
        set
        clave = '".$clave."'
        where
        id = '".$id."'
        ";

        $result = mysqli_query($con,$Query);
        if($result) {

            print_r($result);
            
           header("location:tutor_iniciado.php");
        }
    }


    function crearGrupo($nombre_grupo,$id){
        $con = conexion();
        $Query = " 
        insert into grupo
        (nombre_grupo,id_tutor)
        values (
        '".$nombre_grupo."','".$id."'
        )";

         $result = mysqli_query($con,$Query);
         #      echo '<pre>';
          # print_r($result);
         #  echo '</pre>';

        if($result) {
            header("location:grupos.php");
        }else {
            die(mysqli_error($con));
        }
    }


    function mostrarGrupos(){
        $con = conexion();
       /*  $Query = "
        select count(g.id),g.nombre_grupo AS 'Nombre del grupo',t.correo,t.usuario, count(i.id) as Integrantes
        from (grupo as g 
        inner join tutor as t on g.id_tutor = '".$_SESSION["id"]."'
        and t.usuario = '".$_SESSION["usuario"]."'),
        integrantes as i
        inner join grupo on i.id_grupo = grupo.id
        group by g.id
        ";*/ 

        $Query = "
        select id, nombre_grupo as Grupo, id_tutor as Tutor
        from grupo 
		where id_tutor = '".$_SESSION["id"]."'      
        
        ";
       # and g.id
       # '".$_SESSION["id"]."'
		# = i.id_grupo
      #  group by g.id
       # ";
    
        $result = mysqli_query($con,$Query);

        if($result){

            echo "<table class='datatable' ><thead><tr>";
                $row = mysqli_fetch_fields($result);
                foreach($row as $field)
                {
                    echo "<th class='table-header'>".$field->name."</th>";
                }
                echo "</tr></thead><tbody>";
                for ($i=0;$i < @mysqli_num_rows($result);$i++)
                {
                    echo "<tr class='filas'>";
                    $row = @mysqli_fetch_row($result);
                    foreach($row as $value)
                    {
                        echo "<td class='celdas'>".$value."</td>";
                        
                       
                    }
                   echo "<td><a class='interno' href='procesarDetalleGrupo.php?id=".$row[0]."&mandato=ver_grupo'>Ver grupo</a></td>";
                    echo "</tr>" ;
                    
                    
                }
                
                echo "</tbody></table>";
                
        
       # $myData = array();
          # print_r($result);

       # while($row = @mysqli_fetch_assoc($result)) {
          #  $myData[] = $row;
            #return $datosGrupo; 
        }

        }
   #S echo json_encode(array("results" => $myData));
    #$result->close();
   # $con->close();
    #mostrarGrupos();
    


function countEstudiantesPorGrupo(){
        $con = conexion();    

        $Query = "
        select g.id,g.nombre_grupo AS 'Nombre del grupo',count(g.id) as Integrantes
        from grupo as g, integrantes as i
		where g.id = i.id_grupo
        and g.id_tutor = '".$_SESSION["id"]."'
        group by g.id       
        
        ";
    
        $result = mysqli_query($con,$Query);

        if($result){

            echo "<table class='datatable' ><thead><tr>";
                $row = mysqli_fetch_fields($result);
                foreach($row as $field)
                {
                    echo "<th class='table-header'>".$field->name."</th>";
                }
                echo "</tr></thead><tbody>";
                for ($i=0;$i < @mysqli_num_rows($result);$i++)
                {
                    echo "<tr class='filas'>";
                    $row = @mysqli_fetch_row($result);
                    foreach($row as $value)
                    {
                        echo "<td class='celdas'>".$value."</td>";
         
                       
} ?>
                    <?php echo "<td><a class='interno' href='procesarDetalleGrupo.php?id="?><?php echo $row[0];?><?php echo "&mandato=ver_grupo'>Ver grupo</a></td>";
                    echo "</tr>" ;
                    
                    
                }
                
                echo "</tbody></table>";                
              
            }
        #echo '<pre>';
        # print_r($value);
        # echo '</pre>';
        }


function selectGrupoById() {
    $con = conexion();
   $datos = obtenerDatos();
    $Query = " 
    select concat(i.nombre,' ',i.apellido) as 'Nombre del integrante', i.codigo as 'Código de acceso', g.nombre_grupo, i.id
    from grupo as g, integrantes as i
    where i.id_grupo = '".$_REQUEST['id']."' 
    and g.id = '".$_REQUEST['id']."' 
    ";
    $result = mysqli_query($con,$Query);
    $n=0;
    $filas=mysqli_num_rows($result);

        if($result){
            if($filas>0){
           
            echo "<table class='datatable' ><thead><tr>";
                $row = mysqli_fetch_fields($result);
                       
                {
                    echo "<th class='table-header' style='font-size:12px;color:grey;'>".$row[0]->name."</th><th class='table-header' style='font-size:12px;color:grey;'>".$row[1]->name."</th>";
                }
                echo "</tr></thead><tbody>";
                for ($i=0;$i < @mysqli_num_rows($result);$i++)
                {
                    $n++;
                    echo "<tr class='filas'>";
                    $row = @mysqli_fetch_array($result);
                  #  foreach($row as $value)
                    {
                        echo "<td class='celdas' style='padding:2px 150px;'>".$row[0]."</td><td class='celdas'>".$row[1]."</td>";
                       
                    }


                    echo "<td><span><a href='perfilintegrante.php?id="?><?php echo $row[3];?><?php echo "'>Informacion</a><span></td>";
                    echo "</tr>" ;
                }
                echo "<pre>";
                
                echo "<span>Grupo</span><br/>";
                echo "<span class='grande negrita oscuro'>";
                print_r($row[2]);
                echo "</span>";
                echo "<br/><br/>";

                 echo "</pre>";
                    
                
                
                echo "</tbody></table>";  
}
                else {


                    echo "<span>Agregue un integrante a este grupo</span>";
                    
                }    

                echo "<div style='width:67%;'>";
                    echo "<div style='width:50%;float:left;text-align:left;'>";
                        echo "<span style='font-size:12px;color:grey;'>Integrantes:&nbsp;&nbsp; </span>";          
                        print_r($n);
                    echo "</div>";
                    echo "<div style='width:50%;float:right;text-align:right;'>";
                        echo "<a href='crearIntegrante.php' class='interno' style='font-size:12px;color:grey;'><span>Añadir nuevo integrante</span></a>";           
                    echo "</div>";
                echo "</div>";
                echo "<div id='sub-content'>";
                }

            
           
            return $result;
        }



function groupName() {
    $con = conexion();
   
    $Query = " 
    select g.nombre_grupo, i.id_grupo
    from grupo as g, integrantes as i
    where i.id_grupo = '".$_REQUEST['id']."' 
    and g.id = '".$_REQUEST['id']."' 
    ";
    $result = mysqli_query($con,$Query);

        if($result){
           $group = $result->fetch_assoc() ;
           echo '<pre>';
           print_r($group);
           echo '</pre>';
           
            
            die(mysqli_error($con));
        }
                                  
            return $group;
        }


function generarCodigo($longitud, $tipo=0)
{
    //creamos la variable codigo
    $codigo = "";
    //caracteres a ser utilizados
    $caracteres="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    //el maximo de caracteres a usar
    $max=strlen($caracteres)-1;
    //creamos un for para generar el codigo aleatorio utilizando parametros min y max
    for($i=0;$i < $longitud;$i++)
    {
        $codigo.=$caracteres[rand(0,$max)];
    }
    //regresamos codigo como valor
    return $codigo;
}




function agregarIntegrante($nombre,$apellido,$correo,$id_grupo,$codigo) {
    $con = conexion();
    $Query = " 
    INSERT INTO integrantes(nombre,apellido,id_grupo,correo,codigo)
        VALUES (
        '".$nombre."','".$apellido."','".$id_grupo."','".$correo."','".$codigo."'
        )";

         $result = mysqli_query($con,$Query);
         #      echo '<pre>';
          # print_r($result);
         #  echo '</pre>';

        if($result) {
            header("location:grupos.php");
        }else {
            die(mysqli_error($con));
        }
    }


function evaluaciones() {
    $con = conexion();
   $datos = obtenerDatos();
    $Query = " 
    select *
    from evaluaciones as e, tutor as t
    where t.id = '".$_SESSION["id"]."' 
    ";
    $result = mysqli_query($con,$Query);
    $n=0;

        if($result){
           
            echo "<table class='datatable' > <thead><tr>";
                $row = mysqli_fetch_fields($result);
                                
                {
                    echo "<th class='table-header' style='font-size:12px;color:grey;'>Titulo</th>
                    <th class='table-header' style='font-size:12px;color:grey;'>Fecha de finalización</th>
                    <th class='table-header' style='font-size:12px;color:grey;'>Grupo</th>";
                }
                echo "</tr></thead><tbody>";
                for ($i=0;$i < @mysqli_num_rows($result);$i++)
                {
                    $n++;
                    echo "<tr class='filas'>";
                    $row = @mysqli_fetch_array($result);

                  #  foreach($row as $value)
                    {
                        echo "<td class='celdas' style='padding:2px 100px;'>".$row[2]."</td><td class='celdas'>".$row[3]."</td><td class='celdas'>".$row[1]."</td>";
                        
                        
                       
                    }


                   echo "<td><span><a href='formularios.php?id="?><?php echo $row[0];?><?php echo "'>Informacion</a><span></td>";
                    echo "</tr>" ;
               
                    
                }
                
                echo "</tbody></table>";      

                echo "<div style='width:67%;'>";
                    echo "<div style='width:50%;float:left;text-align:left;'>";
                        echo "<span style='font-size:12px;color:grey;'>Evaluaciones:&nbsp;&nbsp; </span>";          
                        echo $n;
                    echo "</div>";
                    echo "<div style='width:50%;float:right;text-align:right;'>";
                        echo "<a href='crearEvaluacion.php' class='interno' style='font-size:12px;color:grey;'><span>Añadir nueva evaluacion</span></a>";           
                    echo "</div>";
                echo "</div>";
                echo "<div id='sub-content'>";
            }
           
            return $result;
        }


function obtenerDatosIntegrantes(){
        $con = conexion();
        $Query = "
        select * from integrantes
        where id = '".$_REQUEST["id"]."'
        ";
    
        $result = mysqli_query($con,$Query);

        if($result) {
            return $result; 
        }


    }


function agregarEvaluacion($idgrupo,$idtutor,$titulo,$fechalimite,$cronometro) {
    $con = conexion();
    $Query = " 
    INSERT INTO evaluaciones(id_grupo,id_tutor, titulo, fecha_limite, cronometro)
        VALUES (
        '".$idgrupo."','".$idtutor."','".$titulo."','".$fechalimite."','".$cronometro."'
        )";

         $result = mysqli_query($con,$Query);
         #      echo '<pre>';
          # print_r($result);
         #  echo '</pre>';

        if($result) {
            header("location:formularios.php");
        }else {
            die(mysqli_error($con));
        }
    }


function formularios() {
    $con = conexion();
   $datos = obtenerDatos();
    $Query = " 
    select *
    from formularioEvaluacion as f, evaluacion as e
    where f.id_evaluacion = '".$_REQUEST["id"]."' 
    
    ";
    $result = mysqli_query($con,$Query);
    $n=0;

        if($result){
           
            echo "<table class='datatable' > <thead><tr>";
                $row = mysqli_fetch_fields($result);
                                
                {
                    echo "<th class='table-header' style='font-size:12px;color:grey;'>Titulo</th>
                    <th class='table-header' style='font-size:12px;color:grey;'>Fecha de finalización</th>
                    <th class='table-header' style='font-size:12px;color:grey;'>Grupo</th>";
                }
                echo "</tr></thead><tbody>";
                for ($i=0;$i < @mysqli_num_rows($result);$i++)
                {
                    $n++;
                    echo "<tr class='filas'>";
                    $row = @mysqli_fetch_array($result);

                  #  foreach($row as $value)
                    {
                        echo "<td class='celdas' style='padding:2px 100px;'>".$row[2]."</td><td class='celdas'>".$row[3]."</td><td class='celdas'>".$row[1]."</td>";
                        
                        
                       
                    }


                    echo "<td><span><a href='crearEvaluacion.php?id="?><?php echo $row[3];?><?php echo "'>Informacion</a><span></td>";
                    echo "</tr>" ;
               
                    
                }
                
                echo "</tbody></table>";      

                echo "<div style='width:67%;'>";
                    echo "<div style='width:50%;float:left;text-align:left;'>";
                        echo "<span style='font-size:12px;color:grey;'>Evaluaciones:&nbsp;&nbsp; </span>";          
                        echo $n;
                    echo "</div>";
                    echo "<div style='width:50%;float:right;text-align:right;'>";
                        echo "<a href='crearEvaluacion.php' class='interno' style='font-size:12px;color:grey;'><span>Añadir nueva evaluacion</span></a>";           
                    echo "</div>";
                echo "</div>";
                echo "<div id='sub-content'>";
            }
           
            return $result;
        }


   ?>
