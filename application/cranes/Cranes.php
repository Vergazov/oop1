<?php

namespace App;

class Cranes
{
    private string $name;
    private int $weight;
    private int $distance;

    public function __construct(string $name, int $weight, int $distance)
    {
        $this->weight = $weight;
        $this->distance = $distance;
        $this->name = $name;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    public function getName()
    {
        return $this->name;
    }
}

$Cranes = [
    new Cranes("КП-1550",50,12),
    new Cranes("КП-0042",42,12),
    new Cranes("КП-0070",70,8),
    new Cranes("КПМ-0215",15,25),
    new Cranes("КПМ-0315",15,26),
    new Cranes("КПМ-0220",20,20),
];

