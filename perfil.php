<?php require_once("funciones.php"); 
$datos = obtenerDatos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Perfil</title>
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
        

       

    <div id="sub-content">

 <?php require_once("core/bloque_tutor.php"); ?>

    <nav id="menu-options" class="options">
        <span  class='extra_peque normal claro'><a href='editarUsuario.php'>Editar usuario</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href='editarClave.php'>Cambiar contraseña</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="editarDatos.php">Editar datos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="grupos.php" class='interno'>Ir a lista de grupos</a>
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
								<td style="padding-right: 40px;">Usuario:</td>
								<td>								
									<?php echo $_SESSION["usuario"]?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									
								</td>
							</tr>
							<tr>
								<td style="padding-right: 40px;">Nombres:</td>
								<td>
									<?php echo $_SESSION["nombre"]?>
								</td>
							</tr>
							<tr>
								<td style="padding-right: 40px;">Apellidos:</td>
								<td>
									<?php echo $_SESSION["apellido"]?>
								</td>
							</tr>
							<tr>
								<td style="padding-right: 40px;">Correo:</td>
								<td>
									<?php echo $_SESSION["correo"]?>
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