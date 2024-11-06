<?php

// Частина 1
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

// посчитать длину массива
echo('Завдання: посчитать длину массива' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);
var_dump(count($arr));

echo(PHP_EOL);

// переместить первые 4 элемента массива в конец массива
echo('Завдання: переместить первые 4 элемента массива в конец массива' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);
$newArr = array_merge(array_slice($arr, 4), array_slice($arr, 0, 4));
var_dump($newArr);

echo(PHP_EOL);

// получить сумму 4,5,6 элемента
echo('Завдання: получить сумму 4,5,6 элемента' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);
$arrSum = array_sum([$arr[3], $arr[4], $arr[5]]); // Якщо вказані елементи в завданні рахувати від 1, або якщо рахувати з 0 елементом то замінити на array_sum([$arr[4], $arr[5], $arr[6]])
var_dump($arrSum);
// або просто додавши елементи
echo('або просто додавши елементи: ' . PHP_EOL);
$arrSum = $arr[3] + $arr[4] + $arr[5];
var_dump($arrSum);

echo(PHP_EOL);

// Частина 2
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];
  
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];

// найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
echo('Завдання: найти все элементы которые отсутствуют в первом массиве и присутствуют во втором' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);
var_dump(array_diff_key($secondArr, $firstArr));

echo(PHP_EOL);

//найти все элементы которые присутствую в первом и отсутствуют во втором
echo('Завдання: найти все элементы которые присутствую в первом и отсутствуют во втором' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);
var_dump(array_diff_key($firstArr, $secondArr));

echo(PHP_EOL);

//найти все элементы значения которых совпадают 
echo('Завдання: найти все элементы значения которых совпадают ' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);

var_dump(array_intersect_assoc($firstArr, $secondArr));

echo(PHP_EOL);

//найти все элементы значения которых отличается
echo('Завдання: найти все элементы значения которых отличается' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);
$diffs = array_diff_assoc($firstArr, $secondArr);
$diffs = array_merge($diffs, array_diff_assoc($secondArr, $firstArr));

var_dump($diffs);
echo(PHP_EOL);

// Частина 3
$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],  
];

// получить все вторые элементы вложенных массивов
echo('Завдання: получить все вторые элементы вложенных массивов' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);

$secondElems = [];

foreach ($firstArr as $item) {
    if (is_array($item) && count($item) > 1) {
        $counter = 0;
        foreach ($item as $elem) {
            if ($counter === 1) {
                $secondElems[] = $elem;
                break;
            } else {
                $counter++;
            }
        }
    }
}

var_dump($secondElems);

echo(PHP_EOL);


// получить общее количество элементов в массиве
echo('Завдання: получить общее количество элементов в массиве' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);

$count = 0;

function countElements($arr, &$counter) {
    // Або можна тут скористатися глобальною змінною global $count і тоді можна обійтися без передачі посилання в аргументі функції
    foreach ($arr as $item) {
        if (is_array($item)) {
            $counter++; // Якщо рахувати КОЖЕН елемент масиву включно з масивами
            countElements($item, $counter);
        } else {
            $counter++;
        }
    }
}
countElements($firstArr, $count);
var_dump($count);

echo(PHP_EOL);

// получить сумму всех значений в массиве
echo('Завдання: получить сумму всех значений в массиве' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);

$sum = 0;

function sumElements($arr) {
    global $sum;
    foreach ($arr as $item) {
        if (is_array($item)) {
            sumElements($item);
        } else {
            $sum += $item;
        }
    }
}
sumElements($firstArr);
var_dump($sum);

echo(PHP_EOL);