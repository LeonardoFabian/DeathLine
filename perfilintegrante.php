<?php require_once("funciones.php"); 
$datos = obtenerDatos();
$datosint = obtenerDatosIntegrantes();
$perfil= $datosint->fetch_array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil Integrante</title>
             
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">
	<script type="text/javascript">
        $(document).ready(function() {
            var url = '';
            $('#menu-options span a').click(function(e) {
                e.preventDefault(); // previene la accion por defecto, que seria enviarte a otra pagina
                var href = url + $(this).attr('href'); // Extrae el contenido del atributo href del enlace clickeado
                $('#content').empty(); // Limpia el div 'content'
                $('#content').load(href); // carga el contenido dentro del div 'content'
            });  
        });

  	 </script>

  	 <style >
  	 	
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
					<a href="index.php" title="ir a:  Inicio">Inicio</a>&nbsp; > &nbsp;
					<a href="tutor_iniciado.php" title="ir a:  soy tutor">Soy tutor</a>&nbsp; > &nbsp;
					<a href="grupos.php" title="ir a:  Grupos">Grupos</a>
					</span>
			</div>

       <div id="content">

    <div id="sub-content">

  <?php require_once("core/bloque_tutor.php"); ?>

    <nav id="menu-options" class="options">
        <span  class='extra_peque normal claro'><a href='editarUsuario.php'>Editar usuario</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="editarDatos.php">Editar datos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
								<td style="padding-right: 40px;">Nombres:</td>
								<td>
									<?php echo $perfil["nombre"]?>
								</td>
							</tr>
							<tr>
								<td style="padding-right: 40px;">Apellidos:</td>
								<td>
									<?php echo $perfil["apellido"]?>
								</td>
							</tr>
							<tr>
								<td style="padding-right: 40px;">Correo:</td>
								<td>
									<?php echo $perfil["correo"]?>
								</td>
							</tr>
							<tr>
								<td style="padding-right: 40px;">Codigo de acceso:</td>
								<td>
									<?php echo $perfil["codigo"]?>
								</td>
							</tr>
						</table>
					
					</div>
				
                </div>
                <br/>
                <br/>
                
			</div>
			</div>
			</div>
        
</body>
</html>