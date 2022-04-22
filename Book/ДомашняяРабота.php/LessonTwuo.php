<?php
$lineBrake = "<br>";

$lovePHP = file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo=') . "<br><br>";

$today_SW = date("F j, Y, g:i a");
$today_S = date("H:i:s");

switch ($today_S) {
      case $today_S >= 6 && $today_S <= 11:
      $str_1_2 = "Доброе утро, сегодня {$today_SW}";
      break;
      case $today_S >= 12 && $today_S <= 17:
      $str_1_2 = "Добрый день, сегодня {$today_SW}";
      break;
      case $today_S >= 18 && $today_S <= 23:
      $str_1_2 = "Добрый вечер, сегодня {$today_SW}";
      break;
      case $today_S >= 00 && $today_S <= 5:
      $str_1_2 = "Доброй ночи, сегодня {$today_SW}";
      break;
}

$homeJobs = "<b>Домашняя работа<br></b>";
$privetstvie = "1. Вывести приветственное сообщение в начале электронного письма: <br><br>";
$zadanie1 = "Hello, Yuriy Baragin<br>";
$zadanie2 = "2. Вывести стихотворение А.С. Пушкина с соблюдением
форматирования. В начале и в конце стихотворения должны стоять кавычки.<br><br>";
$resheniye_zadaniya2 = nl2br("\"Аптеку позабудь ты для венков лавровых
И не мори больных, но усыпляй здоровых\"<br>");
$zadanie3 = "3. Напишите скрипт, который считает и выводит на экран количество
секунд в часе.<br><br>";
$resheniye_zadaniya3 = 60 * 60 * 24;
print <<<HTMLBLOCK
<html>
<head><title>LessonTwuo Home Job</title></head>
<body bgcolor="#fffed9">

<table width = "100%" height = "100%">
  <tr>
    <td valign = "top">$lovePHP</td>
  </tr>
  <tr>
    <td valign = "top" width = "80%" height = "80%" align = "center">
    {$homeJobs} {$privetstvie} {$zadanie1}<br><br>{$zadanie2} {$resheniye_zadaniya2}<br><br>{$zadanie3}{$resheniye_zadaniya3}</td>
  </tr>
  <tr>
    <td valign = "bottom">$str_1_2</td>
  </tr>
</table>
</body>
</html>
HTMLBLOCK;
