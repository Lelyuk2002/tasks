<?php

namespace App\Ground;

use App\VehicleInterface;

class car implements VehicleInterface
{
    public function viewInfo($data){
        echo 'car ' . $data->getInfo() . '<br/>';
    }
}