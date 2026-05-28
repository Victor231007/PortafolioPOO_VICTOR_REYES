<?php

// Nombre del archivo
$archivo = "asistentes.txt";

try {

    // Verificar si el archivo existe
    if (!file_exists($archivo)) {
        throw new Exception("El archivo no existe.");
    }

    // Abrir el archivo para lectura
    $fp = fopen($archivo, "r");

    // Verificar si se pudo abrir
    if (!$fp) {
        throw new Exception("No se pudo abrir el archivo para lectura.");
    }

    // Título
    echo "<h2>Lista de asistentes</h2>";

    // Inicio de lista ordenada
    echo "<ol>";

    // Leer línea por línea
    while (!feof($fp)) {

        // Leer una línea
        $linea = fgets($fp);

        // Evitar líneas vacías
        if (trim($linea) != "") {

            // Mostrar nombre
            echo "<li>" . htmlspecialchars(trim($linea)) . "</li>";
        }
    }

    // Cerrar lista
    echo "</ol>";

    // Cerrar archivo
    fclose($fp);

} catch (Exception $e) {

    // Mostrar error
    echo "Error: " . $e->getMessage();
}

?>