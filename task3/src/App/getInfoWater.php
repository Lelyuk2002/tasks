<?php

namespace App;

class getInfoWater
{
    private $length;
    private $personal;

    public function __construct($length, $personal)
    {
        $this->length = $length;
        $this->personal = $personal;
    }

    public function getInfo(){
        return 'length: ' . $this->length . 'm personal: ' . $this->personal . 'persons';
    }
}