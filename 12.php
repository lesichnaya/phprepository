<?php
abstract class  Vehicle
{
    public $action;
    public $maxspeed;
    public $price;
    public $model;
    function __construct($action, $maxspeed, $price, $model)
    {
        $this->action = $action;
        $this->maxspeed = $maxspeed;
        $this->price = $price;
        $this->model = $model;
    }
    function displayInfo()
    {
        echo $this->model." ".$this->action.".\n";
    }
}
class Cars extends Vehicle
{}
class Motorbikes extends Vehicle
{}
class Helicopters extends Vehicle
{}
$honda_crv = new Cars("ездит",250, 2000, "Honda CR-V");
$honda_crv->displayInfo();

$mi8 = new Helicopters("летает",400, 50000, "Mi 8");
$mi8->displayInfo();
