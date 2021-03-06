<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase {
    private static $count = 0;
    private $type;

    public function __construct($owner, $type)
    {
        $this->type = $type;
        //parent::__construct($owner);
        $this->owner = $owner;
        self::$count++;
    }

//    public function move() {
//        echo 'Truck ' . $this->type . ': moving<br>';
//    }

    public static function getTotal() {
        return self::$count;
    }

    public function startEngine() {
        return 'Truck: start engine';
    }
}


