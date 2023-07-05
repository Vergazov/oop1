<?php

namespace App;

class Checker
{
    public function isGood($cargo,$crane)
    {
        if($cargo->getWeight() <= $crane->getWeight() && $cargo->getDistance() <= $crane->getDistance() ) {
            return TRUE;
        }

    }
}