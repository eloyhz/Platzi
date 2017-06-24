<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase {
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


