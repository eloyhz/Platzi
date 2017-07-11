<?php

namespace Vehicles;

abstract class VehicleBase
{
    protected $owner = null;

    // inicializar valores de la instancia
    public function __construct($owner)
    {
        $this->owner = $owner;
        echo 'constructor<br>';
    }

    public function move() {
        echo $this->startEngine() . '<br>';
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

    public abstract function startEngine();
}