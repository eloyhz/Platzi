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

class Vehicle
{
    private $owner = null;

    // inicializar valores de la instancia
    public function __construct($owner)
    {
        $this->owner = $owner;
        echo 'constructor<br>';
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

class Car extends Vehicle {
    public function move() {
        echo 'Car: moving<br>';
    }
}

class Truck extends Vehicle {
    private $type;

    public function __construct($owner, $type)
    {
        $this->type = $type;
        //parent::__construct($owner);
        $this->owner = $owner;
    }

    public function move() {
        echo 'Truck ' . $this->type . ': moving<br>';
    }
}

echo 'Class Car <br>';
$car = new Car('Alex');
$car->move();
echo 'Owner car: ' . $car->getOwner() . '<br><br>';

echo 'Class truck<br>';
$truck = new Truck('Mike', 'Pickup');
$truck->move();
echo 'Owner truck: ' . $truck->getOwner() . '<br>';
