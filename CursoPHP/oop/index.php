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


include 'vehicles/Car.php';
include 'vehicles/Truck.php';


use Vehicles\Car;
use Vehicles\Truck;

// Se pueden agrupar las declaraciones en PHP 7
// use Vehicles\{Car, Truck};

echo 'Class Car <br>';
$car = new Car('Alex');
$car->move();
echo 'Owner car: ' . $car->getOwner() . '<br><br>';

echo 'Class truck<br>';
$truck1 = new Truck('Mike', 'Pickup');
$truck1->move();
//echo 'Owner truck: ' . $truck->getOwner() . '<br>';

echo 'Class truck<br>';
$truck2 = new Truck('Mike', 'Pickup');
$truck2->move();

// echo '<br>Total Trucks: ' . Truck::$count;
echo '<br>Total Trucks: ' . Truck::getTotal();