<?php

// Paso 1: Definir la clase Producto
class Producto {

    // Atributos privados
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

    // Métodos get
    public function getNombre() {
        return $this->nombre;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getStock() {
        return $this->stock;
    }

    // Método para mostrar información
    public function getInfo() {
        return $this->nombre . " | " .
               $this->categoria . " | " .
               $this->precio . " | " .
               $this->stock;
    }

    // Método para guardar en archivo
    public function guardarEnArchivo($ruta) {
        file_put_contents($ruta, $this->getInfo() . PHP_EOL, FILE_APPEND);
    }
}

// Paso 5: Crear arreglo de productos
$productos = [
    new Producto("Laptop", "Electrónica", 15000, 10),
    new Producto("Mouse", "Accesorios", 300, 25),
    new Producto("Teclado", "Accesorios", 700, 15),
    new Producto("Monitor", "Electrónica", 4500, 8),
    new Producto("USB", "Almacenamiento", 200, 30)
];

// Vaciar archivo antes de escribir
file_put_contents("productos.txt", "");

// Paso 6: Recorrer arreglo
foreach ($productos as $producto) {

    // Mostrar información
    echo $producto->getInfo() . "<br>";

    // Guardar en archivo
    $producto->guardarEnArchivo("productos.txt");
}

?>