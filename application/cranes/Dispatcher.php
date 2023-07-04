<?php

namespace App;

class Dispatcher
{

    public function getRightCranes($cargo): string
    {
        $searcher = new CranesSearcher();
        $cranes = [
            new Cranes("КП-1550",50,12),
            new Cranes("КП-0042",42,12),
            new Cranes("КП-0070",70,8),
            new Cranes("КПМ-0215",15,25),
            new Cranes("КПМ-0315",15,26),
            new Cranes("КПМ-0220",20,20),
        ];
        foreach ($cranes as $crane){
            $rightCranes[] = $searcher->search($cargo,[$crane->getWeight(),$crane->getDistance(), $crane->getName()]);
           echo'<pre>';
           print_r([$crane->getWeight(),$crane->getDistance(), $crane->getName()]);
           echo'</pre>';
        }
        return (new MessageCreator())->create($rightCranes, $cargo);
    }

}