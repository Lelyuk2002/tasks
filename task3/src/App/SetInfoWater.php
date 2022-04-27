<?php

namespace App;

class SetInfoWater implements BuildClassInterface
{
    protected $length;
    protected $personal;

    public function __construct($length, $personal)
    {
        $this->length = $length;
        $this->personal = $personal;
    }
}