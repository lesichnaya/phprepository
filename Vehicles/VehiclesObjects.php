<?php
declare(strict_types=1);
require_once 'C:\localhost\Vehicles\AbstractVehicle.php';
require_once 'C:\localhost\Vehicles\VehicleTypes\Airplane.php';
require_once 'C:\localhost\Vehicles\VehicleTypes\Car.php';
require_once 'C:\localhost\Vehicles\Interfaces\VehiclesCanFly.php';
require_once 'C:\localhost\Vehicles\VehicleTypes\Helicopter.php';
$honda_crv = new Car();
$honda_crv->properties(250, 2000, "Honda CR-V");

$il_96 = new Airplane();
$il_96->properties(900, 2000, "Il-96");

$boeing_777 = new Airplane();
$boeing_777->properties(900, 10000, "boeing 777");