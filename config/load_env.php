<?php
/**
 * load_env.php
 * Script para cargar variables de entorno desde un archivo .env
 */
$filePath = __DIR__ . '/../.env';
function loadEnv($filePath) {
    if (!file_exists($filePath)) {
        // Opcional: Manejar el caso en que el archivo no existe
        // echo "Advertencia: El archivo .env no se encontró en " . $filePath;
        return false;
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    foreach ($lines as $line) {
        // Ignorar comentarios
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Buscar el primer signo de igual para separar clave y valor
        list($name, $value) = explode('=', $line, 2);
        
        $name = trim($name);
        $value = trim($value);

        // Remover comillas si existen (manejo básico de cadenas)
        if (strlen($value) > 0 && in_array($value[0], ['"', "'"])) {
            $value = trim($value, "\"\'");
        }

        // Cargar en la superglobal $_ENV
        if (!array_key_exists($name, $_SERVER)) {
             $_ENV[$name] = $value;
             // Opcional: También se pueden cargar en $_SERVER
             // $_SERVER[$name] = $value; 
        }
    }
    return true;
}

// Llama a la función, especificando la ruta de tu archivo .env
// **IMPORTANTE:** Asegúrate de que la ruta sea correcta.
// Si este script está en la misma carpeta que el .env:
// loadEnv(__DIR__ . '/.env'); 
// Si .env está en la carpeta padre:
// loadEnv(__DIR__ . '/../.env'); 

?>