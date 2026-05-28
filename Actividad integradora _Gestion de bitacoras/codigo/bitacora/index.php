<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $actividad = $_POST['actividad'];
    $responsable = $_POST['responsable'];
    $fecha = $_POST['fecha'];

    if(empty($actividad) || empty($responsable) || empty($fecha)) {

        echo "Todos los campos son obligatorios";

    } else {

        $texto = "Fecha: $fecha\n";
        $texto .= "Actividad: $actividad\n";
        $texto .= "Responsable: $responsable\n";
        $texto .= "----------------------\n";

        file_put_contents("bitacora.txt", $texto, FILE_APPEND);

        echo "Actividad guardada";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bitácora</title>
</head>
<body>

<h2>Registro de Bitácora</h2>

<form method="POST">

    <label>Actividad:</label><br>
    <input type="text" name="actividad"><br><br>

    <label>Responsable:</label><br>
    <input type="text" name="responsable"><br><br>

    <label>Fecha:</label><br>
    <input type="date" name="fecha"><br><br>

    <button type="submit">Guardar</button>

</form>

<h2>Contenido de la Bitácora</h2>

<?php

if(file_exists("bitacora.txt")) {

    $contenido = file_get_contents("bitacora.txt");

    echo "<pre>$contenido</pre>";
}

?>

</body>
</html>