<?php
require_once 'CranesSearcher.php';
require_once 'MessageCreator.php';

class Dispatcher
{
    public function getRightCranes($cargo): string
    {
       $rightCranes = (new CranesSearcher())->searchCranes($cargo, (new Cranes())->getCranesList());
        return (new MessageCreator())->create($rightCranes, $cargo);
    }
}