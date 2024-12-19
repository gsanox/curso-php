<?php
// Clase base
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        echo "Este animal hace un sonido.\n";
    }

    public function getName() {
        return $this->name;
    }
}

// Clase derivada
class Dog extends Animal {
    // @override
    public function makeSound() {
        echo $this->name . " dice: ¡Guau!\n";
        // echo self::name . " dice: ¡Guau!\n";
    }
    public function makeAnimalSound() {
        echo parent::makeSound();
    }
}

// Otra clase derivada
class Cat extends Animal {
    public function makeSound() {
        echo $this->name . " dice: ¡Miau!\n";
    }
}

// Crear instancias
$dog = new Dog("Firulais");
$cat = new Cat("Michi");
$animal = new Animal("Pepito");

// Usar métodos
$dog->makeSound(); // Salida: Firulais dice: ¡Guau!
$cat->makeSound(); // Salida: Michi dice: ¡Miau!
$animal->makeSound(); // Salida: Este animal hace un sonido.
$dog->makeAnimalSound(); // Salida: Este animal hace un sonido.

// Acceder al nombre
echo $dog->getName(); // Salida: Firulais
echo "\n";
echo $cat->getName(); // Salida: Michi
// echo $animal->name; // Error
echo $animal->getName(); // Salida: Pepito


// Método mágico __toString()
// https://www.php.net/manual/es/language.oop5.magic.php
class cPersona {
	
	protected $nombre;
	
	public function __construct($nombre){
		$this->nombre = $nombre;
	}
	
	public function getNombre() {
		echo "Me llamo " . $this->nombre . "\n";
	}
	
	public function __toString(){
		return "Esta clase define el nombre: " . $this->nombre;
	}
	
	public function __get($propiedad) {
		return "Getter Mágico " . $this->$propiedad;
	}
	
	public function __set($propiedad, $valor) {
		$this->$propiedad = $valor;
	}
	
}

$p = new cPersona("jaime");

$p->getNombre();
// echo $p->nombre;

// Esta llamada, invoca al método __toString()
echo $p . "\n";

echo $p->nombre . "\n";

$p->nombre = "David";
echo $p;
?>
