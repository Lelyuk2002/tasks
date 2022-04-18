<?php

namespace App;

class checkError extends chooseView
{
    public function check($data, $type){
        try {
            $info = $this->info($type);
            $info->viewInfo($data);
        } catch(\Exception $e){
            echo $e->getMessage() . '<br/>';
        }
    }
}