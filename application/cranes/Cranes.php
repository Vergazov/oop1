<?php

namespace App;

class Cranes
{
    private int $weight;
    private int $distance;
    private string $name;

    public function __construct(string $name, int $weight, int $distance)
    {
        $this->name = $name;
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

    public function getName(): string
    {
        return $this->name;
    }
}



