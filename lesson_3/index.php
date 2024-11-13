<?php

// 1. Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.

$arr = [
    'a',
    'b',
    'lololo' => [
        '1',
        '2'
    ],
    [
        'aa',
        'bb',
        [
            'aaa',
            'bbb'
        ]
    ]
];
function getElementsFromArray(array $array, int $number): array {
    static $elements = [];

    $counter = 0; // Змінна для підрахунку на якому елементі в даний момент цикл для того щоб дана функція працювала не залежно це звичайни масив чи асоціативний
    foreach ($array as $item) {
        // Якщо зараз цикл перебуває на елементі порядковий номер якого ми передали в аргументі функції - пушимо цей елемент в масив $elements
        if ($counter === $number) {
            $elements[] = $item;
        }
        // Якщо даний елемент це масив - провалюємося в нього
        if (is_array($item)) {
            getElementsFromArray($item, $number);
        }
        $counter++;
    }
    return $elements;
}
echo('1. Завдання: создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);
var_dump(getElementsFromArray($arr, 2));

echo(PHP_EOL);


// 2. Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false

// не типізував аргументи $text та $lettert тому що якщо задати для них тип string умова !is_string($text) || !is_string($letter) не буде спрацьовувати
// ці аргументи будуть конвертуватися в стрінг навіть якщо ми передамо в цих змінних не текст. І якщо не буде знайдено $letter в $text буде повернуто int(0)
function countLetter($text, $letter): int|bool {
    if (!is_string($text) || !is_string($letter)) {
        return false;
    }
    $amount = mb_substr_count($text, $letter);
    return $amount;
}

$text = 'test b text bbb and b';

echo('2. Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);
var_dump(countLetter($text, 'b'));

echo(PHP_EOL);


// 3. Создать функцию которая считает сумму значений всех элементов массива произвольной глубины

function countArraySum(array $array): int {
    static $sum = 0;

    foreach ($array as $item) {
        if (is_array($item)) {
            countArraySum($item);
        }
        // Перевірку gettype використовувати якщо потрібно суто число. Також можна трохи переписати код і використати is_numeric якщо можна додавати строки коли їх можна конвертувати в числа
        if (gettype($item) === 'integer') {
            $sum += $item;
        }
    }

    return $sum;
}

$arr = [
    'a' => 3,
    'c' => 21,
    3,
    'text' => 'text',
    'array' => [
        'a' => 1,
        'c' => 2,
        'array' => [
            'text' => 'text',
            32,
            1,
            [1, 'b', true]
        ]
    ],
    11
];

echo('3. Создать функцию которая считает сумму значений всех элементов массива произвольной глубины' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);
var_dump(countArraySum($arr));

echo(PHP_EOL);

// 4. Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float
// Можливо не правильно зрозумів завдання. Зробив цю частину "Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера"
// Не зрозумів що малося на увазі тут: "размер возвращать в float".
function getAmoutSquares(float $bigSquare, float $smallSquare): ?int {

    if ($bigSquare < $smallSquare) {
        return null;
    }
    return floor($bigSquare / $smallSquare);
}

echo('4. Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float' . PHP_EOL);
echo('Відповідь: ' . PHP_EOL);
var_dump(getAmoutSquares(9, 3) !== null ? getAmoutSquares(9, 3) . ' квадратів' : 'Некоректно введені дані. Розмір більшого квадрата менший за розмір більшого');

echo(PHP_EOL);