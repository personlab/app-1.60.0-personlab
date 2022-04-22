<?php
$lineBrake = "<br>";

$lovePHP = file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo=') . "<br><br>";

$today_SW = date("F j, Y, g:i a");
$today_S = date("H:i:s");

switch ($today_S) {
      case $today_S >= 6 && $today_S <= 11:
      $str_1_2 = "<b>Доброе утро, сегодня {$today_SW}</b";
      break;
      case $today_S >= 12 && $today_S <= 17:
      $str_1_2 = "<b>Добрый день, сегодня {$today_SW}</b";
      break;
      case $today_S >= 18 && $today_S <= 23:
      $str_1_2 = "<b>Добрый вечер, сегодня {$today_SW}</b";
      break;
      case $today_S >= 00 && $today_S <= 5:
      $str_1_2 = "<b>Доброй ночи, сегодня {$today_SW}</b";
      break;
}

function FunctionName_One($width, $height) {
  $lineBreake = "<br>";
  $area = $width * $height;
  return $area;
}
$widthOutOff = 5;
$heightOutOff = 6;
$pryamougolnik = "Прямоугольник штриной {$widthOutOff} и высотой {$heightOutOff} имеет площадь" .
FunctionName_One($widthOutOff, $heightOutOff);

$hypotLineOne = 3;
$hypotLineTwo = 4;
$hypotenuse = hypot(3, 4);
$hypotLineOtvet = "Длина гипотенузы прямоугольного треугольника с катетами {$hypotLineOne} и {$hypotLineTwo}
    равна {$hypotenuse}. {$lineBreake}";

    //Вывод случайного числа в диапазоне от 60 до 200
$sluchainoe = "От 67 до 200: = " . rand(67, 200) . $lineBreake;
$drobnoe = "От 67 до 200 деленное на 100: " . rand(67, 200)/100 . $lineBreake;

$homeWork = "<b><h2>Домашняя работа</h2></b>";
$zadanie1 = "3. <b>Напишите функцию, которая принимает два аргумента,
выполняет вычисление с их использованием, а затем возвращает предложение
с результатом в браузер. Вывод должен содержать высоту и ширину прямоугольника.
Организуйте вывод внутри функции, а затем за ее пределами.</b> <br>";
$zadanie2 = "4. <b>Найдите функцию, которая находит длину гипотенузы
прямоугольного треугольника. Напишите скрипт с использованием этой функции</b>
<br>";
$zadanie3 = "5. <b>Используя функцию генерации случайного числа, сгенерируйте целое число в диапазоне от 67 до 200.</b>
<br>";
$zadanie4 = "6. <b>Используя функцию генерации случайного числа, сгенерируйте дробное число в диапазоне от 67 до 200.</b>
<br>";

print <<<HTMLBLOCK
<html>
<head><title>LessonFive HomeWork</title></head>
<body bgcolor="#292a2e">


<table width = "100%" height = "100%">
  <tr>
    <td valign = "top" style="color: red">$lovePHP</td>
  </tr>
  <tr>
    <td valign = "top" align = "center" style="color: #89b4f8">{$homeWork}</td>
  </tr>
  <tr>
    <td valign = "top" width = "80%" height = "80%" align = "center" style="color: #babbbf">
    {$zadanie1}<br>{$pryamougolnik}<br><br>{$zadanie2}<br>{$hypotLineOtvet}<br><br>$zadanie3<br>{$sluchainoe}
    <br><br>{$zadanie4}<br>{$drobnoe}</td>

  </tr>
  <tr>
    <td valign = "bottom" style="color: #89b4f8">$str_1_2</td>
  </tr>
</table>
</body>
</html>
HTMLBLOCK;
