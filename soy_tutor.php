<!DOCTYPE html>
<html>
<head>
	<title> Soy tutor - DeathLine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">

	<style>
		
		.hoja section .login_tutor{
			margin: auto;
			padding-top: 40px;
			width: 400px;
		}
		.hoja section .login_tutor .login_tutor_titulo{
			text-align: center;
		}
		.hoja section .login_tutor .login_tutor_formulario{
			border: 1px solid;
			border-color: rgb(200, 200, 200);
		}
		.hoja section .login_tutor .login_tutor_formulario .nota{
			width: 200px;
			padding-left: 15px;
		}
		.hoja section .login_tutor .login_tutor_formulario .envio{
			text-align: right;
			padding-bottom: 30px;
			padding-right: 40px;
		}
		.hoja section .login_tutor .login_tutor_formulario .contenido{
			text-align: right;
			padding-top: 60px;
			padding-bottom: 60px;
			padding-right: 75px;
		}
		.hoja section .login_tutor .login_tutor_formulario .contenido label{
			margin-right: 20px;
		}


		.hoja section .login_tutor button:hover{
			color: rgb(255, 192, 0);
		}
		.hoja section .login_tutor a:link{
			color: rgb(64, 64, 64);
		}
		.hoja section .login_tutor a:visited{
			color: rgb(64, 64, 64);
		}
		.hoja section .login_tutor a:hover{
			color: rgb(255, 192, 0);
		}
		.hoja section .login_tutor a:active{
			color: rgb(255, 192, 0);
		}

	</style>

</head>
<body>
<!--
	<div class="hoja">

		<header>
			<div class="imagen_logo">
				<img src="imagenes/logo_image.png" title="nombre del sitio:  DeathLine">
			</div>

			<nav class="grande negrita oscuro">
				<a href="index.php" title="pagina:  Inicio">Inicio</a>
				<a href="tomar_evaluacion.php" title="pagina:  Tomar evaluacion">Tomar evaluación</a>
				<a href="soy_tutor.php" class="tutor" title="pagina:  Soy tutor">Soy tutor</a>
			</nav>
		</header>
-->
		<section>
			<div class="rastro_navegacion grande normal claro" title="rastro de navegacion">
				<span>Estás en:&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>
					<a href="index.php" title="ir a:  Inicio">Inicio</a>&nbsp; > &nbsp;<a href="#" title="ir a:  soy tutor">Soy tutor</a>
				</span>
			</div>
<!------------------     AQUI VA EL CONTENIDO ------------------ -->

		<div id="login_tutor">

			<div class="login_tutor">

				<div class="login_tutor_titulo grande negrita oscuro">
					<span>Soy tutor</span>
				</div>
				<div class="login_tutor_formulario">
					<form action="procesarSoyTutor.php" method="post">
						<div class="contenido grande normal oscuro">
							
							<label>Usuario:</label>
							<input type="text" name="usuario" style="width: 150px;"><br>
							<br>

							<label>Contraseña:</label>
							<input type="password" name="clave" style="width: 150px">

						</div>
						<div class="nota extra_peque normal claro">
							<span>Si eres tutor y aún no tienes un usuario, <a href="registro.php">resgitrate</a></span>
						</div>
						<div class="envio">
							<button type="submit" name="">Acceder</button>
						</div>
					</form>
				</div>

			</div>

		</div>

<!-- --------------------     AQUI TERMINA EL CONTENIDO --------------------- -->
		</section>

		
<!--	</div>-->

</body>
</html>
