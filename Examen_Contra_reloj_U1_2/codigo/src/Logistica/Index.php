<?php
// Todos los archivos están en la misma carpeta (src/Logistica), así que se llaman directo
require_once 'Paquete.php';
require_once 'Sensor.php';

use Src\Logistica\Paquete;

$paqueteA = new Paquete();
$paqueteB = new Paquete();

$paqueteA->codigoSeguimiento = "ZA-12345";
$paqueteA->pesoKilogramos = 5.5;
$paqueteA->esFragil = true;

// $paqueteA->costoInterno = 100;

$sensorPlanta = new Sensor();
$sensorPlanta->id = 1;
$sensorPlanta->marca = "Sony";
$sensorPlanta->rangoMaximo = 40.5;
$sensorPlanta->ultimaLectura = new DateTime();

echo "¡El código corre perfectamente!";