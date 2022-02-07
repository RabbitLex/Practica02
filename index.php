<?php 

require "Animal.php";
require "Mamifero.php";
require "Perro.php";
require "Gato.php";
require "Caballo.php";

$Animal = new Animal("Gustavo", "insectos", "3 años");
$Mamifero = new Mamifero("Moby Dick", "plancton", "2 años", "90 dias");
$Perro = new Perro("Tobby", "carne", "1 año", "63 dias", "Pitbull");
$Gato = new Gato("Tom", "pescado", "4 meses", "70 dias", "siamés");
$Caballo = new Caballo("Prieto Azabache", "hierba", "5 años", "345 dias", "remolacha", "carreras");

echo $Animal->__toString();
echo $Mamifero->__toString();
echo $Perro->__toString();
echo $Gato->__toString();
echo $Caballo->__toString();