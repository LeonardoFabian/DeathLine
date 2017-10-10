<?php require_once("funciones.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title> Soy tutor - DeathLine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">
         <script type="text/javascript">
        $(document).ready(function() {
            var url = '';
            $('#menu-options span a').click(function(e) {
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


		.hoja section .grupos a:link{
			color: rgb(64, 64, 64);
		}
		.hoja section .grupos a:visited{
			color: rgb(64, 64, 64);
		}
		.hoja section .grupos a:hover{
			color: rgb(255, 192, 0);
		}
		.hoja section .grupos a:active{
			color: rgb(255, 192, 0);
		}
		.hoja section .grupos_pie a:link{
			color: rgb(64, 64, 64);
		}
		.hoja section .grupos_pie a:visited{
			color: rgb(64, 64, 64);
		}
		.hoja section .grupos_pie a:hover{
			color: rgb(255, 192, 0);
		}
		.hoja section .grupos_pie a:active{
			color: rgb(255, 192, 0);
		}


	</style>

</head>
<body>

    <?php require_once("funciones.php"); 
   #$grupos = mostrarGrupos();

  # echo $grupos["id"];
?>

          

		   <nav id="menu-options" class="options">
				<span  class='extra_peque normal claro' ><a href='crearNuevoGrupo.php'>Crear nuevo grupo</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
				</span>
			</nav>

			<div id="sub-content">

			<div class="grupos_titulo" style="margin-top: 35px;">
				<span class="grande negrita oscuro">Inegrantes:</span>
			</div>
			<?php echo "<br/>"; ?>




<?php 
$group = groupName();
echo $group;
selectGrupoById(); 
?>
<?php echo "<br/><br/><br/>"; ?>
			<div class="grupos_titulo" style="margin-top: 35px;">
				<span class="grande negrita oscuro">Integrantes por Grupos:</span>

			</div>
			<?php echo "<br/>"; ?>
<?php countEstudiantesPorGrupo(); ?>



<div id="data">
	<table id="data_rows" class="tabla pequena normal oscuro"></table>
</div>

<!--
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
-->

<!-- --------------------     AQUI TERMINA EL CONTENIDO --------------------- -->
	
<!--	
	</section>


		
	</div>
-->

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript"> 
    $(document).ready(
        function () {
          
        }
    );
</script>

</body>
</html>
