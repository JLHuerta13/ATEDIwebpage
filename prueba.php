<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual ATEDI</title>
    <link rel="stylesheet" href="css/biblioteca.css">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            text-decoration: rgb(255, 255, 255);
        }

        th {
            background-color: #ff2fba;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Estilos para la paginación */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            padding: 8px;
            margin: 0 5px;
            text-decoration: none;
            border: 1px solid #007bff;
            border-radius: 5px;
            cursor: pointer;
        }

        .pagination a:hover {
            background-color: #F50087;
            color: #fff;
        }

        .pagination a:visited {
            color: #007bff;
        }

        .pagination a.current {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

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

    // Consulta SQL para obtener información del material
    $resultados_por_pagina = 10;
    $sql = "SELECT * FROM info_material";
    $result = $conn->query($sql);
    $total_resultados = $result->num_rows;

    $total_paginas = ceil($total_resultados / $resultados_por_pagina);

    $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
    $offset = ($pagina_actual - 1) * $resultados_por_pagina;

    $sql = "SELECT * FROM info_material LIMIT $offset, $resultados_por_pagina";
    $result = $conn->query($sql);

    ?>

    <!--   Header - menu    -->
    <header>
        <div class="header-content">
            <div class="logo">
                <button class="custom-button"><a href="index2.php"><img class="logo"
                            src="img/10_jess_logo_atedi_COLOR.png" alt="Ir al inicio"></a></button>
                <!--<img class="logo" src="img/10_jess_logo_atedi_COLOR.png" alt="..." > -->
                <h1>Biblioteca Virtual</h1>
            </div>
        </div>
    </header>

    <!--   Portada    -->
    <div class="container-cover">
        <div class="container-info-cover">
            <h1>Biblioteca Virtual ATEDI</h1>
            <p>Audiolibros, material adaptado, entretenimiento y más... </p>
        </div>
    </div>
    <div class="box">
        <div class="container-instrucciones">
            <h1>
                Instrucciones para navegación en la tabla de contenido bibliográfico: <br><br>
            </h1>
            <p>
                Para acceder al cuadro de edición para buscar archivos, pulsa la tecla E. Después de escribir tu
                petición, pulsa la tecla Enter. <br><br>
                Para acceder a la tabla, pulsa la tecla T. <br><br>
                Para desplazarte en la tabla, pulsa la tecla Control + Alt y utiliza las flechas del teclado. <br><br>
                Para dirigirte a los enlaces para abrir o descargar un archivo, pulsa la tecla K. <br><br>

            </p>
        </div>
    </div>

    <!--   Buscador    -->
    <div class="container-buscador">
        <form action="" method="GET">
            <input type="text" name="buscar" placeholder="Buscar por nombre, categoría, descripción o tipo...">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <?php
    // Consulta SQL para obtener información del material con búsqueda
    if (isset($_GET['buscar'])) {
        $buscar = $conn->real_escape_string($_GET['buscar']);

        // Buscar en todas las columnas relevantes
        $sql = "SELECT * FROM info_material WHERE 
            nombre LIKE '%$buscar%' OR 
            categoria LIKE '%$buscar%' OR 
            descripcion LIKE '%$buscar%' OR 
            tipo LIKE '%$buscar%'";

        $result = $conn->query($sql);
        $total_resultados = $result->num_rows;

        // Calcular el número total de páginas
        $total_paginas = ceil($total_resultados / $resultados_por_pagina);
    } else {
        // Consulta sin búsqueda, aplicar paginación
        $sql = "SELECT * FROM info_material LIMIT $offset, $resultados_por_pagina";
    }

    $result = $conn->query($sql);
    ?>

    <!--   Contenido de la tabla    -->
    <div class="container-lista">
        <table style="width: 85%; margin: auto; margin-top: 100px; margin-bottom: 100px; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Abrir archivo</th>
                    <th>Descargar archivo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Consulta SQL para obtener información del material
                if ($total_resultados > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["categoria"] . "</td>";
                        echo "<td>" . $row["descripcion"] . "</td>";
                        echo "<td>" . $row["tipo"] . "</td>";
                        echo "<td><a href='" . $row["ruta"] . "' target='_blank'>Abrir</a></td>";
                        echo "<td><a href='" . $row["ruta"] . "' download>Descargar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No se encontró ningún material.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Paginación -->
        <div class="pagination">
            <?php
            for ($i = 1; $i <= $total_paginas; $i++) {
                echo '<a href="?pagina=' . $i . '" class="' . ($i == $pagina_actual ? 'current' : '') . '">Página ' . $i . '</a>';
            }
            ?>
        </div>

    </div>

    <footer class="footer">
        <div class="footer-columns">
            <div class="footer-column">
                <h3>Contacto</h3>
                <p>Dirección: Universidad 231, Cerro de las Campanas S/N, Las Campanas, 76010 Santiago de Querétaro,
                    Qro.</p>
                <p>Teléfono: +52 442 192 1200 Ext. 3104</p>
                <p>Correo Electrónico: admon.atedi@uaq.edu.mx</p>
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