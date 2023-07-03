<?php

namespace App;

$cranesList = [
    new Cranes("КП-1550",50,12),
    new Cranes("КП-0042",42,12),
    new Cranes("КП-0070",70,8),
    new Cranes("КПМ-0215",15,25),
    new Cranes("КПМ-0315",15,26),
    new Cranes("КПМ-0220",20,20),
];


class CranesSearcher
{


    public function search($cargo, $cranes): array
    {
        $rightCranes = [];
        foreach ($cranes as $crane) {
            if ($crane['weight'] >= $cargo['weight'] && $crane['distance'] >= $cargo['distance']) {
                $rightCranes[] = $crane;
            }
        }
        return $rightCranes;
    }
}