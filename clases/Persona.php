<?php

// $persona = []; =>
$persona = array(
    "nombre" => "Jaime",
    "aficion" => "tenis"
);
// Acceso al elemento
echo $persona['nombre']; // Jaime

class cPersona {
    public $nombre;
    private $apellidos;
    protected $edad;

    // Constructor __construct
    public function __construct($nombre, $apellidos = "", $edad = 0){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }
    /*
    $persona = new cPersona(); // me daria error, y que el nombre es obligatorio
    $persona = new cPersona("Jaime"); // Todo bien
    $persona = new cPersona("Jaime", "Garcia"); // Todo bien
    $persona = new cPersona("Jaime", "Garcia", 22); // Todo bien
    */

    public function getApellidos() {
        // this en una clase hace referencia a si mismo, es decir al objeto
        return $this->apellidos;
        // return self::apellidos;
    }

    public function setApellidos($apellidos){
        // Modificamos la propiedad apellido
        $this->apellidos = $apellidos;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function cumpleOtroMas() {
        $this->edad++;
        if ($this->edad > 18) {
            $this->apellidos = "";
        }
    }
}

// Nueva instancia
$persona = new cPersona("jaime");

// Accedo a una propiedad $objeto->propiedad;
$persona->nombre; // Acceder
$persona->nombre = "David"; // Modificacion
$persona->apellidos; // Error
$persona->setApellidos("Garcia");
$persona->getApellidos(); // Acceder - Garcia
$persona->edad; // Error
$person->cumpleOtroMas(21); // Error