<?php require_once("funciones.php"); 
    $datos = obtenerDatos();

?>

<!DOCTYPE html>
<html>
<head>
	<title> Inicio - DeathLine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">
	<script src="js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function() {
            var url = '';
            $('#menu a').click(function(e) {
                e.preventDefault(); // previene la accion por defecto, que seria enviarte a otra pagina
                var href = url + $(this).attr('href'); // Extrae el contenido del atributo href del enlace clickeado
                $('#content').empty(); // Limpia el div 'content'
                $('#content').load(href); // carga el contenido dentro del div 'content'
            });  
        });
  	 </script>

</head>
<body>

	<div class="ventana_small">

        


 <section id="subcontent" class="interno ">              
        <form id="agregarIntegrante" action="procesarAgregarIntegrante.php" method="POST" class="login_tutor_formulario" style="width:400px;margin:0 auto;">
                                   
                <h1 id="" style="text-align:left" class="">Añadir nuevo integrante</h1>                            
            
            <fieldset id="inputs" style="border:none;">
              

                <input type="hidden" name="id" value="<?php echo $datos["id"]; ?>" />
                
                <p>
                   <!-- <label for="claveActual" class="label">Contraseña actual</label><br/>-->
                    <input type="text" name="nombre" id="nombre" class="inputs" autofocus  placeholder="Nombre" required/>
                </p>
                <p>
                  <!--  <label for="claveNueva" class="label">Nueva contraseña</label><br/>-->
                    <input type="text" name="apellido" id="apellido" class="inputs" autofocus  placeholder="Apellido" required/>
                </p>
                                <p>
                  <!--  <label for="claveNueva" class="label">Nueva contraseña</label><br/>-->
                    <input type="id_grupo" name="id_grupo" id="id_grupo" class="inputs" autofocus  placeholder="Grupo ID" required/>
                </p>
                <p>
                  <!--  <label for="claveNueva" class="label">Nueva contraseña</label><br/>-->
                    <input type="email" name="correo" id="correo" class="inputs" autofocus  placeholder="Correo" required/>
                </p>
                  <p>
                  <!--  <label for="claveNueva" class="label">Nueva contraseña</label><br/>-->
                    <input type="codigo" name="codigo" id="codigo" class="inputs" autofocus  placeholder="Digita el código de acceso" required/>
                </p>
                 <p>
                     
                  <!--  <label for="claveNueva" class="label">Nueva contraseña</label><br/>-->
                    <?php 
                    $codigo = generarCodigo(10);
                    echo "<br>Código de acceso : ".$codigo; 
                        ?>
                    <!--<a href="#" value="">Generar código</a>-->
                </p>




                <p style="text-align:left;">      
                    <a href="tutor_iniciado.php" style="padding-left:130px;">Cancelar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!--<a href="procesarEditarUsuario.php">Guardar</a> -->
                    <input type="submit" id="btnRegistrar" class="envio" value="Guardar" />  
                </p>


            </fieldset>

        </form>            
    </section>

	</div>



</body>
</html>
