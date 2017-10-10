<!DOCTYPE html>
<html>
<head>
	<title> Tomar evaluación - DeathLine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">

	<style>
		
		.hoja section .login_integrante{
			margin: auto;
			padding-top: 40px;
			width: 400px;
		}
		.hoja section .login_integrante .login_integrante_titulo{
			text-align: center;
		}
		.hoja section .login_integrante .login_integrante_formulario{
			border: 1px solid;
			border-color: rgb(200, 200, 200);
		}
		.hoja section .login_integrante .login_integrante_formulario .nota{
			width: 200px;
			padding-left: 15px;
		}
		.hoja section .login_integrante .login_integrante_formulario .envio{
			text-align: right;
			padding-bottom: 30px;
			padding-right: 40px;
		}
		.hoja section .login_integrante .login_integrante_formulario .contenido{
			text-align: center;
			padding: 60px 0px;
		}
		.hoja section .login_integrante .login_integrante_formulario .contenido label{
			margin-right: 20px;
		}


		.hoja section .login_integrante button:hover{
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
				<a href="tomar_evaluacion.php" class="tomar_evaluacion" title="pagina:  Tomar evaluacion">Tomar evaluación</a>
				<a href="soy_tutor.php" title="pagina:  Soy tutor">Soy tutor</a>
			</nav>
		</header>
-->
		<section>
			<div class="rastro_navegacion grande normal claro" title="rastro de navegacion">
				<span>Estás en:&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>
					<a href="index.php" title="ir a:  Inicio">Inicio</a>&nbsp; > &nbsp;<a href="#" title="ir a:  tomar evaluacion">Tomar evaluacion</a>
				</span>
			</div>
<!------------------     AQUI VA EL CONTENIDO ------------------ -->


			<div class="login_integrante">

				<div class="login_integrante_titulo grande negrita oscuro">
					<span>Tomar evaluación</span>
				</div>
				<div class="login_integrante_formulario">
					<form>
						<div class="contenido grande normal oscuro">
							
							<label>Código de acceso:</label>
							<input type="password" name="" style="width: 130px;">

						</div>
						<div class="nota extra_peque normal claro">
							<span>Si eres integrante de un grupo de clases, ingresa el código de acceso a las evaluaciones.</span>
						</div>
						<div class="envio">
							<button type="submit" name="">Acceder</button>
						</div>
					</form>
				</div>

			</div>


<!-- --------------------     AQUI TERMINA EL CONTENIDO --------------------- -->
		</section>

<!--	</div> -->

</body>
</html>
