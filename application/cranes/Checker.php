<?php

namespace App;

class Checker
{
    public function isGood($cargo,$crane): bool
    {
        if($cargo->getWeight() <= $crane->getWeight() && $cargo->getDistance() <= $crane->getDistance() ) {
            return TRUE;
        }

    }
}