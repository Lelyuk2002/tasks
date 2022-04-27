<?php
namespace App\Ground;

use App\GetInfoGround;
use App\checkError;

class ground
{

    public function initGround()
    {

        $data = [
            [
                'data' => new GetInfoGround(4, 220),
                'type' => 'car',
            ],
            [
                'data' => new GetInfoGround(10, 160),
                'type' => 'truck',
            ]
        ];

        $checkData = new checkError();
        foreach ($data as $dataInfo) {
            $enterData = $dataInfo['data'];
            $type = $dataInfo['type'];
            $checkData->check($enterData, $type);
        }
    }
}