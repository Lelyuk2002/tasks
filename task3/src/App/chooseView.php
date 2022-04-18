<?php

namespace App;

use App\Ground\truck, App\Ground\car, App\Water\ship, App\Water\miniShip;

class chooseView
{
    public function info($type){
        switch ($type){
            case 'car' : {
                return new car();
            }
            case 'truck' : {
                return new truck();
            }
            case 'mini-ship' : {
                return new miniShip();
            }
            case 'ship' : {
                return new ship();
            }
            default : {
                throw new \Exception('invalid info ' . $type);
            }
        }
    }
}