<?php

require_once 'Cranes.php';

class CranesSearcher
{
    public function searchCranes($cargo, $cranes): array
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