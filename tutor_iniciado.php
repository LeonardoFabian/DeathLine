<?php 
	
	require_once("funciones.php"); 
	$datos = obtenerDatos();

    #echo $datos["id"];
?>

<!DOCTYPE html>
<html>
<head>
	<title> Soy tutor - DeathLine</title>
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

		    $(document).ready(function() {
            var url = '';
            $('#menu-options a').click(function(e) {
                e.preventDefault(); // previene la accion por defecto, que seria enviarte a otra pagina
                var href = url + $(this).attr('href'); // Extrae el contenido del atributo href del enlace clickeado
                $('#sub-content').empty(); // Limpia el div 'content'
                $('#sub-content').load(href); // carga el contenido dentro del div 'content'
            });  
        });
  	 </script>

	<style>
		
		.hoja section .bloque_tutor{
			padding-top: 35px;
		}
		.hoja section .bloque_tutor .hr hr{
			border: 1px solid;
			border-color: rgb(200, 200, 200);
		}
		.hoja section .bloque_tutor .hr{
			width: 350px;
		}


		.hoja section .bloque_tutor a:link{
			color: rgb(64, 64, 64);
		}
		.hoja section .bloque_tutor a:visited{
			color: rgb(64, 64, 64);
		}
		.hoja section .bloque_tutor a:hover{
			color: rgb(255, 192, 0);
		}
		.hoja section .bloque_tutor a:active{
			color: rgb(255, 192, 0);
		}
		/* --------------DATOS_TUTOR-------------- */
		.hoja section .datos_tutor a:link{
			color: rgb(64, 64, 64);
		}
		.hoja section .datos_tutor a:visited{
			color: rgb(64, 64, 64);
		}
		.hoja section .datos_tutor a:hover{
			color: rgb(255, 192, 0);
		}
		.hoja section .datos_tutor a:active{
			color: rgb(255, 192, 0);
		}


	</style>

</head>
<body>

	<div class="hoja">
		<header>
			<?php require_once("headerTutor.php"); ?>
		</header>

		<section>
			<div class="rastro_navegacion grande normal claro" title="rastro de navegacion">
				<span>Estás en:&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>
					<a href="index.php" title="ir a:  Inicio">Inicio</a>&nbsp; > &nbsp;<a href="tutor_iniciado.php" title="ir a:  soy tutor">Soy tutor</a>
				</span>
			</div>
<!------------------     AQUI VA EL CONTENIDO ------------------ -->

		<div id="tutor_iniciado">

	

			<div id="content">

				

				<div id="sub-content">
		
		 <?php require_once("core/bloque_tutor.php"); ?>
    <nav id="menu-options" class="options">
        <span  class='extra_peque normal claro'><a href='editarUsuario.php'>Editar usuario</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href='editarClave.php'>Cambiar contraseña</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="editarDatos.php">Editar datos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="grupos.php" class='interno'>Ir a lista de grupos</a>
       <!-- <a id"irListaGrupos" href="grupos.php">Ir a la lista de grupos</a>--> 
        </span>
    </nav>

				<div class="datos_tutor">
					<div class="datos_tutor_titulo grande negrita oscuro">
						<br>
						<span>Datos:</span>
					</div>
					<div class="datos_tutor_contenido">
						<br>
						<table class="pequena normal oscuro">
							<tr>
								<td style="padding-right: 40px;">Usuario:</td>
								<td>								
									<?php echo $datos["usuario"]?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									
								</td>
							</tr>
							<tr>
								<td style="padding-right: 40px;">Nombres:</td>
								<td>
									<?php echo $datos["nombre"]?>
								</td>
							</tr>
							<tr>
								<td style="padding-right: 40px;">Apellidos:</td>
								<td>
									<?php echo $datos["apellido"]?>
								</td>
							</tr>
							<tr>
								<td style="padding-right: 40px;">Correo:</td>
								<td>
									<?php echo $datos["correo"]?>
								</td>
							</tr>
						</table>
						
				</div>
				<br/>
                <br/>
            
			</div>
			</div>
			</div>

		</div>

<!-- --------------------     AQUI TERMINA EL CONTENIDO --------------------- -->
		</section>

	
		
	</div>

<footer style="padding:25px 15px;text-align:center;color:#4b4b4b;">   
	<?php require_once("footer.php"); ?>
</footer>

</body>
</html>
