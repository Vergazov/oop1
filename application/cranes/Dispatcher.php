<?php

namespace App;

class Dispatcher
{
    public function getRightCranes($weight,$distance): string
    {
       $rightCranes = (new CranesSearcher())->searchCranes($cargo, (new Cranes())->getCranesList());
        return (new MessageCreator())->create($rightCranes, $cargo);
        $rightCranes = (new CranesSearcher())->search($weight,$distance, (new Cranes())->getCranesList());
    }
}