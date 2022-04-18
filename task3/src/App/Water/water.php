<?php
use App\getInfoWater;
use App\checkError;

$data = [
    [
        'data' => new getInfoWater(100, 20),
        'type' => 'mini-ship',
    ],
    [
        'data' => new getInfoWater(300, 160),
        'type' => 'ship',
    ],
    [
        'data' => new getInfoWater(300, 160),
        'type' => 'shwip',
    ]
];

$checkData = new checkError();
foreach ($data as $dataInfo){
    $enterData = $dataInfo['data'];
    $type = $dataInfo['type'];
    $checkData->check($enterData, $type);
}