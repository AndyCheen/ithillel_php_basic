<?php

namespace App;

abstract class Father
{
    protected string $name;
    protected int $age;

    // Так як це абстрактний клас і створюватись обʼєкти цього класа не будуть (і змінювати age) була створена ця константа для можливості отримати значення кореневого класу.
    protected const ROOT_AGE = 60;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function setAge(int $age): void {
        $this->age = $age;
    }

    public abstract function toSquere(int $num): int;
}