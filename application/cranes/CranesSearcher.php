<?php

namespace App;

class CranesSearcher
{
    public function search($cargo,$crane): array
    {
        $rightCranes = [];
        if($cargo[0] <= $crane[0] && $cargo[1] <= $crane[1] ) {
            $rightCranes[] = $crane[2];
        }
        return $rightCranes;
    }
}