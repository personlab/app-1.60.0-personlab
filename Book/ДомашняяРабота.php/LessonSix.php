<?php
$lineBrake = "<br>";

$lovePHP = file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo=') . "<br><br>";

$today_SW = date("F j, Y, g:i a");
$today_S = date("H:i:s");

switch ($today_S) {
      case $today_S >= 6 && $today_S <= 11:
      $str_1_2 = "<b>Доброе утро, сегодня {$today_SW}</b>";
      break;
      case $today_S >= 12 && $today_S <= 17:
      $str_1_2 = "<b>Добрый день, сегодня {$today_SW}</b>";
      break;
      case $today_S >= 18 && $today_S <= 23:
      $str_1_2 = "<b>Добрый вечер, сегодня {$today_SW}</b>";
      break;
      case $today_S >= 00 && $today_S <= 5:
      $str_1_2 = "<b>Доброй ночи, сегодня {$today_SW}</b>";
      break;
}

//функция призывного возраста
function typeOfAge($age) {
  if ($age > 18  && $age < 28) {
    return "Возраст $age является призывным.";
  }
  return "Возраст $age не является призывным.";
}
/*print_r(typeOfAge(11));
print_r(typeOfAge(11));*/
// функция, определяющая, является ли возраст призывным.
$func = "typeOfAge"; //вызов функции возраста призывников
$func($age);

// функция равных чисел / для сравнения
function ravniyeShisla($firstNumber, $secondNumber) {
  if ($firstNumber === $secondNumber) {
  return "Это появляется только тогда когда is true.";
}
  return "Это появляется только тогда когда is foulse.";
}
// функция, определяющая, равны два числа друг другу или нет.
$funct = "ravniyeShisla";  // функция вызова сравнения чисел
 //$funct(var_dump(ravniyeShisla($firstNumber, $secondNumber));
 $funct($firstNumber, $secondNumber);

 // функция, возвращающая значение true, если хотя бы один из аргументов имеет положительное значение.
 function isPosilive($first, $second) {
   if ($first > 0 || $second > 0) {
     return nl2br("Это появляется только тогда когда один из аргументов имеет положительное значение
     (true).");
      }
   }
$fun = "isPosilive";
$fun($first, $second);

//функция, которая параметрами принимает 2 числа.
//Если их сумма больше 15 - пусть функция вернет true, а если нет - false
function isSum($firstNumber, $secondNumber) {
  if ($firstNumber + $secondNumber > $sum = 23) {
  return "Сумма меньше (True)";
}
return "Сумма меньше (foulse)";
}

$functi = "isSum";
$functi($firstNumber, $secondNumber);

$homeWork = "<b><h2>Домашняя работа</h2></b>";
$zadanie1 = "2. <b>Напишите функцию, определяющую, является ли возраст призывным.</b> <br>";
$zadanie2 = nl2br("3. <b>Напишите функцию, определяющую, равны два числа друг другу или нет.</b><br>");
$zadanie3 = nl2br("4. <b>Напишите функцию, возвращающую значение true, если хотя бы один из аргументов
имеет положительное значение.</b><br>");
$zadanie4 = nl2br("5. <b>Напишите функцию, которая параметрами принимает 2 числа.
Если их сумма больше 15 - пусть функция вернет true, а если нет - false.</b><br>");
/*$resheniye_zadaniya3 = 60 * 60 * 24;*/
print <<<HTMLBLOCK
<html>
<head><title>LessonSix HomeWork</title></head>
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
    {$zadanie1}<br>{$func(13)}<br>{$func(21)}<br><br>{$zadanie2}<br>{$funct(35, 35)}<br>{$funct(33, 33)}<br>
    <br>{$zadanie3}<br>{$fun(-1, 1)}<br><br>{$zadanie4}<br>{$functi(1, 4)}<br>{$functi(1, 7)}</td>
  </tr>
  <tr>
    <td valign = "bottom" style="color: #89b4f8">$str_1_2</td>
  </tr>
  <tr>
  <td>
    </td>
  </tr>
</table>
</body>
</html>
HTMLBLOCK;
