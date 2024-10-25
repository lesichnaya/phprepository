<?php
declare(strict_types=1);
require_once 'C:\localhost\Vehicles\AbstractVehicle.php';
class Car extends VehicleType
{}
$honda_crv = new Car();
$honda_crv->properties("ездит", 250, 2000, "Honda CR-V");
$honda_crv->act();
$honda_crv->displayInfo();