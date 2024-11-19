<?php
    require ("MENU_PRINCIPAL.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>MISION_Y_VISION</title>
</head>
<body>
<!-- LEMA DE INSTITUCION -->
    <section class="contenedor">
        <div class="contenido-central">
            <img src="img/escudo-cp.png" alt="Imagen centrada" class="imagen-central">
            <h1 class="titulo-central">N° 35756 - COLUMNA PASCO</h1>
        </div>
        <div class="cuadros_lema">
            <div class="cuadro_lema">Lealtad</div>
            <div class="cuadro_lema">Honor</div>
            <div class="cuadro_lema">Excelencia</div>
        </div>
    </section>

<!-- MISION Y VISION -->
    <section class="mision-vision">
        <div class="mision">
            <img src="img/mision.jpeg" alt="Imagen Misión" class="imagen-mision-vision">
            <h5>MISIÓN</h5>
            <p>Lograr que todos los estudiantes culminen su escolaridad en secundaria de EBR, consoliden sus aprendizajes constituidos en el CNEB, logren su desarrollo integral demostrando los perfiles de egreso y practicando los enfoques transversales, en espacios seguros, saludables, inclusivos, de sana convivencia.</p>
        </div>
        <div class="vision">
            <img src="img/vision.jpeg" alt="Imagen Visión" class="imagen-mision-vision">
            <h5>VISIÓN</h5>
            <p>Ser reconocidos como  una Institución Educativa líder  e innovadora a nivel regional que cuenta con una propuesta de formación integral en relación a los estándares de aprendizaje enfatizando la comprensión de lectura solución de problemas,  uso de  las tics, promoviendo el cuidado del medio ambiente, la alfabetización científica emprendedora, se asuman ciudadanos con derechos y responsabilidades, sepan seguir aprendiendo, las cuales garantizan que nuestros estudiantes sean competitivos en su proyecto de vida y contribuyan al desarrollo del país, frente a los retos del mundo globalizado para alcanzar una sociedad justa.</p>
        </div>
    </section>

<!-- VALORES -->
   <section class="values-section">
        <h1 class="title">NUESTROS VALORES</h1>
        <div class="values-container">
            <div class="value-card">
                <div class="front">
                    <div class="circle">1</div>
                    <img src="img/justa.png" alt="Imagen 1">
                    <p>Etica</p>
                </div>
                <div class="back">
                    <p>Inspira una educación promotora de los valores de paz, solidaridad, justicia, libertad, honestidad, tolerancia, responsabilidad, trabajo, verdad y pleno respeto a las normas de convivencia.</p>
                </div>
            </div>
            <div class="value-card">
                <div class="front">
                    <div class="circle">2</div>
                    <img src="img/equidad-educativa.png" alt="Imagen 2">
                    <p>Equidad</p>
                </div>
                <div class="back">
                    <p>Garantiza a todos iguales oportunidades de acceso, permanencia y trato en un sistema educativo de calidad.</p>
                </div>
            </div>
            <div class="value-card">
                <div class="front">
                    <div class="circle">3</div>
                    <img src="img/sociologia.png" alt="Imagen 3">
                    <p>Interculturalidad</p>
                </div>
                <div class="back">
                    <p>La diversidad cultural, étnica y lingüística del país es una riqueza que, a través del reconocimiento, el respeto y el aprendizaje mutuo, fomenta la convivencia armónica y el interca.</p>
                </div>
            </div>         
          <div class="value-card">
                <div class="front">
                    <div class="circle">4</div>
                    <img src="img/control-de-calidad.png" alt="Imagen 3">
                    <p>Calidad</p>
                </div>
                <div class="back">
                    <p>Asegura condiciones adecuadas para una educación integral, pertinente, abierta, flexible y permanente</p>
                </div>
            </div> 
          <div class="value-card">
                <div class="front">
                    <div class="circle">5</div>
                    <img src="img/votacion.png" alt="Imagen 3">
                    <p>Democracia</p>
                </div>
                <div class="back">
                    <p> Fomenta el respeto a los derechos humanos, la libertad de pensamiento y opinión, y el ejercicio pleno de la ciudadanía. Además, promueve la tolerancia y el fortalecimiento del Estadoo de Derecho.</p>
                </div>
            </div> 
          <div class="value-card">
                <div class="front">
                    <div class="circle">6</div>
                    <img src="img/inclusion.png" alt="Imagen 3">
                    <p>Inclusion</p>
                </div>
                <div class="back">
                    <p>Incluye a personas con discapacidad y grupos vulnerables, especialmente en áreas rurales, sin distinción, para reducir la pobreza, la exclusión y las desigualdades.</p>
                </div>
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