<?php

abstract class MoreInfo{
    public abstract function setSpeed($speed);
    public abstract function setWheels($wheels);
}

class Car extends MoreInfo {
    private $name;
    private $doors;
    private $wheels;
    private $speed;

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function setWheels($wheels)
    {
        $this->wheels = $wheels;
    }

    public function setDoors($doors){
        $this->doors = $doors;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getInfo(){
        echo $this->doors." ".$this->name." ".$this->wheels." ".$this->speed;
    }

}


$car1 = new Car();
$car1->setName("BMW");
$car1->SetDoors(4);
$car1->setSpeed("220 km/h");
$car1->setWheels(4);
$car1->getInfo();

