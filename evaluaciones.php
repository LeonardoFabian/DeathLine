<?php require_once("funciones.php"); 
   $datos = obtenerDatos();

  # echo $grupos["id"];
?>

<!DOCTYPE html>
<html>
<head>
	<title> Soy tutor - DeathLine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">
	<link rel="stylesheet" type="text/css" href="css/hoja.css">
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
	
</head>
<body>
		<div  id="content">

			
			
			<div id="sub-content">

				<?php require_once("core/bloque_tutor.php"); ?>


			<div class="grupos_titulo" style="margin-top: 35px;">
				<span class="grande negrita oscuro">Evaluaciones:</span>

			</div>
			<?php echo "<br/>"; ?>
<?php evaluaciones(); ?>




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
			$('.interno').on('click', function(ev){
				$('#sub-content').load($(this).attr('href'));
				 $("html, body").animate({ scrollTop: 0 }, "slow");
				ev.preventDefault();
			})
            $.ajax({
                url: "datatable.php"
                , method: "POST"
                , dataType: "html"
                , success: function(pagina) {
                    $("#data #data_rows").html(pagina);
                }

            });
        }
    );
</script>




</body>
</html>
