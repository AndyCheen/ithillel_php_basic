<?php

namespace App;

class Daughter extends Father
{
    protected bool $husband = false;

    public function getHusband(): bool
    {
        return $this->husband;
    }

    public function setHusband(bool $husband): void {
        $this->husband = $husband;
    }
    public function toSquere(int $num): int
    {

        return pow($num, 2);
    }

    public function getAgeDivider(): float {
        return parent::ROOT_AGE / $this->age;
    }
}