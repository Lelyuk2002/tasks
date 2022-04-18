<?php
namespace App;

class getInfoGround
{
    private $speed;
    private $wheels;

    public function __construct($wheels, $speed)
    {
        $this->speed = $speed;
        $this->wheels = $wheels;
    }

    public function getInfo(){
        return 'wheels: ' . $this->wheels . ' speed: ' . $this->speed . 'km/h';
    }
}