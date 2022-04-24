<?php
function page_header7($color = '292a2e', $title = 'LessonSeven', $header = 'Welcome') {
    print '<html><head><title>
    Welcome to ' . $title . '</title></head>';
    print '<body bgcolor="#' . $color . '">';
    print "<h1><center style='color: #babbbf'>$header</center></h1>";
}
page_header7();

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

// время
$time = ($_POST['time']);
if ($time > 0 && $time <= 59) {
  if ($time > 0 && $time <= 14) {
    $result_time = "Первая четверть часа";

  }  elseif ($time >= 15 && $time <= 29) {
    $result_time = "Вторая четверть часа";

  }  elseif ($time >= 30 && $time <= 44) {
    $result_time = "Третья четверть часа";

  }  elseif ($time >= 45 && $time <= 59) {
    $result_time = "Четвертая четверть часа";
      }
} else {
  $result_time = "Введите цело значение от 1 до 59!";
  }
$vremya_time = $result_time;


// времена года
$month = ($_POST['month']);
if ($month > 0 && $month <= 13) {
  if ($month <= 2 || $month === 13) {
    $result = "Зима";
  }
  elseif ($month >= 3 && $month <= 5) {
    $result = "Весна";
  }
  elseif ($month >= 6 && $month <= 8) {
    $result = "Лето";
  }
  elseif ($month >= 9 && $month <= 11) {
    $result = "Осень";
  }
  elseif ($month >= 12) {
    $result = "Зима";
}
} else {
  $result = "Введите целое значение от 1 до 12!";
  }
$vremyaGoda = $result;

//вывод числа в третью степень
$num = ($_POST['num']);
  if ($num % 2 === 0) {
    $result_num = "Вывожу в квадрат: " . pow($num, 2);
  }
  else {
    $result_num = "Вывожу в третью степень: " . pow($num, 3);
  }
  $num_set = $result_num;

  //Поиск наибольшего числа
  $numSmax = ($_POST['numSmax']);
  $maxH = ($numSmax - $numSmax % 100) / 100;           // (346 -46) / 100 =3
  $maxD = ($numSmax % 100 - $numSmax %10) / 10;        // (46 - 6) / 10 = 4
  $maxU = $numSmax % 10;                            // 6
  if ($maxH >= $maxD && $maxH >= $maxU) {
    if ($maxD >= $maxU) {
      $result_numSmax = $maxH.$maxD.$maxU;
    }
    else {
      $result_numSmax = $maxH.$maxU.$maxD;
    }

  } else {
    if ($maxH >= $maxD) {
      $result_numSmax = $maxU.$maxH.$maxD;
    }
    else {
      if ($maxD >= $maxU) {
        if ($maxU >= $maxH) {
          $result_numSmax = $maxD.$maxU.$maxH;
        }
        else {
          $result_numSmax = $maxD.$maxH.$maxU;
        }
    }
    else {
      $result_numSmax = $maxU.$maxD.$maxH;
    }

    }
  }
  $smaxNumber = $result_numSmax;

$zadanie1 = nl2br("1. <b>Напишите функцию, определяющую, к какой четверти часа принадлежит значение переменной $ time
(диапазон возможных значений лежит от 0 до 59).</b> <br>");
$zadanie2 = nl2br("2. <b>Напишите функцию, которая будет по номеру месяца определять время года.
Если номера с таким месяцем не существует, функция должна выводить соответствующее сообщение.</b><br>");
$zadanie3 = nl2br("3. <b>Напишите функцию, которая будет возвращать квадрат числа,
если оно четное, и его кубическую степень в противном случае.</b><br>");
$zadanie4 = nl2br("4. <b>Напишите функцию, которая в данном трехзначном числе переставляет цифры так,
чтобы новое число оказалось наибольшим из возможных. Не используйте стандартные функции.</b><br>");

print <<<HTMLBLOCK
<table width = "100%" height = "100%">
  <tr>
    <td valign = "top" width = "49%" style="color: red">$lovePHP</td>
    <td valign = "top" width = "49%" align = "right" style="color: #89b4f8">$str_1_2</td>
  </tr>
  <tr>
    <td colspan = "2" align = "center" style="color: #89b4f8"><b><h2>Домашняя работа</h2></b></td>
  </tr>
  <tr>
    <td valign = "top" colspan = "2" align = "center" style="color: #babbbf">{$zadanie1}<br>
    <form method="POST" action="$_SERVER[PHP_SELF]">
    <font color = "#89b4f8">Какая четветь часа по минутам: </font><input type="text" name="time" />
    <button type="submit">Say Go</button>
    </form>{$vremya_time}<br><br>{$zadanie2}<br>
    <form method="POST" action="$_SERVER[PHP_SELF]">
    <font color = "#89b4f8">Время года по месяцу: </font><input type="text" name="month" />
    <button type="submit">Say Go</button>
    </form>{$vremyaGoda}<br><br>{$zadanie3}<br>
    <form method="POST" action="$_SERVER[PHP_SELF]">
    <font color = "#89b4f8">Введите любое число: </font><input type="text" name="num" />
    <button type="submit">Say Go</button>
    </form>{$num_set}<br><br>{$zadanie4}<br>
    <form method="POST" action="$_SERVER[PHP_SELF]">
    <font color = "#89b4f8">Введите три любые числа: </font><input type="text" name="numSmax" />
    <button type="submit">Say Go</button>
    </form>{$smaxNumber}</td>
  </tr>
  <tr>
    <td valign = "bottom" style="color: #89b4f8"></td>
  </tr>
  <tr>
  <td></td>
  </tr>
</table>
HTMLBLOCK;
