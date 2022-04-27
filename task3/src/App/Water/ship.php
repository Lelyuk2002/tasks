<?php
namespace App\Water;

use App\VehicleInterface;

class ship implements VehicleInterface
{
    public function viewInfo($data){
        echo 'ship ' . $data->getInfo() . '<br/>';
    }
}