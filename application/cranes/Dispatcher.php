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
class Dispatcher
{

    public function getRightCranes($weight,$distance,$cranesList): string
    {
       $rightCranes = (new CranesSearcher())->search($cargo, (new Cranes())->getCranesList());
        return (new MessageCreator())->create($rightCranes, $cargo);

        foreach ($cranesList as $crane){
            $rightCranes = (new CranesSearcher())->search($cargoWeight,$cargoDistance,$craneWeight,$craneDistance);
        }

    }

}