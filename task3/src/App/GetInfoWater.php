<?php

namespace App;

class GetInfoWater extends SetInfoWater implements GetInfoInterface
{
    public function getInfo(): string
    {
        return 'length: ' . $this->length . 'm personal: ' . $this->personal . 'persons';
    }
}