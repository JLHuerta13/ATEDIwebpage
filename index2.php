<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles2.css">
</head>

<!-- BARRA DE NAVEGACIÖN SUPERIOR  -->

<body>
    <?php
    // Datos de conexión a la base de datos (reemplaza con tus propios datos)
    $servername = "localhost"; // Nombre del servidor
    $username = "root"; // Nombre de usuario de la base de datos
    $password = ""; // Contraseña de la base de datos
    $dbname = "biblioteca_db"; // Nombre de la base de datos

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }
    ?>

    <!--   Header - menu    -->
    <header class="header-principal">
        <div class="header-principal-content">
            <div class="logo-principal">
                <button class="custom-button"><a href="#"><img class="logo-img" src="img/10_jess_logo_atedi_COLOR.png" alt="Ir al inicio"></a></button>
                <a href=""><h1>Coordinación de Atención a Estudiantes con Discapacidad</h1></a> 
            </div>
            
            <div class="menu-principal">
                <nav>
                    <ul>
                        <li class="menu-principal-selected"><a href="#quienes_somos" class="menu-principal-selected">¿Quiénes
                                somos?</a></li>
                        <li class="menu-principal-selected"><a href="#sala" class="menu-principal-selected">Sala
                                multifuncional</a></li>
                        <li class="menu-principal-selected"><a href="#deporte_adaptado" class="menu-principal-selected">Deporte
                                Adaptado</a></li>
                        <li class="menu-principal-selected"><a href="#servicio_social" class="menu-principal-selected">Servicio
                                Social</a></li>
                        <li class="menu-principal-selected"><a href="#tutorias" class="menu-principal-selected">Tutorías</a>
                        </li>
                        <li class="menu-principal-selected"><a href="#cursos" class="menu-principal-selected">Cursos y
                                talleres</a></li>
                        <li class="menu-principal-selected"><a href="#admision" class="menu-principal-selected">Proceso de
                                admisión</a></li>
                        <li class="menu-principal-selected"><a href="prueba.php"
                                class="menu-principal-selected">Biblioteca Virtual</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </header>


    <!-- CARRUSEL  -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/10_jess_logo_atedi_COLOR_horizontal.png" class="d-block w-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="titulo-slide">Diapositiva 1</h5>
                    <p>Este es el texto de la diapositiva 1</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/10_jess_logo_atedi_GRIS_horizontal.png" class="d-block w-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>DIapositiva 2</h5>
                    <p>Este es el texto de la diapositiva 2</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/10_jess_logo_atedi_NEGRO_horizontal.png" class="d-block w-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Diapositiva 3</h5>
                    <p>Este es el texto de la diapositiva 3</p>
                </div>
            </div>
        </div>
        <!--
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
        -->
    </div>

    <br><br><br><br><br>
    <section class="container" id="quienes_somos">
        <img src="img/10_jess_logo_atedi_NEGRO.png" alt="" class="imagen">
        <h2 class="titulo">Inicio <br>¿Quiénes somos?</h2>
        <div class="box">
            <p>
                La Coordinación de Atención a Estudiantes con Discapacidad es un espacio destinado a realizar un
                monitoreo de
                las y los estudiantes con Discapacidad a corto, mediano y largo plazo, durante su estancia en la
                Universidad
                Autónoma de Querétaro.
            </p>
        </div>
    </section>
    <section class="container">
        <h2 class="titulo">Objetivos: </h2>
        <div class="box">
            <p>
                - Dar acompañamiento académico durante su proceso de formación. <br>
                - Conocer y dar atención a las necesidades educativas. <br>
                - Establecer canales de comunicación con las y los docentes. <br>
                - Brindar información sobre trámites administrativos, escolares y académicos.

            </p>
        </div>
    </section>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <section class="container" id="sala">
        <h2 class="titulo">Sala Multifuncional </h2>
        <div class="box">
            <p>
                La Sala Multifuncional de Atención a la Discapacidad enfoca sus esfuerzos a innovar y producir
                herramientas
                adaptadas y ajustes razonables, a las necesidades de las y los estudiantes que viven con la condición de
                discapacidad visual, de manera que sean accesibles y gratuitas, que garanticen su derecho al acceso a la
                información y a una educación de calidad.
            </p>
        </div>
    </section>
    <section class="container">
        <div class="photos-container">
            <img src="img/10_jess_logo_atedi_NEGRO.png" alt="" class="">
            <img src="img/10_jess_logo_atedi_COLOR.png" alt="">
            <img src="img/10_jess_logo_atedi_GRIS.png" alt="">
        </div>
    </section>
    <br><br><br><br><br>
    <section class="container" id="deporte_adaptado">
        <h2 class="titulo">Deporte Adaptado </h2>
        <div class="box">
            <p>
                El proyecto inicia en el 2021 con la capacitación “Deporte Adaptado NIVEL 1” impartido por el Instituto
                del
                Deporte y Recreación del Estado de Querétaro (INDEREQ) y el Departamento de Deporte Adaptado, a 14
                alumnos
                de la licenciatura de Educación Física y Ciencias del Deporte de la facultad de Enfermería, UAQ. <br>

                Tras concluir la capacitación 8 alumnos se unen al servicio social de la coordinación y
                fungen como entrenadores en las disciplinas de Para Natación, Para Basquetbol,
                Para Taekwondo y Golboll. <br>

                Para el 8 de Abril del 2022 se llevó a cabo la inauguración de Deporte Adaptado UAQ,
                iniciando con los primeros 6 entrenadores del programa, en las disciplinas ya
                mencionadas. <br>

            </p>
        </div>
    </section>
    <section class="container">
        <div class="photos-container">
            <img src="img/10_jess_logo_atedi_NEGRO.png" alt="" class="">
            <img src="img/10_jess_logo_atedi_COLOR.png" alt="">
            <img src="img/10_jess_logo_atedi_GRIS.png" alt="">
        </div>
    </section>
    <br><br><br><br><br>
    <section class="container" id="servicio_social">
        <h2 class="titulo">Servicio Social </h2>
        <div class="box">
            <p>
                Aportar en la formación integral de las y los estudiantes prestadores de servicio mediante un
                acercamiento previo a la realidad del contexto laboral, reforzar la formación académica, adquirir
                conciencia sobre el entorno de otras personas, desarrollar valores, todo esto enfocado en materia de
                discapacidad.

            </p>
        </div>
    </section>
    <section class="container">
        <div class="photos-container">
            <img src="img/10_jess_logo_atedi_NEGRO.png" alt="" class="">
            <img src="img/10_jess_logo_atedi_COLOR.png" alt="">
            <img src="img/10_jess_logo_atedi_GRIS.png" alt="">
        </div>
    </section>
    <br><br><br><br><br>
    <section class="container" id="tutorias">
        <h2 class="titulo">Tutorías ATEDI </h2>
        <div class="box">
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, officia deserunt! Voluptates nobis eos
                corporis. Obcaecati recusandae rerum quos esse aperiam assumenda praesentium, corporis molestias
                nesciunt! Porro magni sapiente praesentium!
            </p>
        </div>
    </section>
    <section class="container">
        <div class="photos-container">
            <img src="img/10_jess_logo_atedi_NEGRO.png" alt="" class="">
            <img src="img/10_jess_logo_atedi_COLOR.png" alt="">
            <img src="img/10_jess_logo_atedi_GRIS.png" alt="">
        </div>
    </section>
    <br><br><br><br><br>
    <section class="container" id="cursos">
        <h2 class="titulo">Cursos y talleres </h2>
    </section>
    <section class="container" alt="Una tabla con todos los cursos disponibles">
    <div class="table-responsive">
        <table class="table table-striped" >
            <thead alt ="Encabezados">
                <tr>
                <th scope="col">NOMBRE</th>
                <th scope="col">HORARIO POSIBLE</th>
                <th scope="col">TOTAL HORAS</th>
                <th scope="col">PERIODO</th>
                <th scope="col">DIRIGIDO A</th>
                <th scope="col">OBJETIVO</th>
                </tr>
            </thead>
            <tbody alt ="Contenido de la tabla">
                <tr alt ="Fila 1">
                <td>BRAILLE</td>

                <td>08 A 10 HORAS</td>
                <td>25</td>
                <td>ENERO-JULIO</td>
                <td>DOCENTES</td>
                <td>Proporcionar una herramienta a los docentes, para sepan como pueden apoyar a los estudiantes durante sus clases</td>
                </tr>
                <tr alt ="Fila 2">              
                <td>HACIA UNA TUTORÍA INCLUSIVA</td>

                <td>11 A 12 HORAS</td>
                <td>25</td>
                <td>MAYO - JUNIO</td>
                <td>DOCENTES, AUTORIDADES ACADÉMICAS</td>
                <td>Sensibilizar en torno a los requerimientos de los estudiantes que tienen alguna discapacidad; brindar información de lo que hace ATEDI y como la Coordinación puede ayudarles en su labor académica</td>
                </tr>
                <tr alt ="Fila 3">
                <td>LENGUA DE SEÑAS MEXICANA</td>

                <td>16 A 18 HORAS</td>
                <td>25</td>
                <td>ENERO-JULIO</td>
                <td>COMUNIDAD UNIVERSITARIA</td>
                <td>A integrantes de la comunidad universitaria interesados en aprender otra lengua de comunicación, que les permita el contaco con compañeros y miembros de la comunidad sorda.</td>
                </tr>
                <tr alt ="Fila 4">
                <td>CURSO DE REGULARIZACIÓN EN LAS MATERIAS DE ESPAÑOL Y MATEMÁTICAS.</td>

                <td>13 A 16 HORAS</td>
                <td>25</td>
                <td>ENERO-JULIO</td>
                <td>COMUNIDAD CIEGA</td>
                <td>Indentificar y apoyar a los aspirantes a presentar su examen EXCOBA para nievel bachillerato o licenciatura.</td>
                </tr>

                <tr alt ="Fila 5">              
                <td>ORIENTACIÓN Y MOVILIDAD</td>

                <td>10 A 14 HORAS</td>
                <td>4</td>
                <td>1 DÍA</td>
                <td>ESTUDIANTES DE LOS PRIMEROS SEMESTRES DE LA CARRERA DE ARQUITECTURA.</td>
                <td>Obtener información para el diseño de espacios que faciliten la movilidad de personas con discapacidad motriz</td>
                </tr>
                <tr alt ="Fila 6">
                <td>ORIENTACIÓN Y MOVILIDAD</td>

                <td>10 A 14 HORAS</td>
                <td>4</td>
                <td>1 DÍA</td>
                <td>ESTUDIANTES DE LOS PRIMEROS SEMESTRES DE LA CARRERA DE INGENIERÍA CIVIL.</td>
                <td>Obtener información para el diseño de espacios que faciliten la movilidad de personas con discapacidad motriz para el diseño de ciudades amigables.</td>
                </tr>
                <tr>
            </tbody>
        </table>
        </div>
    </section>
    <br><br><br><br><br>
    <section class="container" id="admision">
        <h2 class="titulo">Proceso de admisión </h2>
        <div class="box">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quasi est error quos, ut culpa suscipit
                omnis veritatis porro excepturi sint a dignissimos, quae numquam ea, incidunt tempora voluptatibus?
                Esse?
            </p>
        </div>
    </section>
    <section class="container">
        <div class="photos-container">
            <img src="img/10_jess_logo_atedi_NEGRO.png" alt="" class="">
            <img src="img/10_jess_logo_atedi_COLOR.png" alt="">
            <img src="img/10_jess_logo_atedi_GRIS.png" alt="">
        </div>
    </section>
    <section class="container" id="volver_a_inicio">
        <div class="logo-principal">
                <button class="custom-button"><a href="#"><img class="logo-img" src="img/10_jess_logo_atedi_COLOR.png" alt="Ir al inicio"></a></button>
                <a href=""><h1>Volver al inicio</h1></a> 
            </div>
    </section>
    <footer class="footer">
        <div class="footer-columns">
            <div class="footer-column">
                <h3>Contacto</h3>
                <p>Dirección: Universidad 231, Cerro de las Campanas S/N, Las Campanas, 76010 Santiago de Querétaro, Qro.</p>
                <p>Teléfono: +52 442 192 1200  Ext. 3104</p>
                <p>Correo Electrónico: admon.atedi@uaq.edu.mx</p>
            </div>
            <div class="footer-column">
                <h3>Redes Sociales</h3>
                <ul class="social-links">
                    <li><img src="img/icons8-facebook-30.png" alt=""><a href="https://www.facebook.com/atencionaladiscapacidadUAQ">Facebook</a></li>
                    <li><img src="img/icons8-tiktok-30.png" alt=""><a href="https://www.tiktok.com/@atediuaq">Tik-Tok</a></li>
                    <li><img src="img/icons8-instagram-30.png" alt=""><a href="https://www.instagram.com/atedi_uaq/">Instagram</a></li>
                    <li><img src="img/icons8-youtube-30.png" alt=""><a href="https://www.youtube.com/@atediuaq">Youtube</a></li>
                    <li><img src="img/icons8-spotify-30.png" alt=""><a href="https://open.spotify.com/show/5WG5po7CDHWdEDUhHfP4GE">Spotify</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>