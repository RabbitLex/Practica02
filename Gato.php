<?php

class Gato extends Mamifero {
    private $pedigri;
    
    public function __construct($nombre, $tipo_alimentacion, $edad, $gestacion, $pedigri) {
        parent::__construct($nombre, $tipo_alimentacion, $edad, $gestacion);
        $this->pedigri = $pedigri;
    }
    
    public function getPedigri() {
        return $this->pedigri;
    }
    
    public function setPedigri($pedigri) {
        $this->pedigri = $pedigri;
    }
    
    public function __toString() {
        return "<br>" . parent::__toString() . ", es " . $this->pedigri ;
    }
}

