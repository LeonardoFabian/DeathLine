<!DOCTYPE html>
<html>
<head>
	<title> Soy tutor - DeathLine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">

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


		.hoja section a:link{
			color: rgb(64, 64, 64);
		}
		.hoja section a:visited{
			color: rgb(64, 64, 64);
		}
		.hoja section a:hover{
			color: rgb(255, 192, 0);
		}
		.hoja section a:active{
			color: rgb(255, 192, 0);
		}


	</style>

</head>
<body>

	<div class="hoja">
		<header>
			<div class="imagen_logo">
				<img src="imagenes/logo_image.png" title="nombre del sitio:  DeathLine">
			</div>

			<nav class="grande negrita oscuro">
				<a href="index.php" title="pagina:  Inicio">Inicio</a>
				<a href="tomar_evaluacion.php" title="pagina:  Tomar evaluacion">Tomar evaluación</a>
				<a href="tutor_iniciado.php" class="tutor" title="pagina:  Soy tutor">Soy tutor</a>
			</nav>
		</header>

		<section>
			<div class="rastro_navegacion grande normal claro" title="rastro de navegacion">
				<span>Estás en:&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>
					<a href="index.php" title="ir a:  Inicio">Inicio</a>&nbsp; > &nbsp;<a href="tutor_iniciado.php" title="ir a:  soy tutor">Soy tutor</a>&nbsp; > &nbsp;<a href="grupos.php" title="ir a:  grupos">Grupos</a>&nbsp; > &nbsp;<a href="ver_grupo.php" title="ir a:  ver grupo">Ver grupo</a>
				</span>
			</div>
<!------------------     AQUI VA EL CONTENIDO ------------------ -->


			<div class="bloque_tutor">
				<img src="imagenes/image_sesion.png">
				<div class="tutor" style="display: inline-block; padding-left: 30px;">
					<span class="extra_peque normal claro">tutor</span><br>
					<span class="grande negrita oscuro">Nombre Apellido Apellido</span><br>
					<span class="extra_peque normal claro"><a href="soy_tutor.php">Salir de la sesión</a></span>
				</div>
				<div class="hr">
					<hr>
				</div>
			</div>

			<div class="grupo">
				<div style="display: inline-block; margin-top: 23px;">
					<span class="extra_peque normal claro">Grupo</span><br>
					<span class="grande negrita oscuro">Nombre Apellido</span>
					<span class="extra_peque normal claro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Renombrar</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Eliminar grupo</a></span>
				</div>
			</div>


			<div class="integrantes_titulo" style="margin-top: 35px;">
				<span class="grande negrita oscuro">Integrantes:</span>
			</div>
			<div class="integrante">
				<div class="fila_main extra_peque normal claro" style="display: inline-block; border-bottom: 1px solid; border-bottom-color: rgb(200, 200, 200);">
					<span style="display: inline-block; width: 440px; text-align: center;">Nombre del integrante</span>
					<span style="display: inline-block; width: 105px; text-align: center;">código de acceso</span>
				</div>

				<div class="fila pequena normal oscuro" style="display: inline-block; border-bottom: 1px solid; border-left: 1px solid; border-right: 1px solid;border-color: rgb(200, 200, 200);">
					<span style="display: inline-block; width: 425px; text-align: left; padding-left: 15px;">Nombre del integrante</span>
					<span style="display: inline-block; width: 105px; text-align: center;">1-1-1</span>
					
				</div>
				<span>&nbsp;&nbsp;<a href="masdetalles_integrante.php">Mas detalles</a></span>
			</div>
			<div class="integrantes_pie" style="text-align: right; width: 550px;">
				<span class="extra_peque normal claro"><a href="#">Añadir nuevo integrante</a></span>
			</div>


			<div class="evaluaciones_titulo" style="margin-top: 35px;">
				<span class="grande negrita oscuro">Evaluaciones:</span>
			</div>
			<div class="evaluaciones">
				<div class="fila_main extra_peque normal claro" style="display: inline-block; border-bottom: 1px solid; border-bottom-color: rgb(200, 200, 200);">
					<span style="display: inline-block; width: 420px; text-align: center;">Nombre de la evaluacion</span>
					<span style="display: inline-block; width: 125px; text-align: center;">Fecha de finalizacion</span>
				</div>

				<div class="fila pequena normal oscuro" style="display: inline-block; border-bottom: 1px solid; border-left: 1px solid; border-right: 1px solid;border-color: rgb(200, 200, 200);">
					<span style="display: inline-block; width: 405px; text-align: left; padding-left: 15px;">Nombre de la evaluacion</span>
					<span style="display: inline-block; width: 125px; text-align: center;">2017-10-20</span>
					
				</div>
				<span>&nbsp;&nbsp;<a href="#">Mas detalles</a></span>
				
			</div>
			<div class="integrantes_pie" style="text-align: right; width: 550px;">
				<span class="extra_peque normal claro"><a href="#">Crear nueva evaluacion</a></span>
			</div>
			


<!-- --------------------     AQUI TERMINA EL CONTENIDO --------------------- -->
		</section>

		<footer>
			


		</footer>
		
	</div>

</body>
</html>


