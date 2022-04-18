<?php
namespace App\Ground;

use App\getInfoGround;
use App\checkError;

$data = [
    [
        'data' => new getInfoGround(4, 220),
        'type' => 'car',
    ],
    [
        'data' => new getInfoGround(10, 160),
        'type' => 'truck',
    ]
];

$checkData = new checkError();
foreach ($data as $dataInfo){
    $enterData = $dataInfo['data'];
    $type = $dataInfo['type'];
    $checkData->check($enterData, $type);
}