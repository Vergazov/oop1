<?php

namespace App;

class CranesSearcher
{
    public function search($cargo,$crane)
    {
        if($cargo[0] <= $crane[0] && $cargo[1] <= $crane[1] ) {
            return $crane[2];
        }

    }
}