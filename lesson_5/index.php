<?php
require_once "vendor/autoload.php";

use \App\{Son, Daughter, SecondSon, GrandSon, GrandDaughter};

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






