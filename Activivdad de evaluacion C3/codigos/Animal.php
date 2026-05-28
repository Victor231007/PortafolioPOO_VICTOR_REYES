<?php
abstract class Animal {
    protected $nombre; protected $edad; protected $habitat;

    public function __construct($n, $e, $h) {
        $this->nombre = $n; $this->edad = $e; $this->habitat = $h;
    }

    // Getters y Setters (Requisito del PDF)
    public function getNombre() { return $this->nombre; }
    public function setNombre($n) { $this->nombre = $n; }

    // Los 6 métodos abstractos
    abstract public function emitirSonido();
    abstract public function moverse();
    abstract public function alimentarse();
    abstract public function dormir();
    abstract public function respirar();
    abstract public function mostrarInfo();
    
    // Método toString (Requisito del PDF)
    abstract public function __toString();
}
?>  