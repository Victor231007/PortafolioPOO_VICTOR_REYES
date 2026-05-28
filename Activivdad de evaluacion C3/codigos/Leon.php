<?php
require_once 'Animal.php';

class Leon extends Animal {
    public function emitirSonido() { return "Ruge fuertemente"; }
    public function moverse() { return "Corre por la selva"; }
    public function alimentarse() { return "Come carne (Cazador)"; }
    public function dormir() { return "Duerme hasta 20 horas al día"; }
    public function respirar() { return "Respira por pulmones"; }

    public function mostrarInfo() {
        echo "<h2>Datos del León</h2>";
        echo $this->__toString();
    }

    public function __toString() {
        return "Nombre: {$this->nombre} | Edad: {$this->edad} | Hábitat: {$this->habitat} <br>" .
               "Comportamiento: {$this->emitirSonido()}, {$this->moverse()} y {$this->respirar()}.";
    }
}