<?php require_once("funciones.php"); 
    $datos = obtenerDatos();

    #echo $datos["id"];
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


 <section id="subcontent" class=" ">              
        <form id="editarUsuario" action="procesarEditarUsuario.php" method="POST" class="login_tutor_formulario" style="width:400px;margin:0 auto;">
                                   
                <h1 id="" style="text-align:left" class="">Editar Usuario</h1>                            
            
            <fieldset id="inputs" style="border:none;">
                <input type="hidden" name="id" value="<?php echo $datos['id']; ?>" />
                <p>
                    <!--<label for="usuario" class="label">Usuario</label>-->
                    <input type="text" name="usuario" id="usuario" class="inputs" autofocus   placeholder="Ingrese su nuevo usuario" required/>
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
