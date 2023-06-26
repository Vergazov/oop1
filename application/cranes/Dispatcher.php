<?php
require_once 'task2.php';
require_once 'CranesSearcher.php';
require_once 'MessageCreator.php';

class Dispatcher
{
    public function getRightCranes($cargo): string
    {
       $rightCranes =  (new CranesSearcher())->searchCranes($cargo, $this->getCranes());
        return (new MessageCreator())->create($rightCranes, $cargo);
    }
    private function getCranes(): array
    {
        return (new Cranes())->cranes;
    }
}