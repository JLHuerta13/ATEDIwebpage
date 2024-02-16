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

	if ($_FILES['archivo']['error'] == 0) { //Valida si no hay errores
		$dir = "../files/"; //Directorio de carga
		$tamanio = 40000; //Tamaño permitido en kb
		$permitidos = array('pdf','jpg','png','mp3','docx'); //Archivos permitido
		$ruta_carga = $dir . $_FILES['archivo']['name'];

        $Type = extractFileType($_FILES['archivo']['name'],".");
        $NameFile = str_replace(".".$Type,"",$_FILES['archivo']['name']);
        $Categoria = $_POST["Categoria"];
        $Descripcion =$_POST["Descripcion"];
		//Obtenemos la extensión del archivo
		$arregloArchivo = explode(".", $_FILES['archivo']['name']);
		$extension = strtolower(end($arregloArchivo));
        
		
		if (in_array($extension, $permitidos)) { //Valida si la extensión es permitida
			
			if ($_FILES['archivo']['size'] < ($tamanio * 1024)) { //Valida el tamaño
				
				//Valida si no existe la carpeta y la crea
				if (!file_exists($dir)) {
					mkdir($dir, 0777);
				}
				//AQUI SE SUBE EL ARCHIVO AL SERVER Y A LA BASE DATOS
				if (move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_carga)) {
                        
                        $sql = "INSERT INTO info_material (`nombre`, `categoria`, `descripcion`, `tipo`, `ruta`)
                        VALUES ('$NameFile', '$Categoria', '$Descripcion', '$Type','$ruta_carga')";

                        if ($conn->query($sql) === TRUE) {
                        echo "El archivo se cargó correctamente";
                        } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        }
					} else {
					echo "Error al cargar archivo";
				}
				} else {
				echo "Archivo excede el tamaño permitido";
			}
			} else {
			echo "Archivo no permitido";
		}
		} else {
		echo "No enviaste archivo";
	}

    function extractFileType ($string,$character)
    {
        $position = strpos($string, $character);

        // If the character is found
        if ($position !== false) {
            // Extract the substring from the character's position to the end of the string
            $substring = substr($string, $position+1);
            return $substring; // Output will be "a sample string"
        } else {
            return "null";
        }
    }