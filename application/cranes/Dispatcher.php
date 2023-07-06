<?php

namespace App;

class Dispatcher
{
    public function getRightCranes($cargo): string
    {
        $searcher = new Searcher();
        $cranes = [
            new Crane("КП-1550",50,12),
            new Crane("КП-0042",42,12),
            new Crane("КП-0070",70,8),
            new Crane("КПМ-0215",15,25),
            new Crane("КПМ-0315",15,26),
            new Crane("КПМ-0220",20,20),
        ];
        $rightCranes = $searcher->findRight($cargo, $cranes);
        return (new MessageCreator())->create($cargo,$rightCranes);
    }

}