<?php
declare(strict_types=1);
abstract class VehicleType
{
    protected int $maxspeed;
    protected int $price;
    protected string $model;
    protected function setProperties(int $maxspeed, int $price, string $model):void
    {
        $this->maxspeed = $maxspeed;
        $this->price = $price;
        $this->model = $model;        
    }
    public function properties(int $maxspeed, int $price, string $model):void
    {
        $this->setProperties($maxspeed, $price, $model);
    }
    function displayInfo(): void
    {
        echo "Модель: $this->model; Максимальная скорость: $this->maxspeed; Цена: $this->price.\n";
    }
}

