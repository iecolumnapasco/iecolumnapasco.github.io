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
<!-- UNIFORME ESCOLAR -->
    <section class="animated-section">
        <div class="content_u">
            <h1 class="main-title-uniforme">UNIFORME ESCOLAR</h1>
            <div class="additional-content">
                <h2 class="sub-title">DAMA:</h2>
                    <img src="img/uniforme_dama_01.jpeg" alt="Imagen" class="main-image">
                    <img src="img/uniforme_dama_02.jpeg" alt="Imagen" class="main-image">
                    <div class="boxes-container">
                        <div class="box box-1"><p>Falda escolar segun modelo</p></div>
                        <div class="box box-2"><p>Camisa Blanca</p></div>
                        <div class="box box-3"><p>Chompa</p></div>
                        <div class="box box-4"><p>Medias y/o panty azul oscuro</p></div>
                        <div class="box box-5"><p>Corbata azul marino</p></div>
                        <div class="box box-6"><p>Cabello trenzado con listòn celeste</p></div>
                        <div class="box box-7"><p>Casaca azul marino</p></div>
                        <div class="box box-8"><p>Calzado escolar negro</p></div>
                    </div>
            </div>
            <div class="additional-content">
                    <h2 class="sub-title">CABALLERO:</h2>
                    <img src="img/uniforme_hombre_01.jpeg" alt="Imagen" class="main-image">
                    <img src="img/uniforme_hombre_02.jpeg" alt="Imagen" class="main-image">
                        <div class="boxes-container">
                            <div class="box box-1"><p>Pantalon azul marino</p></div>
                            <div class="box box-2"><p>Medias azul marino</p></div>
                            <div class="box box-3"><p>Camisa blanca</p></div>
                            <div class="box box-4"><p>Compa celeste</p></div>
                            <div class="box box-5"><p>Corbata azul marino</p></div>
                            <div class="box box-6"><p>Casaca azul marino</p></div>
                            <div class="box box-7"><p>Calzado escolar negro</p></div>
                            <div class="box box-8"><p>Cabello corto escolar</p></div>
                        </div>
            </div>
            <div class="additional-content">
                    <h2 class="sub-title">UNIFORME DEPORTIVO:</h2>
                    <img src="img/buzo_dama.jpeg" alt="Imagen" class="main-image">
                    <img src="img/buzo_hombre.jpeg" alt="Imagen" class="main-image">
                        <div class="boxes-container">
                            <div class="box box-1"><p>Buzo azul marino de la instituciòn</p></div>
                            <div class="box box-2"><p>Zapatillas y medias blancas</p></div>
                        </div>
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