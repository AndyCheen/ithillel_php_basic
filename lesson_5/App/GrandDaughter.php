<?php

namespace App;

class GrandDaughter extends Daughter
{
    protected int $dollAmount = 0;

    public function getDollAmount(): int
    {
        return $this->dollAmount;
    }

    public function setDollAmount(int $dollAmount): void
    {
        $this->dollAmount = $dollAmount;
    }

    public function getAgeDifferenceToGrandParent(): int {
        return self::ROOT_AGE - $this->age;
    }
}