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
					<a href="index.php" title="ir a:  Inicio">Inicio</a>&nbsp; > &nbsp;<a href="#" title="ir a:  soy tutor">Registro</a>
				</span>
			</div>
<!------------------     AQUI VA EL CONTENIDO ------------------ -->

		
    <section id="registro" class=" ">              
        <form id="registroTutor" action="procesarRegistro.php" method="POST" class="login_tutor_formulario">
                                   
                <h1 id="" style="text-align:center" class="">Registro</h1>                            
            
            <fieldset id="inputs">
                <p>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="inputs" autofocus  style="width:150px;" placeholder="Nombre" required/>
                </p>
                <p>
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="inputs" style="width:150px;" placeholder="Apellidos" required/>
                </p>
                <p>
                    <label for="correo">Correo electronico</label>
                    <input type="email" name="correo" id="correo" class="inputs" style="width:150px;" placeholder="ejemplo@dominio.com" required/>
                </p>   
                 <p>
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="inputs" style="width:150px;" placeholder="Usuario" required/>
                </p>
                <p>
                    <label for="clave">Contraseña</label>        
                    <input type="password" name="clave" id="password"  class="inputs"  style="width:150px;" placeholder="Contraseña" required/>
                </p>


            </fieldset>
            <fieldset id="actions"> 
                <input type="submit" id="btnRegistrar" class="envio" value="Registrar" />               
            </fieldset>
        </form>            
    </section>

<!-- --------------------     AQUI TERMINA EL CONTENIDO --------------------- -->
		</section>

		
<!--	</div>-->

</body>
</html>




















