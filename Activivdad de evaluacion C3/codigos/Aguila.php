<?php
require_once 'Animal.php';

class Aguila extends Animal {
    public function emitirSonido() { return "Chilla"; }
    public function moverse() { return "Vuela"; }
    public function alimentarse() { return "Peces"; }
    public function dormir() { return "Nido"; }
    public function respirar() { return "Pulmones"; }

    public function mostrarInfo() {
        echo "<h3>Águila</h3>" . $this->__toString();
    }

    public function __toString() {
        return "Nombre: $this->nombre | Hábitat: $this->habitat";
    }
} // <--- ASEGÚRATE DE QUE ESTA LLAVE ESTÉ AHÍ
?>