<?php

class Animal {
    private $nombre;
    private $tipo_alimentacion;
    private $edad;
    
    public function __construct($nombre, $tipo_alimentacion, $edad){
        $this->nombre = $nombre;
        $this->tipo_alimentacion = $tipo_alimentacion;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getTipo_alimentacion() {
        return $tipo_alimentacion;
    }
    public function setTipo_alimentacion($tipo_alimentacion) {
        $this->tipo_alimentacion = $tipo_alimentacion;
    }
    public function getEdad() {
        return $edad;
    }
    public function setEdad($edad) {
        $this->edad = edad;
    }
    public function __toString(){
        return "Su nombre es " . $this->nombre . ", se alimenta con " . $this->tipo_alimentacion . ", su edad es de " . $this->edad;
    }
}