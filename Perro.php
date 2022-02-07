<?php

class Perro extends Mamifero {
    private $raza;
    
    public function __construct($nombre, $tipo_alimentacion, $edad, $gestacion, $raza) {
        parent::__construct($nombre, $tipo_alimentacion, $edad, $gestacion);
        $this->raza = $raza;
    }

    public function getRaza() {
        return $raza;
    }
    
    public function setRaza($raza) {
        $this->raza = $raza;
    }

    public function __toString() {
        return "<br>" . parent::__toString() . ", su raza es " . $this->raza ;
    }
}