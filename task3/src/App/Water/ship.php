<?php
namespace App\Water;

use App\VehicleInterface;

class ship implements VehicleInterface
{
    public function viewInfo($getInfo){
        echo 'ship ' . $getInfo->getInfo() . '<br/>';
    }
}