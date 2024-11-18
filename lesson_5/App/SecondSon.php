<?php

namespace App;

final class SecondSon extends Father
{
    protected int $shoolGrade = 1;

    public function getShoolGrade(): int {
        return $this->shoolGrade;
    }

    public function setShoolGrade(int $shoolGrade): void {
        $this->shoolGrade = $shoolGrade;
    }

    public function toSquere(int $num): int
    {

        return $num * $num;
    }

    public function getAgeSum(): int {
        return $this->age + parent::ROOT_AGE;
    }
}