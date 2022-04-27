<?php
namespace App\Water;

use App\GetInfoWater;
use App\checkError;

class water
{

    public function initWater()
    {

        $data = [
            [
                'data' => new GetInfoWater(100, 20),
                'type' => 'mini-ship',
            ],
            [
                'data' => new GetInfoWater(300, 160),
                'type' => 'ship',
            ],
            [
                'data' => new GetInfoWater(300, 160),
                'type' => 'shwip',
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