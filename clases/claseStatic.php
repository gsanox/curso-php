<?php

class cNoStatic {
    private $propiedad;

    // public function cNoStatic() {}
    // public function __construct() {} // si es vacio de parameros no es necesario ya que php lo hace por nosotros

    public function saluda() {
        echo "Hola";
    }

    // public function __destruct(){}
}

$instanciaNoStatic = new cNoStatic(); // En php siempre hay un contructor por defecto sin parámetros
$instanciaNoStatic->saluda(); // Hola
// delete $instanciaNoStatic;
// $instanciaNoStatic->__destruct();
// $instanciaNoStatic = null;

class cClaseStatic {

    public static function saluda(){
        echo "Hola";
    }
    
}

cClaseStatic::saluda(); // Hola

class cAmbosMundos {
    private $propiedad;

    public function __construct($propiedad){
        $this->propiedad = $propiedad;
    }

    public static function hazAlgo($numero) {
        return $numero + 2;
    } 

}

$nuevaClase::hazAlgo(2); // 4

$nuevaClase = new cAmbosMundos(21);
$nuevaClase->hazAlgo(2); // devolveria un error, indicandome que un metodo estatico no puede ser ...
