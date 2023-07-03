<?php

namespace App;

class CranesSearcher
{
    public function search($cargo,$crane): array
    {
        $rightCranes = [];
        if ($crane['weight'] >= $cargo['weight'] && $crane['distance'] >= $cargo['distance']) {
            $rightCranes[] = $crane;
        }
        return $rightCranes;
    }
}