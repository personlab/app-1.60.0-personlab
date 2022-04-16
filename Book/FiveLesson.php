<?php
$lineBreak ="<br>";
print_r("Welcom? friend! {$lineBreak}");
$straigTexst = "How are you?";

//стандартные функции
$reverseTexst = strrev($straigTexst); // текст на оборот
print_r("Straig Texst: {$straigTexst}. {$lineBreak}. Straig Texst: {$reverseTexst}. {$lineBreak}");

//возведение в степень
$resultOper = 2**3;
$resultPow = pow(2, 3);
print_r("Result1: {$resultOper} {$lineBreak} Result2: {$resultPow} {$lineBreak}");

//функция без аргументов
$rundomNumber = rand(); // получение рандомного числа, формат: 1416688598
print_r("Rundom number: {$rundomNumber} {$lineBreak}");
$rundomNumber = rand(33, 77); // диапазон рандомного числа
print_r("Rundom number: {$rundomNumber} {$lineBreak}");

//функции с параметром по умолчанию
$floatNumber = 56.7689; // округляет числа с плавающей точкой
$result = round($floatNumber, 1); // округляет числа с плавающей точкой, число после запятой это число знаков после точки
print_r("Round: {$result} {$lineBreak}");

// описание функции
/*
function <имя функции>(аргументы функции) {
<тело функции>
retern <результат вычислений>;
}
*/
// пользовательская функция без аргумента
function greetingAnna() {
  $lineBreak = "<br>"; // создаем переменную для функции внутри функции, так как разные области видимости.
  return "Hello, Anna!{$lineBreak}";
}
echo greetingAnna();
print_r(greetingAnna());

// полтьзовательская функция с аргументом
function greetingNewPerson($name) {
  $lineBreak = "<br>";
  return "Hello, {$name}! {$lineBreak}";
}
echo greetingNewPerson("Alex");
print_r(greetingNewPerson("Axel"));

//пользовательская функция с аргументами
function greetingNewPersonByNewWorld($name, $greetingWord) {
  $lineBreak = "<br>";
  return "{$greetingWord}, {$name}! {$lineBreak}";
}
echo greetingNewPersonByNewWorld("Sonya", "HI");
print_r(greetingNewPersonByNewWorld("Jane", "Welcome"));

//пользовательская функция с параметром по умолчанию
function greetinSasha($greetingWord, $name = "Sasha") {
  $lineBreak = "<br>";
return "{$greetingWord}, {$name}! {$lineBreak}";
}
print_r(greetinSasha("Welcome nice"));
print_r(greetinSasha("Hello", "Victory")); // мы можем изменить имя, но по умолчанию стоит Sasha

//выводитяс только первый вывод при запросе
function howReturnWorks() {
  return 8; //> = вывод
  return 9;
}
print_r(howReturnWorks());

//функция без return - это ошибка
function sum($a, $b) {
  $lineBreak = "<br>";
  $sum = $a + $b;
}
$resultSum = sum(5, 7); // результат не определен NULL
print_r(var_dump($resultSum));
print_r($lineBreak);

$firsRow = "Welcome to my website! " . "<br>" . greetingNewPerson("Edward") . "<br>";
print_r($firsRow);

// функция выражения
function sumOne($a, $b) {
  $sum = $a + $b;
  return $sum;
}

$a = 7;
$b = 9;
$c = $a + $b + sumOne(5, 3); // 7 + 9 + сумму в скобках = 24
print_r($c);
print_r($lineBreak);

// min это отображение минимального числа
$minVariable = min(2, 9);
print_r($minVariable);
print_r($lineBreak);

$minVariableOne = min(2+1, 9);
print_r($minVariableOne);
print_r($lineBreak);

$negativeNum = -8;
$minVariableTwo = min(1, abs($negativeNum)); // abs это возврат модуля числа, модуль числа отрицательного числа, это число без знака
print_r($minVariableTwo); // минимальное значение это 1 а модуль -8 = 8
print_r($lineBreak);
