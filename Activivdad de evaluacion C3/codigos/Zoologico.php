<?php
require_once 'Leon.php';
require_once 'Aguila.php';
require_once 'Serpiente.php';
require_once 'Tiburon.php';

$animales = [
    new Leon("Simba", 5, "Selva"),
    new Aguila("Sky", 3, "Montañas"),
    new Serpiente("Kaa", 4, "Desierto"),
    new Tiburon("Bruce", 8, "Océano")
];

echo "<h1>Zoológico de Jesús Salas</h1>";

foreach ($animales as $a) {
    $a->mostrarInfo();
    echo "<hr>";
}
?>