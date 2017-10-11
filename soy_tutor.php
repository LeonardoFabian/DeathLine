<!DOCTYPE html>
<html>
<head>
	<title> Soy tutor - DeathLine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">
	<link rel="stylesheet" type="text/css" href="css/hoja.css">

	
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
					<form action="procesarSoyTutor.php" method="POST">
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
