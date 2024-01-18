<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual ATEDI</title>
    <link rel="stylesheet" href="fileStyles.css">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
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
    ?>

    <!--   Header - menu    -->
    <header>
        <div class="header-content">
            <div class="logo">
                <img class="logo" src="img/10_jess_logo_atedi_COLOR.png" alt="..." >
                <h1>Biblioteca Virtual</h1>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li class="menu-selected"><a href="#" class="menu-selected">Textos adaptados</a></li>
                        <li class="menu-selected"><a href="#" class="menu-selected">Audiolibros</a></li>
                        <li class="menu-selected"><a href="#" class="menu-selected">Documentales</a></li>
                        <li class="menu-selected"><a href="#" class="menu-selected">Películas y series</a></li>
                    </ul>
                </nav>
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

    <div class="container-lista">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Descarga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Consulta SQL para obtener información del material
                $sql = "SELECT * FROM info_material";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["categoria"] . "</td>";
                        echo "<td>" . $row["descripcion"] . "</td>";
                        echo "<td>" . $row["tipo"] . "</td>";
                        echo "<td><a href='" . $row["ruta"] . "' target='_blank'>Descargar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No se encontró ningún material.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>



    <span>
        ______________________________________________
    </span>
    <span>
        ______________________________________________
    </span>
    <span>
        ______________________________________________
    </span>

    <span>
        ______________________________________________
    </span>

    <!--
        OPCION 2
    -->
    <div class="containerList">
        <div id="contenedorArchivos"></div>

    <script src="archivos.js"></script>

    <script>
        // Llamada a la función para mostrar los archivos al cargar la página
        window.onload = function() {
          mostrarArchivos();
        }
      </script>
    </div>
    

</body>
</html>