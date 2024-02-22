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
    $password = ""; // Contraseña de la base de datosC
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
                <button class="custom-button"><a href="#"><img class="logo-img" src="img/10_jess_logo_atedi_COLOR.png"
                            alt="Ir al inicio"></a></button>
                <a href="">
                    <h1>Coordinación de Atención a Estudiantes con Discapacidad</h1>
                </a>
            </div>

            <div class="menu-principal">
                <nav>
                    <ul>
                        <li class="menu-principal-selected"><a href="#quienes_somos"
                                class="menu-principal-selected">¿Quiénes
                                somos?</a></li>
                        <li class="menu-principal-selected"><a href="#sala" class="menu-principal-selected">Sala
                                multifuncional</a></li>
                        <li class="menu-principal-selected"><a href="#deporte_adaptado"
                                class="menu-principal-selected">Deporte
                                Adaptado</a></li>
                        <li class="menu-principal-selected"><a href="#servicio_social"
                                class="menu-principal-selected">Servicio
                                Social</a></li>
                        <li class="menu-principal-selected"><a href="#tutorias"
                                class="menu-principal-selected">Tutorías</a>
                        </li>
                        <li class="menu-principal-selected"><a href="#cursos" class="menu-principal-selected">Cursos y
                                talleres</a></li>
                        <li class="menu-principal-selected"><a href="#admision" class="menu-principal-selected">Proceso
                                de
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
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-image">
                    <img src="img/Baner_ss.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-caption-container">
                    <div class="carousel-caption-text">
                        <h5>Realiza tu servicio social en la Coordinación de ATEDI</h5>
                        <p>Inscripciones abiertas</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image">
                    <img src="img/Baner_cursos y talleres.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-caption-container">
                    <div class="carousel-caption-text">
                        <h5>Conoce nuestros cursos y talleres</h5>
                        <p>Braille y Lengua de Señas Mexicana</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image">
                    <img src="img/Baner_golbol.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-caption-container">
                    <div class="carousel-caption-text">
                        <h5>Deporte Adaptado UAQ. Inscripciones abiertas para Golbol</h5>
                        <p>Clic para mas información</p>
                    </div>
                </div>
            </div>
        </div>
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
    </div>
    <section class="container" id="quienes_somos">
        <img src="img/10_jess_logo_atedi_COLOR.png" alt="" class="imagen">
        <h2 class="titulo">Inicio <br>¿Quiénes somos?</h2>
        <div class="box">
            <p>
                La Coordinación de Atención a Estudiantes con Discapacidad (ATEDI) busca disminuir las barreras de
                accesibilidad presentes en la discapacidad al
                gestionar los ajustes razonables necesarios que permitan igualdad de condiciones en
                comparación con sus pares sin discapacidad.
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
        <div class="gallery">
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Sala_multi/sala1.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Sala_multi/sala13.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Sala_multi/sala3.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
            </div>
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Sala_multi/sala4.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Sala_multi/sala2.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Sala_multi/sala12.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
            </div>
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Sala_multi/sala8.jpeg" alt="" style="width: 80%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Sala_multi/sala11.jpg" alt="" style="width: 100%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Sala_multi/sala9.jpeg" alt=""
                        style="margin-left: 70px; width: 80%; border-radius: 8px;">
                    <p class="description" style="margin-left:70px;">Descripción de la imagen</p>
                </div>
            </div>
        </div>
    </section>
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
        <div class="gallery">
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Deporte_adaptado/dep_adaptado10.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Deporte_adaptado/dep_adaptado11.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
            </div>
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Deporte_adaptado/dep_adaptado5.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Deporte_adaptado/dep_adaptado6.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Deporte_adaptado/dep_adaptado7.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Deporte_adaptado/dep_adaptado8.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Deporte_adaptado/dep_adaptado9.jpg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
            </div>
        </div>
    </section>
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
        <div class="gallery">
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container" style="margin-right: 0;">
                    <img src="img/Servicio/servicio1.jpg" alt=""
                        style="border-right: 20px; width: 80%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Servicio/servicio7.jpeg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Servicio/servicio3.jpg" alt="" style="width: 80%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
            </div>
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Servicio/servicio4.jpg" alt="" style="width: 70%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Servicio/servicio2.jpg" alt="" style="width: 80%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Servicio/servicio5.jpeg" alt="" style="width: 90%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
            </div>
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
        <div class="gallery">
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Tutorias/tutorias1.jpg" alt="" style="width: 60%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Tutorias/tutorias2.jpg" alt="" style="width: 60%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
            </div>
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Tutorias/tutorias3.jpeg" alt="" style="width: 60%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Tutorias/tutorias4.jpeg" alt="" style="width: 80%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container" id="cursos">
        <h2 class="titulo">Cursos y talleres </h2>
    </section>
    <section class="container" alt="Información sobre cursos disponibles">
        <ul class="course-info">
            <li>
                <strong>NOMBRE:</strong>
                "Pensamiento lógico-matemático para alumnos con
                discapacidad auditiva y discapacidad intelectuial"
            </li>
            <li class="elementos_cursos">
                <strong>HORARIO:</strong>
                Lunes y miércoles de 4:00pm a 6:00pm
            </li>
            <li>
                <strong>TOTAL HORAS:</strong>
                64 horas
            </li>
            <li>
                <strong>PERIODO:</strong>
                Enero - Mayo 2024
            </li>
            <li>
                <strong>DIRIGIDO A:</strong>
                Aspirantes y alumnos de la UAQ
            </li>
            <li>
                <strong>OBJETIVO:</strong>
                "Proporcionar a las y los aspirantes los conocimientos
                necesarios para que puedan nivelar sus conocimientos y
                competencias académicas para ingresar y desempeñarse
                exitosamente en alguno de los diferentes planes de estudio
                de la Universidad Autónoma de Querétaro"
            </li>
        </ul>
        <ul class="course-info">
            <li>
                <strong>NOMBRE:</strong>
                "Pensamiento lógico-matemático para alumnos con
                discapacidad visual"
            </li>
            <li>
                <strong>HORARIO:</strong>
                Martes de 4:00pm a 6:00pm
            </li>
            <li>
                <strong>TOTAL HORAS:</strong>
                36 horas
            </li>
            <li>
                <strong>PERIODO:</strong>
                Enero - Mayo 2024
            </li>
            <li>
                <strong>DIRIGIDO A:</strong>
                Aspirantes y alumnos de la UAQ
            </li>
            <li>
                <strong>OBJETIVO:</strong>
                "Proporcionar a las y los aspirantes los conocimientos
                necesarios para que puedan nivelar sus conocimientos y
                competencias académicas para ingresar y desempeñarse
                exitosamente en alguno de los diferentes planes de estudio
                de la Universidad Autónoma de Querétaro"
            </li>
        </ul>
        <ul class="course-info">
            <li>
                <strong>NOMBRE:</strong>
                "Español escrito para alumnos con
                discapacidad auditiva y discapacidad intelectual"
            </li>
            <li>
                <strong>HORARIO:</strong>
                Martes y jueves de 4:00pm a 6:00pm

            </li>
            <li>
                <strong>TOTAL HORAS:</strong>
                72 horas
            </li>
            <li>
                <strong>PERIODO:</strong>
                Enero - Mayo 2024
            </li>
            <li>
                <strong>DIRIGIDO A:</strong>
                Aspirantes y alumnos de la UAQ
            </li>
            <li>
                <strong>OBJETIVO:</strong>
                "Proporcionar a las y los aspirantes los conocimientos
                necesarios para que puedan nivelar sus conocimientos y
                competencias académicas para ingresar y desempeñarse
                exitosamente en alguno de los diferentes planes de estudio
                de la Universidad Autónoma de Querétaro"
            </li>
        </ul>
        <ul class="course-info">
            <li>
                <strong>NOMBRE:</strong>
                "Español escrito para alumnos con
                discapacidad visual"
            </li>
            <li>
                <strong>HORARIO:</strong>
                Jueves de 4:00pm a 6:00pm
            </li>
            <li>
                <strong>TOTAL HORAS:</strong>
                36 horas
            </li>
            <li>
                <strong>PERIODO:</strong>
                Enero - Mayo 2024
            </li>
            <li>
                <strong>DIRIGIDO A:</strong>
                Aspirantes y alumnos de la UAQ
            </li>
            <li>
                <strong>OBJETIVO:</strong>
                "Proporcionar a las y los aspirantes los conocimientos
                necesarios para que puedan nivelar sus conocimientos y
                competencias académicas para ingresar y desempeñarse
                exitosamente en alguno de los diferentes planes de estudio
                de la Universidad Autónoma de Querétaro"
            </li>
        </ul>
        <ul class="course-info">
            <li>
                <strong>NOMBRE:</strong>
                ORIENTACIÓN Y MOVILIDAD
            </li>
            <li>
                <strong>HORARIO POSIBLE:</strong>
                10 A 14 HORAS
            </li>
            <li>
                <strong>TOTAL HORAS:</strong>
                4
            </li>
            <li>
                <strong>PERIODO:</strong>
                1 DÍA
            </li>
            <li>
                <strong>DIRIGIDO A:</strong>
                ESTUDIANTES DE LOS PRIMEROS SEMESTRES DE LA CARRERA DE ARQUITECTURA.
            </li>
            <li>
                <strong>OBJETIVO:</strong>
                Obtener información para el diseño de espacios que faciliten la movilidad de personas con discapacidad
                motriz.
            </li>
        </ul>
        <ul class="course-info">
            <li>
                <strong>NOMBRE:</strong>
                ORIENTACIÓN Y MOVILIDAD
            </li>
            <li>
                <strong>HORARIO POSIBLE:</strong>
                10 A 14 HORAS
            </li>
            <li>
                <strong>TOTAL HORAS:</strong>
                4
            </li>
            <li>
                <strong>PERIODO:</strong>
                1 DÍA
            </li>
            <li>
                <strong>DIRIGIDO A:</strong>
                ESTUDIANTES DE LOS PRIMEROS SEMESTRES DE LA CARRERA DE INGENIERÍA CIVIL.
            </li>
            <li>
                <strong>OBJETIVO:</strong>
                Obtener información para el diseño de espacios que faciliten la movilidad de personas con discapacidad
                motriz para el diseño de ciudades amigables.
            </li>
        </ul>
    </section>
    <section class="container">
        <div class="gallery">
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Cursos/cursos1.jpeg" alt="" style="height: 80%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Cursos/cursos5.jpg" alt="" style="width: 90%; height: 70%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Cursos/cursos6.jpg" alt="" style="width: 80%; height: 80%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
            </div>
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Cursos/cursos3.jpg" alt="" style="width: 90%; height: 80%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Cursos/cursos2.jpg" alt="" style="width: 90%; height: 100%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Cursos/cursos4.jpeg" alt="" style="width: 90%; height: 80%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>

            </div>
        </div>
    </section>
    <br><br><br><br><br>
    <section class="container" id="admision">
        <h2 class="titulo">Proceso de admisión </h2>
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
        <div class="gallery">
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Admision/admision1.jpg" alt="" style="width: 40%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
            </div>
            <div class="small-images" style="display: flex; justify-content: space-around; margin-top: 10px;">
                <div class="image-container">
                    <img src="img/Admision/admision2.jpg" alt="" style="width: 80%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
                <div class="image-container">
                    <img src="img/Admision/admision3.jpg" alt="" style="width: 80%; border-radius: 8px;">
                    <p class="description">Descripción de la imagen</p>
                </div>
            </div>
        </div>
    </section>
    </section>
    <section class="container" id="volver_a_inicio">
        <div class="logo-principal">
            <button class="custom-button"><a href="#"><img class="logo-img" src="img/10_jess_logo_atedi_COLOR.png"
                        alt="Ir al inicio"></a></button>
            <a href="">
                <h1>Volver al inicio</h1>
            </a>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-columns">
            <div class="footer-column">
                <h3>Contacto</h3>
                <p>Dirección: Universidad 231, Cerro de las Campanas S/N, Las Campanas, 76010 Santiago de Querétaro,
                    Qro.</p>
                <p>Teléfono: +52 442 192 1200 Ext. 3104</p>
                <p>Correo Electrónico: admon.atedi@uaq.edu.mx</p>
                <a href="html/login.html">Administradores</a>
            </div>
            <div class="footer-column">
                <h3>Redes Sociales</h3>
                <ul class="social-links">
                    <li><img src="img/icons8-facebook-30.png" alt=""><a
                            href="https://www.facebook.com/atencionaladiscapacidadUAQ">Facebook</a></li>
                    <li><img src="img/icons8-tiktok-30.png" alt=""><a
                            href="https://www.tiktok.com/@atediuaq">Tik-Tok</a></li>
                    <li><img src="img/icons8-instagram-30.png" alt=""><a
                            href="https://www.instagram.com/atedi_uaq/">Instagram</a></li>
                    <li><img src="img/icons8-youtube-30.png" alt=""><a
                            href="https://www.youtube.com/@atediuaq">Youtube</a></li>
                    <li><img src="img/icons8-spotify-30.png" alt=""><a
                            href="https://open.spotify.com/show/5WG5po7CDHWdEDUhHfP4GE">Spotify</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>