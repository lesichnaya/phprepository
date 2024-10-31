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
