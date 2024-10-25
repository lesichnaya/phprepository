<?php
declare(strict_types=1);
require_once 'C:\localhost\Vehicles\AbstractVehicle.php';
require_once 'C:\localhost\Vehicles\Interfaces\VehiclesCanRide.php';
final class Motorbike extends Vehicle implements VehiclesCanRide
{
    public function ride(): string
    {
        return "Мотоцикл едет";
    }
}