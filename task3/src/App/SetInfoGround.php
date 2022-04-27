<?php

namespace App;

class SetInfoGround implements BuildClassInterface
{
    protected $wheels;
    protected $speed;

    public function __construct($wheels, $speed)
    {
        $this->wheels = $wheels;
        $this->speed = $speed;
    }
}