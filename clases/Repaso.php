<?php

// La clase las instrucciones
class cVehiculo {

    // Miembros atributos/propiedades
    public $marca; // No recomendable tener atrubutos publicos
    protected $modelo;
    private $num_bastidor;
    protected $km;
    protected $color;

    public function __construct($marca, $num_bastidor, $modelo = "") {
        $this->marca = $marca;
        $this->num_bastidor = $num_bastidor;
        $this->modelo = $modelo;
        $this->km = 0;
    }

    public function getNumBastidor() {
        return $this->num_bastidor;
    }

    public function cambiaColor($color) { // setColor
        $this->color = $color;
    }

    public function dimeColor() { // getColor
        return $this->color;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }
    // $coche->get("modelo"); // Clase C
    // $coche->get("color"); // Me devolveria el color del coche

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
    // $coche->set("color", "rojo");

    // Miembros ,métodos/funciones
    public function moverse() {
        $this->sumaKm();
    }

    protected function sumaKm() {
        $km++; // Incrementa km recorridos en cada invocacion.
    }

    private function restaKm() {
        $km--;
    }

}

class cCoche extends cVehiculo {

    public function decrementarContador() {
        parent::restaKm(); // Daria error al ser un metodo de la clase padre que es private
    }

    public static function sonarClaxon() {
        echo "Muacccc!!";
    }

    public function __toString() {
        return "Este coche es de la marca " . $this->marca;
    }

    
}

// Creamos una instancia/objeto de la clase
$vehiculo = new cVehiculo("Mercedes", 123, "Clase C");
$vehiculo->moverse(); // invoca a un método publico
// $vehiculo->sumaKm(); // invoca a un método protected, daría error

// $vehiculo->marca = "Cualqueira"; -> sería correcto al ser un atriburo publico, no recomendable
// $vehiculo->modelo = "Cualqueira"; -> sería incorrecto al ser un atriburo protected, 
// $vehiculo->color = "Cualqueira"; -> sería incorrecto al ser un atriburo private, 

cCoche::sonarClaxon(); // Metodo estatico que se invoca sin necesidad de instanciar la clase

$coche = new cCoche();
$coche->moverse();
$coche->decrementarContador(); // Errror
$coche->getNumBastidor();

echo $coche;

