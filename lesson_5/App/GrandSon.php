<?php

namespace App;

class GrandSon extends Son
{
    protected int $ballAmount = 0;

    public function getBallAmount(): int
    {
        return $this->ballAmount;
    }

    public function setBallAmount(int $ballAmount): void
    {
        $this->ballAmount = $ballAmount;
    }

    public function getAgeDifference(): int {
        return parent::getAge() - $this->age;
    }

    public function getAgeSumToGrandParent(): int {
        return $this->age + self::ROOT_AGE;
    }
}