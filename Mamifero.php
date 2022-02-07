<?php

class Mamifero extends Animal{
    private $gestacion;
    
    public function __construct($nombre, $tipo_alimentacion, $edad, $gestacion) {
        parent::__construct($nombre, $tipo_alimentacion, $edad);
        $this->gestacion = $gestacion; 
    }
        
    public function getGestacion(){
        return $gestacion;
    }
    
    public function setGestacion($gestacion){
        $this->gestacion = $gestacion;
    }
    
    public function __toString() {
        return "<br><br>" . parent::__toString() . ", su gestación fue de " . $this->gestacion ;
    }
}