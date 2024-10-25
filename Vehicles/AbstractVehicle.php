<?php
declare(strict_types=1);
require_once 'C:\localhost\Vehicles\interfaces\getAction.php';
abstract class VehicleType implements getAction {
    function act()
    {
        echo "Транспортное средство {$this->getAct()}.\n";
    }
    protected $action;
    protected $maxspeed;
    protected $price;
    protected $model;
    protected function setProperties(string $action,int $maxspeed, int $price, string $model):void
    {
        $this->action = $action;
        $this->maxspeed = $maxspeed;
        $this->price = $price;
        $this->model = $model;        
    }
    public function properties(string $action, int $maxspeed, int $price, string $model):void
    {
        $this->setProperties($action, $maxspeed, $price, $model);
    }
    function displayInfo()
    {
        echo "Модель: $this->model; Действие: $this->action; Максимальная скорость: $this->maxspeed; Цена: $this->price.\n";
    }
    function getAct(): string {
        return $this->action;
    }
}

