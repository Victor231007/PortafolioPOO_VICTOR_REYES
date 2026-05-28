<?php

$nombreArchivo = "asistentes.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombres = $_POST["nombres"];

    try {

        // abrir archivo en modo agregar
        $RArchivo = fopen($nombreArchivo, "a");

        if (!$RArchivo) {
            throw new Exception("No se pudo abrir el archivo.");
        }

        // separar nombres por líneas
        $listaNombres = explode("\n", $nombres);

        // recorrer nombres
        foreach ($listaNombres as $nombre) {

            $nombre = trim($nombre);

            if (!empty($nombre)) {
                fwrite($RArchivo, $nombre . PHP_EOL);
            }
        }

        fclose($RArchivo);

        echo "<h3>Nombres guardados correctamente.</h3>";

    } catch (Exception $e) {

        echo "Ocurrió un error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Asistentes</title>
</head>
<body>

<h2>Registro de Asistentes</h2>

<form method="POST">

    <label>Ingresa los nombres (uno por línea):</label>
    <br><br>

    <textarea name="nombres" rows="10" cols="40"></textarea>

    <br><br>

    <button type="submit">Guardar</button>

</form>

</body>
</html>