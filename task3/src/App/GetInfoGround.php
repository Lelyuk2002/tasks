<?php

namespace App;

class GetInfoGround extends SetInfoGround implements GetInfoInterface
{
    public function getInfo() : string{
        return 'wheels: ' . $this->wheels . ' speed: ' . $this->speed . 'km/h';
    }
}