<?php


class MessageCreator
{
    public function create($rightCranes, $cargo): string
    {
        if (count($rightCranes) === 0) {
            return "Для передвижения груза массой " . $cargo['weight'] . " тонн на расстояние " . $cargo['distance'] .
                " подходящего крана не найдено";
        }
        if (count($rightCranes) === 1) {
            return "Чтобы передвинуть груз массой " . $cargo['weight'] . " на расстояние " . $cargo['distance'] .
                " нужен кран марки " . $this->getCranesNames($rightCranes);
        }
        if (count($rightCranes) > 1) {
            return "Чтобы передвинуть груз массой " . $cargo['weight'] . " тонн на расстояние " . $cargo['distance'] .
                " подойдет любой из этих кранов: " . $this->getCranesNames($rightCranes);
        }
    }

    private function getCranesNames($rightCranes): string
    {
        $cranesNames = array_map([$this,'getCraneName'], $rightCranes);
        return implode(', ', $cranesNames);
    }

    private static function getCraneName($rightCranes): string
    {
        return $rightCranes['name'];
    }
}