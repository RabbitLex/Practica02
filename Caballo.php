<?php

class Caballo extends Mamifero {
    private $comida;
    private $ejercicio = 1; //nº de veces/día que hace ejercicio
   
    public function __construct($nombre, $tipo_alimentacion, $edad, $gestacion, $comida, $ejercicio) {
        parent::__construct($nombre, $tipo_alimentacion, $edad, $gestacion);
        $this->comida = $comida;
        $this->ejercicio = $ejercicio;
    }
    
    public function getComida() {
        return $comida;
    }
    
    public function setComida($comida) {
        $this->comida = $comida;
    }
    
    public function getEjercicio() {
        return $ejercicio;
    }

    public function setEjercicio($ejercicio) {
        $this->ejercicio = ejercicio;
    }

    public function __toString() {
        return "<br>" .parent::__toString() . ", se alimenta con " . $this->comida . ", se ejercita con " . $this->ejercicio;
    }
}