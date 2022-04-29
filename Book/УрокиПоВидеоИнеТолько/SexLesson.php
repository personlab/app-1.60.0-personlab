<?php

$lineBreake = "<br>";

function FunctionName($width, $height) {
  $lineBreake = "<br>";
  $area = $width * $height;
  print_r("Прямоугольник шириной {$width} и высотой {$height} имеет площадь {$area}. {$lineBreake}");
}
FunctionName(5,6);


//вывод переменной вне функции
function FunctionName_One($width, $height) {
  $lineBreake = "<br>";
  $area = $width * $height;
  return $area;
}
$widthOutOff = 5;
$heightOutOff = 6;
print_r("Прямоугольник штриной {$widthOutOff} и высотой {$heightOutOff} имеет площадь" .
FunctionName_One($widthOutOff, $heightOutOff) ."{$lineBreake}");

//вычисление гипотенузы прямоугольного треугольника
$hypotLineOne = 3;
$hypotLineTwo = 4;
$hypotenuse = hypot(3, 4);
print_r("Длина гипотенузы прямоугольного треугольника с катетами {$hypotLineOne} и {$hypotLineTwo}
    равна {$hypotenuse}. {$lineBreake}");

//Вывод случайного числа в диапазоне от 60 до 200
print_r("От 60 до 200: " . rand(60, 200) . $lineBreake);
print_r("От 60 до 200 деленное на 100: " . rand(60, 200)/100 . $lineBreake);


print_r("<b>Комбинированные операторы</b>");
print_r($lineBreake);
// Увеличение значения на 7
$variable += 7;
print_r("комбинированный оператор сложения: " . $variable . $lineBreake);
$variable *= 4;
print_r("комбинированный оператор умножение: " . $variable . $lineBreake);
$variable -= 8;
print_r("комбинированный оператор вычитание: " . $variable . $lineBreake);
$variable /= 4;
print_r("комбинированный оператор деление: " . $variable . $lineBreake);
$variable **= 3;
print_r("комбинированный оператор возведение в степень: " . $variable . $lineBreake);
$variable %= 3;
print_r("комбинированный оператор вычисление остатка: " . $variable . $lineBreake);
print_r($lineBreake);
print_r($lineBreake);

// переменные переменных
$varA = 50;
$varB = 70;
// присвоили переменной $tetris в качестве значения сроку с именем первой переменнгй
$tetris = "varA";
// второй переменной $stupid присвоили второе значение
$stupid = "varB";
print_r("количество студентов: ${$stupid} Количество учеников лицея: ${$tetris} {$lineBreake}");
print_r($lineBreake);


//возможна и такая конструкция

$varC = "hello";
$$varC = "world";
print_r("{$varC} + ${$varC}");
print_r($lineBreake);
print_r("{$varC} + $hello");
print_r($lineBreake);
print_r($lineBreake);


$a = 67;
$b = 56;
$d = $a > $b;
/* > < результат сравнения двух чисел это как вопрос
а больше б? Тип данных булево "Истина или ложь"
Результат ответа true(да) fols(нет)
*/
print_r($d . $lineBreake);
var_dump($d);
print_r($lineBreake);
$d = $a < $b;
var_dump($d);
print_r($lineBreake);
$d = $a <= $b;
var_dump($d);
print_r($lineBreake);
$d = $a >= $b;
var_dump($d);
print_r($lineBreake);
$d = $a === $b;
var_dump($d);
print_r($lineBreake);
$d = $a !== $b;
var_dump($d);
print_r($lineBreake);

//Нежелательные операторы
$d = $a != $b;
var_dump($d);
print_r($lineBreake);
$d = $a == $b;
var_dump($d);
print_r($lineBreake);
print_r($lineBreake);

//Сравнение возраста

function isTeam($age) {
  return $age < 19;
}
var_dump(isTeam(25));
print_r($lineBreake);
var_dump(isTeam(15));
print_r($lineBreake);
print_r($lineBreake);

//Сравнение возраста правильное
print_r("Сравнение возраста $lineBreake");
function isTeam_One_correct($age) {
  return $age <= 19 && $age > 10; // двойной && это "И" логическое умножение оноже
  //назыввается коньюнкцией -- true И true = true
}
// || дизъюнкция, логическая "ИЛИ" true ИЛИ false = true
// ! Инверсия/ логическое НЕ true = false
// !! Двойная инверсия
var_dump(isTeam_One_correct(25));
print_r($lineBreake);
var_dump(isTeam_One_correct(15));
print_r($lineBreake);
var_dump(isTeam_One_correct(19));
print_r($lineBreake);
print_r($lineBreake);

//корректность пароля
function isPasswordCorrect($pass) {
  $passGoldenStandart = "1234";
  return $pass === $passGoldenStandart;
}
print_r("Является ли пароль корректным?");
var_dump(isPasswordCorrect("1234"));
print_r($lineBreake);
print_r("Является ли пароль корректным?");
var_dump(isPasswordCorrect("4444"));
print_r($lineBreake);
print_r($lineBreake);


function isEven($num) {
  return $num %2 === 0;
}
print_r("Является ли чсило четное?" . $lineBreake);
var_dump(isEven(6));
print_r($lineBreake);
var_dump(isEven(9));
print_r($lineBreake);
print_r($lineBreake);

$a = 5;
$b = "5";
$d = $a + $b;
print_r($d);  // php язык со слабой типизацией
// спокойно складывает числа со строками

// 0, '', null - false
// любое другое - eio_truncate
print_r($lineBreake);
print_r($lineBreake);
print_r(0 || 1); // 0 => false, 1 => true; false || true => true => 1
print_r($lineBreake);
var_dump('' === false);
print_r($lineBreake);
var_dump('' == false);
print_r($lineBreake);
print_r($lineBreake);

//bool / boolen
