<?php

namespace App;

class Cranes
{
    public function getCranesList(): array
    {
        return $this->cranes;
    }

    private array $cranes = [
        [
            "name" => "КП-1550",
            "weight" => 50,
            "distance" => 12
        ],
        [
            "name" => "КП-0042",
            "weight" => 42,
            "distance" => 12
        ],
        [
            "name" => "КП-0070",
            "weight" => 70,
            "distance" => 8
        ],
        [
            "name" => "КПМ-0215",
            "weight" => 15,
            "distance" => 25
        ],
        [
            "name" => "КПМ-0315",
            "weight" => 15,
            "distance" => 26
        ],
        [
            "name" => "КПМ-0220",
            "weight" => 20,
            "distance" => 20
        ],
    ];

}