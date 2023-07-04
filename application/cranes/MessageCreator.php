<?php

namespace App;

class MessageCreator
{
    public function create($rightCranes, $cargo): string
    {
        if (count($rightCranes) === 0) {
            return "Для передвижения груза массой " . $cargo[0] . " тонн на расстояние " . $cargo[1] .
                " подходящего крана не найдено";
        }
        if (count($rightCranes) === 1) {
            return "Чтобы передвинуть груз массой " . $cargo[0] . " на расстояние " . $cargo[1] .
                " нужен кран марки " . $this->getCranesNames($rightCranes);
        }
        if (count($rightCranes) > 1) {
            return "Чтобы передвинуть груз массой " . $cargo[0] . " тонн на расстояние " . $cargo[1] .
                " подойдет любой из этих кранов: " . $this->getCranesNames($rightCranes);
        }
    }

    private function getCranesNames($rightCranes): string
    {
        return implode(', ', $rightCranes);
    }


}