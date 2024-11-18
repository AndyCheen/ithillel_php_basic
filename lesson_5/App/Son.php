<?php

namespace App;

class Son extends Father
{
    protected string $job = '';

    public function getJob(): string
    {
        return $this->job;
    }

    public function setJob(string $job): void
    {
        $this->job = $job;
    }
    public function toSquere(int $num): int
    {
        return $num * $num;
    }

    public function getAgeMiltiplier(): int {
        return $this->age * parent::ROOT_AGE;
    }
}