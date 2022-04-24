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

$homeWork = "<b><h2>Домашняя работа</h2></b>";
$zadanie1 = "2. <b>Напишите скрипт, в котором по-очереди переменная будет
изменять свое значение с помощью комбинированных операторов:</b> <br><br>";
$resheniye_zadaniya1 = "Стартовое значение 0: " . $variable = 0 . $lineBrake;
$resheniye_zadaniya2 = "Увеличьте значение переменной на 7: " . $variable += 7;
$resheniye_zadaniya3 = "Увеличьте значение переменной в 4 раза: " . $variable *= 4;
$resheniye_zadaniya4 = "Уменьшите значение переменной на 8: " . $variable -= 8;
$resheniye_zadaniya5 = "Разделите значение переменной на 4: " . $variable /= 4;
$resheniye_zadaniya6 = "Возведите значение переменной в 3 степень: " . $variable **= 3;
$resheniye_zadaniya7 = "Найдите остаток от деления переменной на 3: " . $variable %= 3;

$zadanie2 = "4. <b>Создайте 2 переменных и присвойте им значения 50 и 70
соответственно</b><br><br>Cоздайте переменную $ pupil и присвойте ей строку с
именем первой переменной. Выведите на экран $$ pupil}.<br>Создайте еще одну
переменную $ student и присвойте ей строку с именем второй переменной.
Выведите на экран $$ student}.<br><br>";
$resheniye_zadaniya8 = 50;
$resheniye_zadaniya9 = 70;
$pupil = "resheniye_zadaniya8";
$student = "resheniye_zadaniya9";
//$zadanie3 = "3. <b>Напишите скрипт, который считает и выводит на экран количество
//секунд в часе.</b><br><br>";
//$resheniye_zadaniya3 = 60 * 60 * 24;
print <<<HTMLBLOCK
<html>
<head><title>LessonFour HomeWork</title></head>
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
    {$zadanie1}{$resheniye_zadaniya1}{$resheniye_zadaniya2}<br>
    {$resheniye_zadaniya3}<br>{$resheniye_zadaniya4}<br>{$resheniye_zadaniya5}<br>
    {$resheniye_zadaniya6}<br>{$resheniye_zadaniya7}<br><br>$zadanie2<br>
    В нашей компании ${$student} студентов уже развивают более ${$pupil} высокотехнологичных
    проектов.  <br></td>

  </tr>
  <tr>
    <td valign = "bottom" style="color: #89b4f8">$str_1_2</td>
  </tr>
</table>
</body>
</html>
HTMLBLOCK;
