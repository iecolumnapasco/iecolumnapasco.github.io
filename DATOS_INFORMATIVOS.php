<?php
    require ("MENU_PRINCIPAL.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>DATOS INFORMATIVOS</title>
</head>
<body>
<!-- INFORMACIÒN -->
    <div class="timeline-container">
        <div class="timeline-title">DATOS INFORMATIVOS</div>
        <div class="timeline-line"></div>
        <!-- Item 1 -->
        <div class="timeline-item">
            <div class="timeline-circle">1</div>
            <div class="timeline-arrow up"></div>
            <div class="timeline-arrow down"></div>
            <div class="timeline-content"> 
                <H1>INSTITUCION EDUCATIVA:</H1>              
                <p>Nº35756 “Columna Pasco”</p>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="timeline-item">
            <div class="timeline-circle">2</div>
            <div class="timeline-arrow up"></div>
            <div class="timeline-arrow down"></div>
            <div class="timeline-content">
                <H1>CÓDIGO MODULAR:</H1> 
                <p>0427427</p>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="timeline-item">
            <div class="timeline-circle">3</div>
            <div class="timeline-arrow up"></div>
            <div class="timeline-arrow down"></div>
            <div class="timeline-content">
            <H1>NIVEL EDUCATIVO:</H1> 
                <p>Secundario</p>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="timeline-item">
            <div class="timeline-circle">4</div>
            <div class="timeline-arrow up"></div>
            <div class="timeline-arrow down"></div>
            <div class="timeline-content">
                <H1>TURNO:</H1> 
                <p>Mañana</p>
            </div>
        </div>
        <!-- Item 5 -->
        <div class="timeline-item">
            <div class="timeline-circle">5</div>
            <div class="timeline-arrow up"></div>
            <div class="timeline-arrow down"></div>
            <div class="timeline-content">
                <H1>DISTRITO - PROVINCIA - REGION:</H1> 
                <p>Yanacancha - Pasco - Pasco</p>
            </div>
        </div>
      <!-- Item 6 -->
        <div class="timeline-item">
            <div class="timeline-circle">6</div>
            <div class="timeline-arrow up"></div>
            <div class="timeline-arrow down"></div>
            <div class="timeline-content">
                <img src="img/insignia_01.jpeg" class="imagen">
                <img src="img/insignia_02.jpg" class="imagen">
                <img src="img/escudo-cp.png" class="imagen">
                <p>Modificaciones de su Escudo</p>
            </div>
        </div>
    </div>
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