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

	<div class="hoja">
		<header>
			<?php require_once("header.php"); ?>
		</header>

		<section id="content">
			<div class="rastro_navegacion grande normal claro" title="rastro de navegacion">
				<span style="padding-left:55px;">Estás en:&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span><a href="index.php" title="volver a:  Inicio">Inicio</a></span>
			</div>



			<!-- CONTENIDO -->



		</section>

	</div>

	<footer style="padding:25px 15px;text-align:center;color:#4b4b4b;">   
			<?php require_once("footer.php"); ?>
	</footer>

</body>
</html>
