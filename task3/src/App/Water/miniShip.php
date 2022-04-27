<?php

namespace App\Water;

use App\VehicleInterface;

class miniShip implements VehicleInterface
{
    public function viewInfo($data){
        echo 'mini-ship ' . $data->getInfo() . '<br/>';
    }
}