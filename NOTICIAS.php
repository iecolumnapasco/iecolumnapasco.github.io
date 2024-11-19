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
    <title>ESTUDIANTE</title>
</head>
<body>
<!-- NOTICIAS -->
<section class="noti">
    <h2 class="ti_noti">ÚLTIMAS NOTICIAS</h2>
    <div class="noticias"> <!-- Cambiado aquí -->
        <article class="noticia">
            <img src="img/not_01.jpg" alt="Noticia 1">
            <h3>16-mayo-2024</h3>
            <p>Más de 20 colegios de Pasco participan en Programa Educativo y concurso “Gota de Oro” de Sunass.</p>
            <a href="https://via.placeholder.com/100" alt="Imagen 2">
                <a href="https://www.gob.pe/institucion/sunass/noticias/955459-mas-de-20-colegios-de-pasco-participan-en-programa-educativo-y-concurso-gota-de-oro-de-sunass" class="btn">Leer más</a>
        </article>
        <article class="noticia">
            <img src="img/not_02.jpg" alt="Noticia 2">
            <h3>07-mayo-2024</h3>
            <p>Gobierno Regional rinde homenaje a la heroica Columna Pasco.</p>
            <a href="https://www.gob.pe/institucion/regionpasco/noticias/950369-gobierno-regional-rinde-homenaje-a-la-heroica-columna-pasco" class="btn">Leer más</a>
        </article>
        <article class="noticia">
            <img src="img/not_03.jpg" alt="Noticia 3">
            <h3>26-septiembre-2023</h3>
            <p>Colegio de Colquijirca y Columna Pasco gana concurso de panacarta y abile urbano por el Día Mundial de la Prevención del Emabarazo en Adolescentes.</p>
            <a href="https://drepasco.gob.pe/colegio-de-colquijirca-y-columna-pasco-ganan-concurso-de-pancarta-y-baile-urbano-por-el-dia-mundial-de-la-prevencion-del-embarazo-en-adolescentes/" class="btn">Leer más</a>
        </article>
         <article class="noticia">
            <img src="img/not_04.jpg" alt="Noticia 4">
            <h3>20-septiembre-2023</h3>
            <p>DRE Pasco promueve regala un abarzo y salva una vida en la Institución Educativa Columna Pasco.</p>
            <a href="https://drepasco.gob.pe/dre-pasco-promueve-regala-un-abrazo-y-salva-una-vida-en-la-institucion-educativa-columna-pasco/" class="btn">Leer más</a>
        </article>
          <article class="noticia">
            <img src="img/not_05.jpg" alt="Noticia 5">
            <h3>30-noviembre-2022</h3>
            <p>  II.EE. Nº 35756 Columna Pasco ahora es parte del proyecto "Sonrisas sanas futuros brillantes".</p>
            <a href="https://ugelpasco.edu.pe/2022/11/30/%EF%BF%BCii-ee-no-35756-columna-pasco-ahora-es-parte-del-proyecto-sonrisas-sanas-futuros-brillantes%EF%BF%BC/" class="btn">Leer más</a>
        </article>
          <article class="noticia">
            <img src="img/not_06.jpg" alt="Noticia 6">
            <h3>01-noviembre-2019</h3>
            <p>Corte de Pasco juramentó a jueza de paz escolar del colegio "Columna Pasco".</p>
            <a href="http://www.pascolibre.com/2019/11/corte-de-pasco-juramento-jueza-de-paz.html" target="_blank" class="btn">Leer más</a>
        </article>
          <article class="noticia">
            <img src="img/not_07.jpg" alt="Noticia 7">
            <h3>27-enero-2014</h3>
            <p>Defensoría del Pueblo advierte condicionamientos a la matrícula en el colegio “Columna Pasco”.</p>
            <a href="https://www.defensoria.gob.pe/defensoria-del-pueblo-advierte-condicionamientos-a-la-matricula-en-el-colegio-columna-pasco/" target="_blank" class="btn">Leer más</a>
        </article>
    </div>
</section>

<!-- CALENDARIO -->
<section class="calendar-section">
        <div class="calendar-left">
            <div class="title-c">
                <h1>CALENDARIO</h1>
                <p>Explore los eventos que se avecinan este año.</p>
            </div>
            <div class="date-navigation">
                <button class="nav-button" id="prev-date">◄</button>
                <button class="nav-button" id="next-date">►</button>
            </div>
        </div>
        <div class="calendar-right">
            <div class="photo-container">
                <div class="photo-item"> 
                    <img src="img/feliz-ano-nuevo (1).png" alt="Evento 1">
                    <h2>1 DE ENERO:</h2>
                    <h3>"AÑO NUEVO"</h3>
                    <p>Celebración del inicio del nuevo año con festividades que incluyen reuniones familiares, fuegos artificiales y celebraciones en toda la nación.</p>
                </div>
                <div class="photo-item">
                    <img src="img/rey.png" alt="Evento 2">
                    <h2>6 DE ENERO:</h2>
                    <h3>"FIESTA DE REYES"</h3>
                    <p>Conmemoración de la llegada de los Reyes Magos a Belén, con tradiciones como la repartición de regalos y la elaboración de roscas de reyes.</p>
                </div>
                <div class="photo-item">
                    <img src="img/afecto.png" alt="Evento 3">
                    <h2>14 DE FEBRERO:</h2>
                    <h3>"DÍA DE SAN VALENTÍN"</h3>
                    <p>Celebración del amor y la amistad con intercambios de tarjetas, flores y cenas románticas.</p>
                </div>
                <div class="photo-item">
                    <img src="img/mujer.png" alt="Evento 4">
                    <h2>8 DE MARZO:</h2>
                    <h3>"DÍA INTERNACIONAL DE LA MUJER"</h3>
                    <p>Conmemoración de los logros y luchas de las mujeres, con eventos y actividades que promueven la igualdad de género.</p>
                </div>
                <div class="photo-item">
                    <img src="img/salvar-el-agua.png" alt="Evento 4">
                    <h2>22 DE MARZO:</h2>
                    <h3>"DÍA MUNDIAL DEL AGUA"</h3>
                    <p>Concienciación sobre la importancia del agua y su conservación, con eventos educativos y actividades comunitarias.</p>
                </div>
                <div class="photo-item">
                    <img src="img/semana-santa (1).png" alt="Evento 4">
                    <h2>29 DE MARZO:</h2>
                    <h3>"VIERNES SANTO"</h3>
                    <p>Parte de la Semana Santa, conmemorando la crucifixión de Jesucristo con procesiones y ceremonias religiosas.</p>
                </div>
                <div class="photo-item">
                    <img src="img/semana-santa (2).png" alt="Evento 4">
                    <h2>30 DE MARZO:</h2>
                    <h3>"SABADO SANTO"</h3>
                    <p>Seguimiento del Viernes Santo, marcado por la vigilia y la celebración de la resurrección de Jesús.</p>
                </div>
                <div class="photo-item">
                    <img src="img/semana-santa (3).png" alt="Evento 4">
                    <h2>1-7 DE ABRIL:</h2>
                    <h3>"SEMANA SANTA"</h3>
                    <p>Serie de eventos religiosos y litúrgicos que recuerdan la pasión, muerte y resurrección de Jesús, con procesiones y celebraciones en todo el país.</p>
                </div>
                <div class="photo-item">
                    <img src="img/dia_tierra.png" alt="Evento 4">
                    <h2>22 DE ABRIL:</h2>
                    <h3>"DÍA DE LA TIERRA"</h3>
                    <p>Celebración de la protección del medio ambiente con actividades que promueven la sostenibilidad y el cuidado del planeta.</p>
                </div>
                <div class="photo-item">
                    <img src="img/idioma.png" alt="Evento 4">
                    <h2>23 DE ABRIL:</h2>
                    <h3>"DÍA DEL IDIOMA"</h3>
                    <p>Conmemoración de las lenguas española e indígena en Perú, destacando la riqueza lingüística del país.</p>
                </div>
                <div class="photo-item">
                    <img src="img/trabajo.png" alt="Evento 4">
                    <h2>1 DE MAYO:</h2>
                    <h3>"DÍA DEL TRABAJO"</h3>
                    <p>Conmemoración de los logros de los trabajadores con manifestaciones, eventos y celebraciones en honor a sus contribuciones.</p>
                </div>
                 <div class="photo-item">
                    <img src="img/niño.png" alt="Evento 4">
                    <h2>8 DE MAYO:</h2>
                    <h3>"DÍA DEL NIÑO"</h3>
                    <p>Celebración dedicada a los niños con actividades recreativas, regalos y eventos especiales en su honor.</p>
                </div>
                 <div class="photo-item">
                    <img src="img/medio-ambiente.png" alt="Evento 4">
                    <h2>5 DE JUNIO:</h2>
                    <h3>"DÍA MUNDIAL DEL MEDIO AMBIENTE"</h3>
                    <p>Concienciación sobre la protección del medio ambiente con eventos y actividades enfocadas en la sostenibilidad.</p>
                </div>
                <div class="photo-item">
                    <img src="img/bandera.png" alt="Evento 4">
                    <h2>7 DE JUNIO:</h2>
                    <h3>"DÍA DE LA BANDERA"</h3>
                    <p>Conmemora la Batalla de Arica y celebra el símbolo nacional del Perú. Se realizan actos cívicos y ceremonias para honrar la bandera y fomentar el orgullo patriótico.</p>
                </div>
                 <div class="photo-item">
                    <img src="img/dia-del-maestro.png" alt="Evento 4">
                    <h2>6 DE JULIO:</h2>
                    <h3>"DÍA DEL MAESTRO"</h3>
                    <p>Reconocer y celebrar el trabajo de los docentes, destacando su impacto en la educación y el desarrollo de los estudiantes.</p>
                </div>
                 <div class="photo-item">
                    <img src="img/independencia.png" alt="Evento 4">
                    <h2>28 DE JULIO:</h2>
                    <h3>"DÍA DE LA INDEPENDENCIA DEL PERÚ"</h3>
                    <p>Conmemoración de la independencia del país con desfiles, actos oficiales y celebraciones patrióticas.</p>
                </div>
                <div class="photo-item">
                    <img src="img/santa-rosa.png" alt="Evento 4">
                    <h2>30 DE AGOSTO:</h2>
                    <h3>"FIESTA DE SANTA ROSA DE LIMA"</h3>
                    <p> Conmemoración de la primera santa de América con celebraciones religiosas y eventos culturales en Lima.</p>
                </div>
                <div class="photo-item">
                    <img src="img/juventud.png" alt="Evento 4">
                    <h2>23 DE SETIEMBRE:</h2>
                    <h3>"DÍA DEL ESTUDIANTE"</h3>
                    <p>Celebración que honra a los estudiantes, destacando su importancia en la educación y sociedad.</p>
                </div>
                 <div class="photo-item">
                    <img src="img/musica-criolla.png" alt="Evento 4">
                    <h2>31 DE OCTUBRE:</h2>
                    <h3>"DÍA DE LA CANCIÓN CRIOLLA"</h3>
                    <p>Celebración de la música criolla peruana con conciertos, bailes y eventos musicales en todo el país.</p>
                </div>
                 <div class="photo-item">
                    <img src="img/todos-los-santos.png" alt="Evento 4">
                    <h2>1 DE NOVIEMBRE:</h2>
                    <h3>"DÍA DE TODOS LOS SANTOS"</h3>
                    <p>Conmemoración de todos los santos, con visitas a cementerios y eventos religiosos en honor a los difuntos.</p>
                </div>
                 <div class="photo-item">
                    <img src="img/los-muertos.png" alt="Evento 4">
                    <h2>2 DE NOVIEMBRE:</h2>
                    <h3>"DÍA DE LOS DIFUNTOS"</h3>
                    <p>Celebración en honor a los fallecidos con visitas a tumbas, ofrendas y eventos litúrgicos.</p>
                </div>
                 <div class="photo-item">
                    <img src="img/nochebuena.png" alt="Evento 4">
                    <h2>24 DE DICIEMBRE:</h2>
                    <h3>"NOCHEBUENA"</h3>
                    <p>Celebración de la víspera de Navidad con cenas familiares, intercambios de regalos y eventos festivos.</p>
                </div>
                 <div class="photo-item">
                    <img src="img/navidad.png" alt="Evento 4">
                    <h2>25 DE DICIEMBRE:</h2>
                    <h3>"NAVIDAD"</h3>
                    <p>Conmemoración del nacimiento de Jesús con celebraciones religiosas, familiares y festivas en todo el país.</p>
                </div>
                 <div class="photo-item">
                    <img src="img/fin-de-año.png" alt="Evento 4">
                    <h2>31 DE DICIEMBRE::</h2>
                    <h3>"FIN DE AÑO"</h3>
                    <p>Celebración del final del año con fiestas, fuegos artificiales y eventos que marcan la transición al nuevo año.</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        /* NOTICIAS */
        let currentIndex = 0;
        const items = document.querySelectorAll('.photo-item');
        const totalItems = items.length;

        function updatePosition() {
            const container = document.querySelector('.photo-container');
            const offset = -currentIndex * 100;
            container.style.transform = `translateX(${offset}%)`;
        }
        document.getElementById('prev-date').addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalItems - 1;
            }
            updatePosition();
        });
        document.getElementById('next-date').addEventListener('click', () => {
            if (currentIndex < totalItems - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updatePosition();
        });
    </script>

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