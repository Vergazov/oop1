<?php

namespace App;

class Cargo
{
    private int $weight;
    private int $distance;

    public function __construct(int $weight, int $distance)
    {
        $this->weight = $weight;
        $this->distance = $distance;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}




