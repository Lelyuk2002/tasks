<?php
require __DIR__ . '/vendor/autoload.php';
use App\Ground\ground;
use App\Water\water;
$ground = new ground();
$ground->initGround();
$water = new water();
$water->initWater();