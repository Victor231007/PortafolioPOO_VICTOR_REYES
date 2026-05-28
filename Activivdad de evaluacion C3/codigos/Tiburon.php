<?php
require_once 'Animal.php';

class Tiburon extends Animal {
    public function __construct($nombre, $edad, $habitat) {
        parent::__construct($nombre, $edad, $habitat);
    }

    public function emitirSonido() { return "No emite sonidos (Silencioso)"; }
    public function moverse() { return "Nada rápidamente usando sus aletas"; }
    public function alimentarse() { return "Caza peces y otros animales marinos"; }
    public function dormir() { return "Descansa mientras sigue nadando para respirar"; }
    public function respirar() { return "Respira por branquias"; }

    public function mostrarInfo() {
        echo "<h2>Datos del Tiburón</h2>";
        echo $this->__toString();
    }

    public function __toString() {
        return "Nombre: {$this->nombre} | Edad: {$this->edad} | Hábitat: {$this->habitat} <br>" .
               "Comportamiento: {$this->emitirSonido()}, {$this->moverse()} y {$this->respirar()}.";
    }
}