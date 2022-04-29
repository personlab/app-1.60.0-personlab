<?php
$lineBrake = "<br>";

// выводит "I love PHP"
echo file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo=') . "<br><br>";

print <<<HTMLBLOCK
<html>
<head><title>TenLesson дата и время</title></head>
<body bgcolor="#fffed9">
</body>
</html>
HTMLBLOCK;

// Приветствие, время
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
print_r($str_1_2 . "<br>");
print_r($lineBrake);

print_r(time());
print_r($lineBrake);
const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;
$currentYear = intval(floor(time()/SECONDS_IN_YEAR) + 1970) . "<br>"; //Год
print_r($currentYear);
print_r($lineBrake);
print_r($lineBrake);
print_r("День<br>");
print_r(date("D")); // день

print_r($lineBrake);
print_r($lineBrake);

print_r(mktime(0, 0, 0, 20, 3, 2022) . "<br>");

print_r(date_default_timezone_get() . "<br>");

print_r(date_default_timezone_set("Europe/London") . "<br>");
print_r(date_default_timezone_get() . "<br>");
