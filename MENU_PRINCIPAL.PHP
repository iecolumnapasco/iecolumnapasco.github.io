<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- Menú principal -->
    <header class="menu-principal">
        <div class="columna-pasco">
            <img src="img/escudo-cp.png" alt="Columna Pasco">
            <h1>COLUMNA PASCO</h1>
        </div>
        <nav class="menu-desplegable">
            <ul>
                <li>
                    <a href="INDEX.php">Inicio</a>
                </li>
                <li>
                    <a href="#">¿Quiénes somos?<strong>▼</strong></a>
                    <ul>
                        <li><a href="DATOS_INFORMATIVOS.php">Datos Informativos</a></li>
                        <li><a href="MISION_Y_VISION.php">Misión y Visión</a></li>
                        <li><a href="OBJETIVOS_INSTITUCIONALES_Y_METAS.php">Objetivos Institucionales y Metas</a></li>
                        <li><a href="EQUIPO_DIRECTIVO.php">Equipo Directivos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Comunidad Educativa<strong>▼</strong></a>
                    <ul>
                        <li><a href="ESTUDIANTES.php">Estudiantes</a></li>
                        <li><a href="PADRES.php">Padres de Familia</a></li>                 
                        <li><a href="EXALUMNOS.php">Exalumnos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="NOTICIAS.php">Noticias</a>
                </li>
                <li>
                    <a href="CONTACTANOS.php">Contáctanos</a>
                </li>
            </ul>
        </nav>
    </header>
<!-- Slider de imágenes -->
     <div class="slider-container">
        <div class="slider">
            <div class="slide" id="slide-1">
                <img src="img/menu_principal.jpeg" alt="Imagen 1" >
            </div>
            <div class="slide" id="slide-2">
                <img src="img/menu_principal_04.jpeg" alt="Imagen 2">
            </div>
            <div class="slide" id="slide-3">
                <img src="img/menu_principal_06.png" alt="Imagen 3" >
            </div>
        </div>
       
        <div class="controls">
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>
      <div class="container_frase">
        <h1 class="lema">SOMOS UNA INSTITUCIÓN DE :</h1>
        <div class="transition-words_f">
            <span class="word">Honor  </span>
        </div>
       <div class="transition-words1_f">
            <span class="word1">Lealtad  </span>
          </div>
          <div class="transition-words2_f">
            <span class="word2">Excelencia  </span>
        </div>
    </div>
    <script>
        let currentSlide = 0;
        function moveSlide(n) {
        const slides = document.querySelectorAll('.slide');
        currentSlide = (currentSlide + n + slides.length) % slides.length;
        document.querySelector('.slider').style.transform = `translateX(${-currentSlide * 100}%)`;
        }
    </script> 
</body>
</html>