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
					<a href="index.php" title="ir a:  Inicio">Inicio</a>&nbsp; > &nbsp;<a href="tutor_iniciado.php" title="ir a:  soy tutor">Soy tutor</a>&nbsp; > &nbsp;<a href="grupos.php" title="ir a:  grupos">Grupos</a>&nbsp; > &nbsp;<a href="ver_grupo.php" title="ir a:  ver grupo">Ver grupo</a>&nbsp; > &nbsp;<a href="masdetalles_integrante.php" title="ir a:  mas detalles de integrante">Mas detalles de integrante</a>
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
					<span class="extra_peque normal claro">Integrante</span><br>
					<span class="grande negrita oscuro">Nombre Apellido</span>
					<span class="extra_peque normal claro">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Eliminar integrante</a></span>
				</div>
			</div>


			<div class="datos_integrante">
				<div class="datos_integrante_titulo grande negrita oscuro">
					<br>
					<span>Datos:</span>
				</div>
				<div class="datos_integrante_contenido">
					<br>
					<table class="pequena normal oscuro">
						<tr>
							<td style="">Nombres:</td>
							<td></td>
						</tr>
						<tr>
							<td style="">Apellidos:</td>
							<td></td>
						</tr>
						<tr>
							<td style="">Correo:</td>
							<td></td>
						</tr>
						<tr>
							<td style="padding-right: 40px;">Código de acceso:</td>
							<td></td>
						</tr>
					</table>
					<span class="extra_peque normal claro">
						<a href="#">Editar datos</a>
					</span>
				</div>
			</div>			
			


<!-- --------------------     AQUI TERMINA EL CONTENIDO --------------------- -->
		</section>

		<footer>
			


		</footer>
		
	</div>

</body>
</html>
