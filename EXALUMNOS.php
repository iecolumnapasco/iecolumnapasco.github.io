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
<section class="comparative-section_e">
        <div class="section-header_e">
            <h1>PERFIL DEL BICENTENARIO</h1>
        </div>
        <div class="comparative-table_e">
            <div class="comparative-row header-row">
                <div class="comparative-cell">CARACTERÌSTICAS</div>
                <div class="comparative-cell">DESCRIPCIÒN</div>
            </div>
            <div class="comparative-row">
                <div class="comparative-cell">Cuidadanía</div>
                <div class="comparative-cell">El estudiante se reconoce como persona valiosa y se identfica con su cultura en diferentes contextos. El estudiante aprecia manifestaciones artistico-culturales para comprender el aporte del arte a la cultura y a la sociedad, y crea proyectos artisticos utilizando los diversos lenguajes del arte para comunicar sus ideas a otros. El estudiante propicia la vida en democracia a partir del reconocimiento de sus derechos y deberes y de la comprensión de los procesos historicos y sociales de nuestro pais y el mundo.</div>
            </div>
            <div class="comparative-row">
                <div class="comparative-cell">Comunicación Efectiva</div>
                <div class="comparative-cell">El estudiante se comunica en su lengua materna, en castellano como segunda lengua y en inglés como lengua extranjera de manera asertiva y responsable para interacturar con otras personas en diversos contextos y con distintos propósitos.</div>
            </div>
            <div class="comparative-row">
                <div class="comparative-cell">Vida Saludable</div>
                <div class="comparative-cell">El estudiante practica una vida activa y saludable para su bienestar, cuida su cuerpoe interactúa respetuosamente en la práctica de distintas actividades fisicas, cotidianas o deportivas.</div>
            </div>
            <div class="comparative-row">
                <div class="comparative-cell">Resoluciòn de Problema</div>
                <div class="comparative-cell">El estudiante desarrolla procesos autónomos de aprendizaje en forma pemanente para la mejora continua de su proceso de aprendizaje y de sus resultados. El estudiante interpreta la realidad y toma decisiones a partir de conocimientos matematicos que aporten a su contexto. El estudiante indaga y comprende el mundo natural y artificial utilizando conocimientos cientificos en diálogo con saberes locales para mejorar la calidad de vida y cuidando la naturaleza.</div>
            </div>
            <div class="comparative-row">
                <div class="comparative-cell">Cultura Digital</div>
                <div class="comparative-cell">El estudiante aprovecha responsablemente las tecnologías de la información y de la comunicación (TIC) para interactuar con la información, gestionar su comunicación y aprendizaje.</div>
            </div>
        </div>
        <div class="image-container">
            <img src="img/exalumnos_01.jpeg" alt="Image 1">
            <img src="img/exalumnos_02.jpeg" alt="Image 2">
            <img src="img/exalumnos_03.jpeg" alt="Image 3">
            <img src="img/exalumnos_04.jpeg" alt="Image 4">
            <img src="img/exalumnos_06.png" alt="Image 5">
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