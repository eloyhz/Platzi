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

$car = new Car();
$car2 = new Car();

// llamar el método move
$car->move();
$car->setOwner('Mike');
$car2->setOwner('Max');

// Cada instancia tiene un valor independiente
echo 'Owner car: ' . $car->getOwner() . '<br>';
echo 'Owner car2: ' . $car2->getOwner() . '<br>';
