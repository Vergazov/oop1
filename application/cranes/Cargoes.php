<?php

namespace App;

class Cargoes
{
    public function getCargoesList(): array
    {
        return $this->cargoes;
    }

    private array $cargoes = [
        [
            "weight" => 15,
            "distance" => 20
        ],
        [
            "weight" => 20,
            "distance" => 15
        ],
        [
            "weight" => 60,
            "distance" => 5
        ],
        [
            "weight" => 35,
            "distance" => 10
        ],

    ];
}