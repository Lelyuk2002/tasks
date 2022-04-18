<?php

namespace App\Ground;

use App\VehicleInterface;

class truck implements VehicleInterface
{
    public function viewInfo($getInfo){
        echo 'truck ' . $getInfo->getInfo() . '<br/>';
    }
}