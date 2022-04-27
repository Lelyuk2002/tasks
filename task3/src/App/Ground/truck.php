<?php

namespace App\Ground;

use App\VehicleInterface;

class truck implements VehicleInterface
{
    public function viewInfo($data){
        echo 'truck ' . $data->getInfo() . '<br/>';
    }
}