<?php
declare(strict_types=1);
require_once 'C:\localhost\Vehicles\AbstractVehicle.php';
require_once 'C:\localhost\Vehicles\Interfaces\VehiclesCanRide.php';
final class Car extends VehicleType implements VehiclesCanRide
{
    public function ride(): string
    {
        return "Машина едет";
    }
}
$honda_crv = new Car();
$honda_crv->properties(250, 2000, "Honda CR-V");
$honda_crv->displayInfo();
echo $honda_crv->ride();