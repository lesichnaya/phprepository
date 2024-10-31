<?php
declare(strict_types=1);
require_once 'C:\localhost\Vehicles\AbstractVehicle.php';
require_once 'C:\localhost\Vehicles\Interfaces\VehiclesCanFly.php';
final class Helicopter extends VehicleType implements VehiclesCanFly
{
    public function fly(): string
    {
        return "Вертолет летит";
    }
}

