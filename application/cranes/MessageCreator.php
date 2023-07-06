<?php

namespace App;

class MessageCreator
{
    public function create($cargo, $rightCranes): string
    {
        $amount = count($rightCranes);

        if ( $amount === 0) {
            return "Для передвижения груза массой " . $cargo->getWeight() . " тонн на расстояние " . $cargo->getDistance() .
                " подходящего крана не найдено";
        }
        if ( $amount === 1) {
            return "Чтобы передвинуть груз массой " . $cargo->getWeight() . " на расстояние " . $cargo->getDistance() .
                " нужен кран марки " . $rightCranes[0]->getName();
            // Указываю на 0-й индекс, так как если у нас подходящий кран один, то сюда будет передан массив с 1 краном внутри. На него и указываю.
        }
        if ( $amount > 1) {
            return "Чтобы передвинуть груз массой " . $cargo->getWeight() . " тонн на расстояние " . $cargo->getDistance() .
                " подойдет любой из этих кранов: " . $this->getCranesNames($rightCranes);
        }
    }


    private function getCranesNames($rightCranes): string
    {
        $cranesNames = [];
        foreach($rightCranes as $crane) {
            $cranesNames[] = $crane->getName();
        }
        return $this->glueCranesNames($cranesNames);
    }

    private function glueCranesNames($cranesNames): string
    {
        return implode(', ', $cranesNames);
    }

}