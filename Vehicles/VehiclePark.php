<?php
declare(strict_types=1);
require_once 'C:\localhost\Vehicles\AbstractVehicle.php';
require_once 'C:\localhost\Vehicles\VehiclesObjects.php';
class VehiclePark extends VehicleType
{
    protected $vehicle = [];
    protected $carCounter = 0;
    protected $helicopterCounter = 0;
    protected $airplaneCounter = 0;
    public function addVehicle(VehicleType $vehicle): void
    {
        if($vehicle instanceof Car && $this->carCounter < 3) 
        {
            $this->vehicle[] = $vehicle;
            $this->carCounter++;
        }
        elseif($vehicle instanceof Airplane && $this->airplaneCounter < 1)
            {
                $this->vehicle[] = $vehicle;
                $this->airplaneCounter++;
            }
        elseif($vehicle instanceof Helicopter && $this->helicopterCounter < 2)
        {
            $this->vehicle[] = $vehicle;
            $this->helicopterCounter++;
        }
        else
        {
            echo "Невозможно добавить траснпортное средство\n";
        }
    }
    public function getStatus(): array
    {
        return ["Автомобиль" => $this->carCounter, "Самолет" => $this->airplaneCounter, "Вертолет" => $this -> helicopterCounter];
    }
}

$garage = new VehiclePark();
$garage->addVehicle($honda_crv);
$garage->addVehicle($il_96);
$garage->addVehicle($boeing_777);
$status = $garage->getStatus();
print_r($status);


