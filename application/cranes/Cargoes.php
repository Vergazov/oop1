<?php

namespace App;

class Cargoes
{
    private int $weight;
    private int $distance;

    public function __construct(int $weight, int $distance)
    {
        $this->weight = $weight;
        $this->distance = $distance;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getDistance()
    {
        return $this->distance;
    }
}

$cargoes = [
    new Cargoes(15, 20),
    new Cargoes(20, 15),
    new Cargoes(60, 5),
    new Cargoes(35, 10)
];


