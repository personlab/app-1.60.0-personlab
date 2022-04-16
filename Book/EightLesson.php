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
$today_S = date("H:i:s");
/*$today_S >= 6 && $today_S <= 12;
$today_S >= 12 && $today_S <= 18;
$today_S >= 18 && $today_S <= 23;
$today_S >= 23 && $today_S <= 6;*/

switch ($today_S) {
      case $today_S >= 6 && $today_S <= 11:
      $str_1_2 = "Доброе утро, сегодня {$today_SW}";
      break;
      case $today_S >= 12 && $today_S <= 17:
      $str_1_2 = "Добрый день, сейчас {$today_SW}";
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

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>Massive{$lineBreak}</b>");
print_r($lineBreak);


$arrayName = array(1, 2, 3, 4);
$arrayName_1[] = 1;
$arrayName_1[] = 2;
$arrayName_1[] = 3;

print_r($arrayName[0] . "<br>");
print_r($arrayName_1[0] . "<br>");

print_r($lineBreak);
$arrayName_X = array('1' => 3, '2' => 5, '3' =>6, '4');
$arrayName_2[1] = 3;
$arrayName_2[2] = 5;
$arrayName_2[3] = 6;

print_r($arrayName_X[1] . "<br>");
print_r($arrayName_2[1] . "<br>");

print_r($lineBreak);
$arrayName_S = array('Hello' => 3, 'World' => 5, '3' =>6, '4');
$arrayName_3['Hello'] = 3;
$arrayName_3[2] = "World";
$arrayName_3[3] = 6;

print_r($arrayName_S['Hello'] . "<br>");
print_r($arrayName_3["Hello"] . "<br>");

 // добавили слово вместо цифры
print_r($lineBreak);
$arrayName_S = array('Hello' => "hi", 'World' => 5, '3' =>6, '4');
$arrayName_3['Hello'] = "hi";
$arrayName_3[2] = "World";
$arrayName_3[3] = 6;

print_r($arrayName_S['Hello'] . "<br>");
print_r($arrayName_3["Hello"] . "<br>");

//       0123456 - hello h-0, e-1,...
$privet ="Hello, World";
print_r($privet[0] . "<br>");

// у php мощнейший развитый аппарат по работе со строками

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>Циклы: от 1 до 10///{$lineBreak}</b>");
print_r($lineBreak);

function userOutPut() {
  $i = 1;
  print_r('<select name = "people">');
  while($i <= 10) { // while - в переводе пока
    print_r("<option>$i</option>\n");
    $i++;
  }
  print_r("</select>");
  return;

}
userOutPut();

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>Циклы: от 1 до 10{$lineBreak}</b>");
print_r($lineBreak);
// второй вывод
function userOutPut_x() {
  $i = 1;
  while($i <= 10) {
    print_r($i . "<br>");
    $i++;
  }
  return;
}
userOutPut_x();


// ошибка - зацикливание
/*
function userOutPut_xl() {
  $i = 1;
  //while($i > 0) {  // while (true) {}
    print_r($i . "<br>");
    $i++;
  }
  return;
}
//userOutPut_xl();
*/

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>Цикл{$lineBreak}</b>");
print_r($lineBreak);
/*
function sumOilTy($firs_1, $secon_1) {
  //$i = $firs_1;
  //$sumOil_1 = 0;
  print '<select name="doughnuts">';
  for ($i = $firs_1; $sumOil_1 = 0; $i <= $secon_1, $sumOil_1 = $sumOil_1 + $i, $i = $i + 1) {
  //while($i <= $secon_1) {
    //print_r($sumOil_1 . " + " . $i . "<br>");
    print_r("<option>$firs_1 - $secon_1</option>\n");

    //$sumOil_1 = $sumOil_1 + $i;
    //$i = $i + 1;
  }
  print '</select>';
  return $sumOil_1;
}
sumOilTy(3, 2);
*/

//print_r($lineBreak);
//print_r($lineBreak);

function sumOil($firstNumber_1, $secondNumber_1) {
  $i = $firstNumber_1;
  $sumOil = 0; // нейтральный элемент для сложения
  while($i <= $secondNumber_1) {  //secondNumber_1 - firstNumber_1 + 1 = 7
    print_r($sumOil . " + " . $i . "<br>");
    $sumOil = $sumOil + $i;
    $i = $i + 1;
  }
  return $sumOil;
}
print_r(sumOil(3, 9));

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>Поиск букв в слове{$lineBreak}</b>");
print_r($lineBreak);

$nameS = "Fanny"; // F - 0, a - 1, n - 2, n - 3, y - 4
$nLinter = 0;
$i = 0;
while($i < strlen($nameS)) {  // предикат требует внимания со строками
  if($nameS[$i] === "n") {
    $nLinter = $nLinter + 1;
  }
  $i = $i + 1;
}
print_r("В имени {$nameS} ,букв 'n': {$nLinter}");

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>Поиск букв в слове c переворотом{$lineBreak}</b>");
print_r($lineBreak);

function strRevUser($str) {
  $i = 0;
  $newStr = "";
  while($i < strlen($str)) { // предикат требует внимания со строками
    $newStr = $newStr . $str[(strlen($str) - 1) - $i];  // 4 - 0 = 4
    $num = (strlen($str) - 1) - $i;
    print_r("Текущая строка " . $newStr .  ". Текущий номер симвода " . $num . "<br>" );
    $i = $i + 1;
  }
  return $newStr;
}
print_r(strRevUser("Alex"));

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>выход из цикла{$lineBreak}</b>");
print_r($lineBreak);

function isPrime($num1) {
  $div = 2;
  while($div <= $num1/2) {
    if($num1 % $div === 0) {
      return false;
    }
    $div = $div + 1;
  }
  return true;
}
var_dump(isPrime(5));
print_r($lineBreak);
var_dump(isPrime(16));


print_r($lineBreak);
print_r($lineBreak);
print_r("<b>простое число{$lineBreak}</b>");
print_r($lineBreak);

$div_5 = 2;
$num_5 = 8;
$result = "";
while($div_5 <= $num_5/2) {
  if($num_5 % $div_5 === 0) {
    $result = "Не является простым!";
    break;
  }
  $div_5 = $div_5 + 1;
}
print_r($result . "<br>");

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>функция for(strRevUser){$lineBreak}</b>");
print_r($lineBreak);

function strRevUserFor($str) {
  $newStr = "";
  for($i = 0; $i < strlen($str); $i++) { // for для
    $let = $str[$i];
    $newStr = "{$let}{$newStr}";
  }
  return $newStr;
}
print_r(strRevUserFor("Alex") . "<br>");

print_r($lineBreak);
print_r($lineBreak);
print_r("<b>// i++ - инкремент (постфиксная форма)<br>
// i-- - декремент (постфиксная формат)<br>
// ++i - инкремент (префиксная форма)<br>
// --i - декремент (префиксная форма){$lineBreak}</b>");
print_r($lineBreak);
// i++ - инкремент (постфиксная форма)
// i-- - декремент (постфиксная формат)
// ++i - инкремент (префиксная форма)
// --i - декремент (префиксная форма)

$i = 0;
print_r($i++ . "<br>"); // 0 в этом варианте мы сначала получаем значение,
print_r($i++ . "<br>"); // 1 а потом изменяем к единице
print_r($i . "<br>");   // 2

$i = 0;
print_r(++$i . "<br>"); // 1  здесь мы сначала изменим значение, а потом
print_r(++$i . "<br>"); // 2  его уже получим
print_r($i . "<br>");   // 2
