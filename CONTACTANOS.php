<?php
    require ("MENU_PRINCIPAL.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>DATOS INFORMATIVOS</title>
</head>
<body>
<!-- INFORMACIÒN -->
    <section class="info-section-ct">
        <h1 class="title-ct">Si tienes preguntas o buscas obtener más información</h1>
        <div class="info-boxes-ct">
            <div class="info-box-ct">
                <h2 class="box-title-ct">Escríbenos a:</h2>
                <p class="box-content-ct">instedu_columnapasco@hotmail.com</p>
            </div>
            <div class="info-box-ct">
                <h2 class="box-title-ct">Ubícanos:</h2>
                <p class="box-content-ct">Av. Paseo de Los Vecendores,Cerro De Pasco-19001</p>
            </div>
        </div>
    </section>

<!-- MAPA -->
   <section class="map-section">
            <p class="tamano_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4195.8866983198595!2d-76.26103795045763!3d-10.665440610558559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910812b03d298f6d%3A0xc477fe2c71d280a9!2sColegio%20Columna%20Pasco%2C%20Cerro%20De%20Pasco%2019001!5e1!3m2!1ses-419!2spe!4v1726047156077!5m2!1ses-419!2spe"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
    </section>

<!-- CONTACTAR -->
    <section id="contacto">
        <h2>DEJANOS UN MENSAJE</h2>
        <form action="instedu_columnapasco@hotmail.com" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
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

<!--PIE DE PAGINA-->
    <footer class="boby_pie">
        <div class="contai_pie">
            <div class="footer_content">
                <h4>Visitanos:</h4>
                <p><strong>HOTMAIL:</strong> instedu_columnapasco@hotmail.com</p>
                <p><strong>DIRECCIÒN:</strong>  Av. Paseo de Los Vecendores,Cerro De Pasco-19001</p>
            </div>
            <div class="footer_content">
                <h4>Menú</h4>
                 <ul class="list">
                    <li><a href="INICIO.php">Inicio</a></li>
                    <li><a href="DATOS_INFORMATIVOS.php">¿Quienes Somos?</a></li>
                    <li><a href="ESTUDIANTES.php">Comunidad Educativa</a></li>
                    <li><a href="NOTICIAS.php">Noticias</a></li>
                    <li><a href="CONTACTANOS.php">Contáctanos</a></</li>
                 </ul>
            </div>
            <div class="footer_content">
                <h4>Síguenos:</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/columnapasco40/?locale=es_ES"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.tiktok.com/discover/columna-pasco-colegio"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
        <div class="bottom_bar">
            <p>&copy; 2024 Todos los Derechos Reservados - I.E. "Columna Pasco"</p>
        </div>
    </footer>
</body>
</html>