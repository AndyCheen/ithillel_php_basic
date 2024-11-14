<?php

// 1. Создать родительский (главный класс) - Father
//  Класс должен содержать 2 свойства - $name та $age
//  Каждое свойство должно иметь геттеры и сеттеры - getName() та setName()
//  должен содержать абстрактную функцию возведения в степень - toSquere()
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

// 2. Создать 3 наследника родительского класса - Son, Daughter та SecondSon
//  Каждый наследник должен содержать одно свойство - окрім наслідуваних від бальківського класу: Son - $job, Daughter - $husband, SecondSon - $shoolGrade
//  Каждое свойство должно иметь геттер и сеттер - getJob() та setJob(), getHusband() та setHusband(), getShoolGrade() та setShoolGrade()
//  Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными - getAgeMiltiplier(), getAgeDivider() та getAgeSum()
//  Один наследник не должен быть наследуемым - SecondSon

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

// 3. Создать по 2 наследника от наследников первого уровня - GrandSon та GrandDaughter
//  Каждое свойство должно иметь геттер и сеттер - getBallAmount(),  setBallAmount() та getDollAmount(), setDollAmount
//  Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными - методи getAgeDifference у обох класів
//  И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством - getAgeDifferenceToGrandParent() та getAgeDifferenceToGrandParent()
//  В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции - класи Son та Daughter містять реалізацію метода toSquere

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

// В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции - реалізація абстрактної функції toSquere є в класах Son, Daughter та SecondSon

$devid = new Son();
$lucy = new Daughter();
$bob = new SecondSon();

$devid->setAge(30);
$devid->setName('Devid');
$devid->setJob('Artist');

$lucy->setAge(28);
$lucy->setHusband(true);
$lucy->setName('Lucy');

$bob->setAge(15);
$bob->setName('Bob');
$bob->setShoolGrade(8);

$ann = new GrandDaughter();
$sam = new GrandSon();

$ann->setAge(8);
$ann->setName('Ann');
$ann->setHusband(false);
$ann->setDollAmount(5);

$sam->setAge(10);
$sam->setName('Sam');
$sam->setBallAmount(1);


echo $devid->getName() . PHP_EOL . 'Вік: ' . $devid->getAge() . PHP_EOL . 'Працює: ' . $devid->getJob() . PHP_EOL . 'Метод toSquere(3) поевертає: ' . $devid->toSquere(3) . PHP_EOL . 'Вік батька помножений на власний: ' . $devid->getAgeMiltiplier() . PHP_EOL;
echo $lucy->getName() . PHP_EOL . 'Вік: ' . $lucy->getAge() . PHP_EOL . 'Заміжня: ' . $lucy->getHusband() . PHP_EOL . 'Метод toSquere(3) поевертає: ' . $lucy->toSquere(3) . PHP_EOL . 'Батько старший в: ' . round($lucy->getAgeDivider(), 1) . ' раз' . PHP_EOL;
echo $bob->getName() . PHP_EOL . 'Вік: ' . $bob->getAge() . PHP_EOL . 'Клас в школі: ' . $bob->getShoolGrade() . PHP_EOL . 'Метод toSquere(3) поевертає: ' . $bob->toSquere(3) . PHP_EOL . 'Вік разом з батьком: ' . $bob->getAgeSum() . ' років' . PHP_EOL;


echo $ann->getName() . PHP_EOL . 'Вік: ' . $ann->getAge() . PHP_EOL . 'Має ляльок: ' . $ann->getDollAmount() . PHP_EOL . 'Різниця з віком діда: ' . $ann->getAgeDifferenceToGrandParent() . ' років' . PHP_EOL;
echo $sam->getName() . PHP_EOL . 'Вік: ' . $sam->getAge() . PHP_EOL . 'Має мʼячів: ' . $sam->getBallAmount() . PHP_EOL . 'Вік разом з дідом: ' . $sam->getAgeSumToGrandParent() . ' років' . PHP_EOL;






