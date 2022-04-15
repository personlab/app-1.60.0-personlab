<?php
$lineBreak ="<br>";
//date_default_timezone_set('UTC'); // часовой пояс по умолчанию

print <<<HTMLBLOCK
<html>
<head><title>ThreeLesson</title></head>
<body bgcolor="#fffed9">
</body>
</html>
HTMLBLOCK;

print_r("<b>Домашняя работа по итогам 6 урока:</b>");
print_r($lineBreak);
print_r("Является ли возраст призывным");
print_r($lineBreak);

function isRecruitMylitary($age) {
  return $age > 17 && $age < 27;
}
var_dump(isRecruitMylitary(16));
print_r($lineBreak);
var_dump(isRecruitMylitary(26));

print_r($lineBreak);
print_r("<b>Является ли числа равными</b>");
print_r($lineBreak);

function isEqual($firstNumber, $secondNumber) {
  return ($firstNumber === $secondNumber);
}
var_dump(isEqual(32, 32));
print_r($lineBreak);
var_dump(isEqual(72, 37));

print_r($lineBreak);
print_r("<b>Является ли хоть одно число положительное с использованием логического оператора или ||</b>");
print_r($lineBreak);

function isPosilive($firstNumber, $secondNumber) {
  return ($firstNumber > 0 || $secondNumber > 0);
}
var_dump(isPosilive(-7, 5));
print_r($lineBreak);
var_dump(isPosilive(-7, -5));

print_r($lineBreak);
print_r("<b>Является ли сумма двух чисел больше параметра {$lineBreak}</b>");

function isSum($firstNumber, $secondNumber) {
  $sum = 23;
  return $firstNumber + $secondNumber > $sum;
}
var_dump(isSum(4, 16));
print_r($lineBreak);
var_dump(isSum(16, 10));

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>Домашняя работа по итогам 7 урока:</b> {$lineBreak}</b>");
print_r($lineBreak);

function quarterOfHours($today) {

$today_UTC = date("F j, Y, g:i a");
$today = date("H:i:s");

  /*
  if (!($today >= 0 && $today <= 12)) {
    print_r("Введите значение часа в диапазоне от 0 до 12! <br>");
  }
  */
  if ($today >= 6 && $today <= 11) {
    print_r("Доброу утро - {$today_UTC}<br>");
  }
  elseif ($today >= 12 && $today <= 17) {
    print_r("Добрый день - {$today_UTC}<br>");
  }
  elseif ($today >= 18 && $today <= 23) {
    print_r("Добрый вечер - {$today_UTC}<br>");
  }
  elseif ($today >= 00 && $today <= 5) {
    print_r("Добро ночи - {$today_UTC}<br>");
  }
}
print_r($lineBreak);
print_r($lineBreak);
print_r(quarterOfHours($today));
print_r($lineBreak);


print_r($lineBreak);
print_r("<b>вывод времени по switch{$lineBreak}</b>");
print_r($lineBreak);


$today_SW = date("D M j G:i:s T Y");
$today_S = date("D M j G:i:s T Y");
/*$today_S >= 6 && $today_S <= 12;
$today_S >= 12 && $today_S <= 18;
$today_S >= 18 && $today_S <= 23;
$today_S >= 23 && $today_S <= 6;*/

switch ($today_S) {
      case $today_S >= 6 && $today_S <= 11:
      $str_1_2 = "Доброе утро, сегодня {$today_SW}";
      break;
      case $today_S >= 12 && $today_S <= 17:
      $str_1_2 = "добрый день, сейчас {$today_SW}";
      break;
      case $today_S >= 18 && $today_S <= 23:
      $str_1_2 = "Добрый вечер, сейчас {$today_SW}";
      break;
      case $today_S >= 00 && $today_S <= 5:
      $str_1_2 = "Доброй ночи, сейчас {$today_SW}";
      break;


}
print_r($str_1_2);
print_r($lineBreak);
print_r($lineBreak);

// выводит "I love PHP"
echo file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo=');

print_r($lineBreak);
print_r($lineBreak);

$fp   = fopen('data://text/plain;base64,', 'r');
$meta = stream_get_meta_data($fp);

// выводит "text/plain"
echo $meta['mediatype'];

print_r($lineBreak);
print_r($lineBreak);

$data = 'Günther says: 1+1 is 2, 10%40 is 20.';

$fp = fopen('data:text/plain,'.$data, 'rb'); // INVALID, never do this
echo stream_get_contents($fp);
// Günther says: 1 1 is 2, 10@ is 20. // ERROR
print_r($lineBreak);
print_r($lineBreak);

$fp = fopen('data:text/plain,'.urlencode($data), 'rb'); // urlencoded data
echo stream_get_contents($fp);
// Günther says: 1+1 is 2, 10%40 is 20. // OK
print_r($lineBreak);
print_r($lineBreak);

// Valid option 1: base64 encoded data
$fp = fopen('data:text/plain;base64,'.base64_encode($data), 'rb'); // base64 encoded data
echo stream_get_contents($fp);
// Günther says: 1+1 is 2, 10%40 is 20. // OK
print_r($lineBreak);
print_r($lineBreak);

print_r($lineBreak);
print_r("<b>Текущее время {$lineBreak}</b>"); // https://www.php.net/manual/ru/function.date
print_r($lineBreak);
echo date("g:i");
print_r($lineBreak);
print_r($lineBreak);
$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
print_r($today);
print_r($lineBreak);
$today = date("m.d.y");                         // 03.10.01
print_r($today);
print_r($lineBreak);
$today = date("j, n, Y");                       // 10, 3, 2001
print_r($today);
print_r($lineBreak);
$today = date("Ymd");                           // 20010310
print_r($today);
print_r($lineBreak);
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-
print_r($today);
print_r($lineBreak);
//01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
print_r($today);
print_r($lineBreak);
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
print_r($today);
print_r($lineBreak);
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
print_r($today);
print_r($lineBreak);
$today = date("H:i:s");                         // 17:16:18
print_r($today);
print_r($lineBreak);
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (формат MySQL DATETIME)
print_r($today);
print_r($lineBreak);

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>вывод целого числа, время года{$lineBreak}</b>");
print_r($lineBreak);

function timeOfYear($month) {
  $result = "";
  if (!(is_int($month))) {
    $result = "Введите цело значение от 1 до 12!<br>";
    return;
  }
  if ($month > 0 && $month <= 12) {
    if ($month < 3 || $month === 12) {
      $result = "Зима<br>";
    }
    elseif ($month >= 3 && $month < 6) {
      $result = "Весна <br>";
    }
    elseif ($month >= 6 && $month < 9) {
      $result = "Лето <br>";
    }
    elseif ($month >= 9 && $month < 12) {
      $result = "Осень <br>";
    }
  } else {
    $result = "Введите цело значение от 1 до 12! <br>";
  }
  return $result;
}

print_r(timeOfYear(5));

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>вывод целого числа в квадрат, если нет то в третью степернь{$lineBreak}</b>");
print_r($lineBreak);

function everOrNot($num) {
  $result = "";
  if ($num % 2 === 0) {
    $result = "Вывожу в квадрат: " . pow($num, 2);
  }
  else {
    $result = "Вывожу в третью степень: " . pow($num, 3);
  }
  return $result;
}

print_r(everOrNot(67));

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>Поиск большего числа{$lineBreak}</b>");
print_r($lineBreak);

function MaxNumber($numS) {                      // 346
  $result = "";
  $maxH = ($numS - $numS % 100) / 100;           // (346 -46) / 100 =3
  $maxD = ($numS % 100 - $numS %10) / 10;        // (46 - 6) / 10 = 4
  $maxU = $numS % 10;                            // 6
  if ($maxH >= $maxD && $maxH >= $maxU) {
    if ($maxD >= $maxU) {
      $result = $maxH.$maxD.$maxU;
    }
    else {
      $result = $maxH.$maxU.$maxD;
    }

  } else {
    if ($maxH >= $maxD) {
      $result = $maxU.$maxH.$maxD;
    }
    else {
      if ($maxD >= $maxU) {
        if ($maxU >= $maxH) {
          $result = $maxD.$maxU.$maxH;
        }
        else {
          $result = $maxD.$maxH.$maxU;
        }
    }
    else {
      $result = $maxU.$maxD.$maxH;
    }

    }
  }
  return $result;
}

print_r(MaxNumber(345));
print_r($lineBreak);
print_r(MaxNumber(456));
