<?php

namespace App\Ground;

use App\VehicleInterface;

class car implements VehicleInterface
{
    public function viewInfo($getInfo){
        echo 'car ' . $getInfo->getInfo() . '<br/>';
    }
}