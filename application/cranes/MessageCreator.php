<?php

namespace App;

class MessageCreator
{
    public function create($rightCranes, $cargo): string
    {
        $amount = count($rightCranes);

        if ( $amount === 0) {
            return "Для передвижения груза массой " . $cargo->getWeight() . " тонн на расстояние " . $cargo->getDistance() .
                " подходящего крана не найдено";
        }
        if ( $amount === 1) {
            return "Чтобы передвинуть груз массой " . $cargo->getWeight() . " на расстояние " . $cargo->getDistance() .
                " нужен кран марки " . $this->glueCranesNames($rightCranes);
        }
        if ( $amount > 1) {
            return "Чтобы передвинуть груз массой " . $cargo->getWeight() . " тонн на расстояние " . $cargo->getDistance() .
                " подойдет любой из этих кранов: " . $this->glueCranesNames($rightCranes);
        }
    }

    private function glueCranesNames($rightCranes): string
    {
        return implode(', ', $rightCranes);
    }

}