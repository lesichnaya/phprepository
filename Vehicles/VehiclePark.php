<?php
declare(strict_types=1);

use Vehicles\VehicleParkResponse;

require_once 'C:\localhost\Vehicles\AbstractVehicle.php';
require_once 'C:\localhost\Vehicles\VehiclesObjects.php';
require_once 'C:\localhost\Vehicles\VehicleParkResponse.php';

class VehiclePark extends VehicleType
{
    private const  CAR_COUNT = 3;
    private const HELICOPTER_COUNT = 2;
    private const AIRPLANE_COUNT = 1;
    private array $vehicle = [];
    private function vehicleCount(string $vehicleType): int
    {
        $count = 0;
        foreach ($this->vehicle as $element) {
            if (get_class($element) === $vehicleType) {
                $count++;
            }
        }
        return $count; 
    } 
    public function addVehicle(VehicleType $vehicle): VehicleParkResponse
    {
        if($this->vehicleCount(Car::class) === $this::CAR_COUNT) {
            echo VehicleParkResponse::FAILURE->value."\n";
            return VehicleParkResponse::FAILURE;
        }
        elseif($this->vehicleCount(Airplane::class) === $this::AIRPLANE_COUNT) {
            echo VehicleParkResponse::FAILURE->value."\n";
            return VehicleParkResponse::FAILURE;
        }
        elseif($this->vehicleCount(Helicopter::class) === $this::HELICOPTER_COUNT) {
            echo VehicleParkResponse::FAILURE->value."\n";
            return VehicleParkResponse::FAILURE;
        }
        else {
            $this->vehicle[] = $vehicle;
            echo VehicleParkResponse::SUCCESS->value."\n";
            return VehicleParkResponse::SUCCESS; 
        }
    }  
    public function getStatus(): array
    {
        return ["Автомобиль" => $this->vehicleCount(Car::class), "Самолет" => $this->vehicleCount(Airplane::class), "Вертолет" => $this -> vehicleCount(Helicopter::class)];
    }
}

$garage = new VehiclePark();
$garage->addVehicle($honda_crv);
$garage->addVehicle($honda_civic);
$garage->addVehicle($il_96);
$garage->addVehicle($boeing_777);
$status = $garage->getStatus();
print_r($status);

