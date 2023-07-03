<?php

namespace App;

class CranesSearcher
{
    public function search($cargoWeight,$cargoDistance,$craneWeight,$craneDistance,$craneName): string
    {
        if ($craneWeight >= $cargoWeight && $craneDistance >= $cargoDistance) {
            return $craneName;
        }
    }
}