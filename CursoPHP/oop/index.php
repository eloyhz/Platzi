<?php

// La programación orientada a objetos es un paradigma de programación
// que permite generar un código más modular, reutilizable y fácil de mantener.

// clases e instancias
// abstracción y encapsulación

// La palabra reservada $this se utiliza para hacer referencia al objeto
// con el cual se está trabajando actualmente.

// El encapsulación permite evitar que una variable sea accedida o modificada
// sin que el objeto se entere. Es más conveniente hacer la comunicación
// con un objeto únicamente a través de su interfaz.

class Car
{
    private $owner = 'Alex';

    // inicializar valores de la instancia
    public function __construct($owner)
    {
        $this->owner = $owner;
        echo 'constructor<br>';
    }

    public function __destruct()
    {
        echo 'destructor<br>';
    }

    public function move() {
        echo 'moving<br>';
    }

    public function getOwner() {
        return $this->owner;
    }

    // Ayuda a crear validaciones, por ejemplo evitar
    // un propietario con una cadena vacía
    public function setOwner($owner) {
        $this->owner = $owner;
    }
}

echo 'Class Car <br>';

$car = new Car('Alex');
$car2 = new Car('Mike');

// llamar el método move
$car->move();

// Cada instancia tiene un valor independiente
echo 'Owner car: ' . $car->getOwner() . '<br>';
echo 'Owner car2: ' . $car2->getOwner() . '<br>';
