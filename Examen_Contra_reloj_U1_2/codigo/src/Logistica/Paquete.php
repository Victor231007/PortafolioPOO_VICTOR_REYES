<?php
namespace Src\Logistica;

class Paquete 
{
    // Propiedades públicas con tipado estricto
    public string $codigoSeguimiento;
    public float $pesoKilogramos;
    public bool $esFragil;

    // Propiedad privada
    private float $costoInterno;
}