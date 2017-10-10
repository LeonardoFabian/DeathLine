<?php require_once("funciones.php"); 
    $datos = obtenerDatos();

    #echo $datos["id"];
?>

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


    <div id="sub-content">
<!------------------     AQUI VA EL CONTENIDO ------------------ -->

    <div class="ventana_small">
    <section id="registro" class=" ">              
        <form id="registroTutor" action="procesarCrearNuevoGrupo.php" method="POST" class="login_tutor_formulario">
                                   
                <h1 id="" style="text-align:center" class="">Crear nuevo grupo</h1>                            
            
            <fieldset id="inputs" style="border:none;">
                <input type="hidden" name="id" value="<?php echo $datos['id']; ?>" />
                <p>
                    <label for="nombre_grupo">Nombre del grupo</label>
                    <input type="text" name="nombre_grupo" id="nombre_grupo" class="inputs" autofocus  style="width:150px;" placeholder="Grupo" required/>
                </p>
               
            </fieldset>
            <fieldset id="actions" style="border:none;"> 
                <input type="submit" id="btnRegistrar" class="envio" value="Crear grupo" />               
            </fieldset>
        </form>            
    </section>
    </div>

<!-- --------------------     AQUI TERMINA EL CONTENIDO --------------------- -->
		</div>

		
<!--	</div>-->

</body>
</html>




















