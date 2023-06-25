<?php


class craneSearcher
{
    public function find($cargo, $cranes): array
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