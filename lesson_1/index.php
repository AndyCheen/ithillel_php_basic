<?php


//Дії з числами
//Отримати залишок від ділення 7 на 3
echo 7 % 3;
echo "<br>";

//Отримати цілу частину ділення 7 и 7,15
echo round(7 / 7.15);
echo "<br>";

//Отримати корінь из 25
echo sqrt(25);
echo "<br>";

//Дії зі строкаи
//Отримати 4-е слово з фрази - Десять негритят пошли купаться в море
$str = "Десять негритят пошли купаться в море";
echo explode(" ", $str)[3]; // або спочатку створити окремий масив зі значенням explode(" ", $str) і вже вивсети його четвертий елемент
echo "<br>";

//Отримати 17-й символ із фрази - Десять негритят пошли купаться в море
$str2 = "Десять негритят пошли купаться в море";
$char = mb_substr($str2, 16, 1);

echo $char;
echo "<br>";

//Зробити великою кожну першу букву слів фрази - Десять негритят пошли купаться в море
$str3 = "Десять негритят пошли купаться в море";
echo  mb_convert_case($str3, MB_CASE_TITLE);
echo "<br>";

//Порахувати длину строки - Десять негритят пошли купаться в море
echo mb_strlen("Десять негритят пошли купаться в море");
echo "<br>";

//Дії з логіческими даними
//Чи вірно твердження true дорівнює 1
//Так, томущо при == при порівнянні з булевим типом порівнюване значення перетворюється теж в булеве значення і 1 перетворюється на true, а true == true

//Чи вірно твердження false тождественно 0
// Ні, тому що у цих значень різний тип


//(Для вирішення цих питань потрібно опанувати рівняння то тотожність у РНР)

//Яка строка більше three - три
var_dump(mb_strlen("three") > mb_strlen("три")); //Якщо використовувати функцію знаходження довжини строки по символам незалежно від мови то "three" довше
echo "<br>";
var_dump(strlen("three") < strlen("три")); //Якщо використовувати функцію знаходження довжини строки по байтам то "три" довше так як кириличні символи використовують по 2 байти на кожен символ. В слові "three" 5 байтів, а в "три" 6 байтів.
echo "<br>";

//Яке число більше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2
$numOne = 125 * 13 + 7;
$numTwo = (223 + 28) * 2;
echo "125 умножить на 13 плюс 7 дорівнює {$numOne}, а 223 плюс 28 умножить 2 дорівнює {$numTwo}";
echo "<br>";
if ($numOne > $numTwo) {
    echo "125 умножить на 13 плюс 7 більше ніж 223 плюс 28 умножить 2";
} else if ($numOne < $numTwo) {
    echo "125 умножить на 13 плюс 7 менше ніж 223 плюс 28 умножить 2";
} else {
    echo "числа рівні";
}
echo "<br>";

// Якщо треба просто дізнатися найбільше число то можна скористатися методо max
echo max($numOne, $numTwo);