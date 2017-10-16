<?php require_once("funciones.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">
</head>
		<body>
			

		<div class="imagen_logo">
			<img src="imagenes/logo_image.png" title="nombre del sitio:  DeathLine">
				</div>

		<nav id="menu" class="grande negrita oscuro">


			<?php if(isset($_SESSION["id"])){ ?>


			<a href="grupos.php" class="inicio interno" title="pagina:  Inicio">Grupos</a>
			<a href="evaluaciones.php" class="interno" title="pagina:  Evaluacion">Evaluaciones</a>
			<a href="perfil.php" class="interno" title="pagina:  Soy tutor">Mi Perfil</a>

			<?php }else{ ?>

			<a href="inicio.php" class="inicio" title="pagina:  Inicio">Inicio</a>
			<a href="tomar_evaluacion.php" title="pagina:  Tomar evaluacion">Tomar evaluación</a>
			<a href="soy_tutor.php" title="pagina:  Soy tutor">Soy tutor</a>

			<?php } ?>

		</nav>

		</body>
</html>