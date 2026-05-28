<?php
require_once 'Animal.php';

class Serpiente extends Animal {
    public function __construct($nombre, $edad, $habitat) {
        parent::__construct($nombre, $edad, $habitat);
    }

    public function emitirSonido() { return "Hace un siseo (Sssshhh)"; }
    public function moverse() { return "Se arrastra o repta por el suelo"; }
    public function alimentarse() { return "Traga presas enteras (pequeños mamíferos)"; }
    public function dormir() { return "Duerme enroscada en lugares sombríos"; }
    public function respirar() { return "Respira por pulmones"; }

    public function mostrarInfo() {
        echo "<h2>Datos de la Serpiente</h2>";
        echo $this->__toString();
    }

    public function __toString() {
        return "Nombre: {$this->nombre} | Edad: {$this->edad} | Hábitat: {$this->habitat} <br>" .
               "Comportamiento: {$this->emitirSonido()}, {$this->moverse()} y {$this->respirar()}.";
    }
}