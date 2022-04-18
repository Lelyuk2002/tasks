<?php

namespace App\Water;

use App\VehicleInterface;

class miniShip implements VehicleInterface
{
    public function viewInfo($getInfo){
        echo 'mini-ship ' . $getInfo->getInfo() . '<br/>';
    }
}