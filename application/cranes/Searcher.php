<?php

namespace App;

class Searcher
{
    public function findRight($cargo,$cranes)
    {
        $rightCranes = [];
        foreach ($cranes as $crane){
            if($cargo->getWeight() <= $crane->getWeight() && $cargo->getDistance() <= $crane->getDistance()){
                $rightCranes[] = $crane;
            }
        }
        return  $rightCranes;

    }
}