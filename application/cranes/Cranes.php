<?php

namespace App;

class Cranes
{
    private int $weight;
    private int $distance;
    private string $name;

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



