<?php

// Clase Producto
class Producto {

    private $nombre;
    private $categoria;
    private $precio;
    private $stock;

    // Constructor
    public function __construct($nombre, $categoria, $precio, $stock) {
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    // Método getInfo
    public function getInfo() {
        return $this->nombre . " | " .
               $this->categoria . " | " .
               $this->precio . " | " .
               $this->stock;
    }
}

// Función para leer productos
function leerProductosDesdeArchivo($ruta) {

    $productos = [];

    // Verificar si existe el archivo
    if (file_exists($ruta)) {

        $lineas = file($ruta, FILE_IGNORE_NEW_LINES);

        foreach ($lineas as $linea) {

            // Separar datos
            list($nombre, $categoria, $precio, $stock) = explode("|", $linea);

            // Crear objeto
            $productos[] = new Producto(
                trim($nombre),
                trim($categoria),
                trim($precio),
                trim($stock)
            );
        }
    }

    return $productos;
}

// Leer productos
$productosLeidos = leerProductosDesdeArchivo("productos.txt");

// Mostrar información
foreach ($productosLeidos as $producto) {
    echo $producto->getInfo() . "<br>";
}

?>