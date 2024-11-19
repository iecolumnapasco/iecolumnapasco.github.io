<?php
    require ("MENU_PRINCIPAL.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>ESTUDIANTE</title>
</head>
<body>
<!-- PADRES DE FAMILIA -->
    <section class="section-container-p">
        <div class="title-container-p">
            <div class="title-p">TRABAJO CON LAS FAMILIAS</div>
        </div>
        <div class="content">
            <div class="column">
                <div class="subtitle-p">ACTIVIDADES DE FORMACIÓN:</div>
                <div class="box-p">Reuniones de aula</div>
                <div class="box-p">Entrevistas individuales</div>
                <div class="box-p">Escuela de familias</div>
                <div class="box-p">Otras actividades</div>
            </div>
            <div class="column-p">
                <div class="subtitle-p">ACTIVIDADES DE PARTICIPACIÓN:</div>
                <div class="box-p">Reunión de Apafa (Asociación de Pdres de Familia)</div>
                <div class="box-p">Reunión de CONEI (Consejo Educativo Institucional)</div>
                <div class="box-p">Reunión con el comité de aula y otros</div>
                <div class="box-p">Otras actividades </div>
            </div>
        </div>
        <div class="images-container-p">
            <img src="img/padre_familia_01.jpeg" alt="Imagen 1">
            <img src="img/padre_familia_02.jpeg" alt="Imagen 2">
            <!-- Agrega más imágenes si es necesario -->
        </div>
        <div class="text-box-p">
            <p>La participación de las familas en la escuela, y la buena relación de cooperación y confianza entre ellas y los docentes son factores importantes para el desarrollo integral de nuestros estudiantes. De esta forma, su particpación ayuda a que los adolescentes respondan mejor a sus necesidades y a establecer una convivencia armónica en la institución educativa.</p>
        </div>
    </section>

<!-- BOTON DE REGRESO -->
           <div class="section-white">
        <button class="back-button" onclick="goToHomePage()">Regresar a la página principal</button>
    </div>
    <script>
        function goToHomePage() {
            window.location.href = 'INDEX.php'; // Cambia '/' por la URL de tu página principal si es necesario
        }
    </script>
    
<!-- PIE DE PAGINA -->
    <section class="pie_pagina">
    <footer class="boby_pie1">
        <div class="bottom_bar">
            <p>&copy; 2024 Todos los Derechos Reservados - I.E. "Columna Pasco"</p>
        </div>
    </footer>
    </section>
</body>
</html>