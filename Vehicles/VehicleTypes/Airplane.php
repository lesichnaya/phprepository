<?php
declare(strict_types=1);
require_once 'C:\localhost\Vehicles\AbstractVehicle.php';
require_once 'C:\localhost\Vehicles\Interfaces\VehiclesCanRide.php';
require_once 'C:\localhost\Vehicles\Interfaces\VehiclesCanFly.php';
final class Airplane extends VehicleType implements VehiclesCanRide, VehiclesCanFly
{
    public function ride(): string
    {
        return "Самолет едет\n";
    }
    public function fly(): string
    {
        return "Самолет летит\n";
    }
}
$il_96 = new Airplane();
$il_96->properties(900, 2000, "Il-96");
$il_96->displayInfo();
echo $il_96->fly();
echo $il_96->ride();