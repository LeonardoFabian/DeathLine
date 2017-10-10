<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
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

        $(document).ready(function() {
            var url = '';
            $('#irRegistro').click(function(e) {
                e.preventDefault(); // previene la accion por defecto, que seria enviarte a otra pagina
                var href = url + $(this).attr('href'); // Extrae el contenido del atributo href del enlace clickeado
                $('#content').empty(); // Limpia el div 'content'
                $('#content').load(href); // carga el contenido dentro del div 'content'
            });  
        });
  	 </script>
    <style>
        .contenidoInicio {
            text-align: center;
            padding-top: 50px;
        }
        .negro {
            color:black;
        }
        .amarillo {
            color: gold;
        }
        a.boton {
            display:block;
            width: 100px;
            padding: 10px 15px;
            color: gold;
            margin: 25px auto;
            text-decoration: none;
            border-radius: 10px;
            font-size: 1.2em;
        }
         a.boton:hover {
           
            margin: 25px auto;
            text-decoration: none;
            border-radius: 15px;
            border: 1px solid gold;
        }
    </style>
</head>
<body>

    
    <div class="rastro_navegacion grande normal claro" title="rastro de navegacion">
        <span style="padding-left:55px;">Estás en:&nbsp;&nbsp;&nbsp;&nbsp;</span>
         <span><a href="index.php" title="volver a:  Inicio">Inicio</a></span>
    </div>

    <div class="contenidoInicio">
        <span>Bienvenido a</span>
        <h1><span class="negro">Death</span><span class="amarillo">Line</span></h1>
        <p>
            
            El sistema de evaluacion avanzado 
            <br/>que promete agilizar los procesos
            de evaluación <br/>en universidades, colegios y demas 
            centros de formacion. 
          
        </p> 

        <span>Aún no tienes tienes tu cuenta?</span>
        <p>No pierdas tiempo!</p> 
        <a id="irRegistro" href="registro.php" class="boton">Registrate</a>
    </div>

</body>
</html>