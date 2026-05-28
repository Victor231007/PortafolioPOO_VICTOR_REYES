<?php
require_once 'src/Logistica/Paquete.php';
require_once 'Sensor.php';

use Src\Logistica\Paquete;

$paqueteA = new Paquete();
$paqueteB = new Paquete();

$paqueteA->codigoSeguimiento = "ZA-12345";
$paqueteA->pesoKilogramos = 5.5;
$paqueteA->esFragil = true;

$sensorPlanta = new Sensor();
$sensorPlanta->id = 1;
$sensorPlanta->marca = "Sony";
$sensorPlanta->rangoMaximo = 40.5;
$sensorPlanta->ultimaLectura = new DateTime();

echo "¡El código corre perfectamente!";