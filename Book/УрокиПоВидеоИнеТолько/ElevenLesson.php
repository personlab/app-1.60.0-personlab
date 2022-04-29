<?php
$lineBrake = "<br>";

// выводит "I love PHP"
echo file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo=') . "<br><br>";

print <<<HTMLBLOCK
<html>
<head><title>ElevenLesson</title></head>
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
print_r($str_1_2 . "$lineBrake");

$myBirthDayTimeStamp = mktime(0, 0, 0, 11, 8, 2022);
$dateSegodny = time();

const SECS_PER_DAY = 60 * 60 * 24;
$daysToMyBirsday = intval(($myBirthDayTimeStamp - $dateSegodny)/SECS_PER_DAY);
print_r("До моего дня рождения: $daysToMyBirsday дней!" . "<br>");
print_r($lineBrake);
print_r($lineBrake);

print_r("<b>Домашняя работа</b>");
print_r($lineBrake);
//рассчитать среднее значение
$temperatures = array(-0.4, -2.5, -6.9, -6.2, -4.6, 0.5, 0.6);
$count = count($temperatures);
$sum = 0;
foreach ($temperatures as $temp) {
  $sum += $temp;
}
$average = round($sum / $count);
print_r("Средняя максимальная темпераура составила {$average} &deg;C. {$lineBrake}");

//Используем rsort для сортировки по убыванию
rsort($temperatures);
// Получаем три самых больших числа
$warmestTemps = array_slice($temperatures, 0, 3);
print_r("<b>Три самых высоких значений температуры: </b><br>");
foreach ($warmestTemps as $warm) {
  print_r("{$warm} &deg;C. <br>");
}
print_r($lineBrake);

//Выводим миимальные значения
$coolestTemp = array_slice($temperatures, -3, 3);
print_r("<b>Три самые низких значений температуры: </b><br>");
foreach ($coolestTemp as $cool) {
  print_r("{$cool} &deg;C. <br>");
}
print_r($lineBrake);

print_r("<b>Многомерный массив случайных чисел </b>{$lineBrake}");
$massiv=[];
for ($i=0; $i < 10; $i++) {
  print_r("Значение подмассива: <b>{$i} </b>");
  for ($j=0; $j < 10; $j++) {
    $massiv[$i][$j] = rand(1, 10);
    print_r($massiv[$i][$j] . "  ");
  }
  print_r($lineBrake);
}
print_r($lineBrake);
print_r($lineBrake);

$users = array(
  array(
    "userName" => "Stanley",
    "login" => "stan1994",
    "password" => "PasForStan94"
  ),
  array(
    "userName" => "Monstry",
    "login" => "Monstry1994",
    "password" => "MosForStan94"
  ),
  array(
    "userName" => "Beauty",
    "login" => "Beauty1994",
    "password" => "BeautyForStan94"
  )
);
print_r("<b>Данные пользователя: </b>{$lineBrake}");
foreach ($users as $user) {
  foreach ($user as $key => $value) {
    print_r("$key: $value $lineBrake");
  }
  print_r($lineBrake);
}
print_r($lineBrake);

print_r("<b>Сумма квадратов чисел в установленном диапазоне: </b>{$lineBrake}");
$sums = 0;
for ($i=1; $i <= 25; $i++) {
  $sums += pow($i, 2); //** возведение в квадрат
}
print_r($sums . $lineBrake);
print_r($lineBrake);

function greetings($language, $name) {
  $greetingArr = array('ru' => 'Привет', 'en' => 'Hello', 'fr' => 'Salut', 'it' => 'Ciao');
  $text = $greetingArr[$language] . ", " . $name . ".";
  return $text;
}

print_r("Приветсвие на Русском языке: " . "<b>" . greetings('ru', 'Юрий') . "</b>{$lineBrake}");
print_r("Приветсвие на Английском языке: " . "<b>" . greetings('en', 'Jonny') . "</b>{$lineBrake}");
print_r("Приветсвие на Французском языке: " . "<b>" . greetings('fr', 'Marsele') . "</b>{$lineBrake}");
print_r("Приветсвие на Итальянском языке: " . "<b>" . greetings('it', 'Alen') . "</b>{$lineBrake}");
print_r($lineBrake);


$family_32 = [ 'Bart' => [ 'age' => 10,
'relation' => 'brother' ],
'Lisa' => [ 'age' => 7,
'relation' => 'sister' ],
'Homer' => [ 'age' => 36,
'relation' => 'father' ],
'Marge' => [ 'age' => 34,
'relation' => 'mother' ],
'Maggie' => [ 'age' => 1,
'relation' => 'self' ] ];

foreach ($family_32 as $key => $value) {
  foreach ($value as $keyses => $valueses) {
    print_r("$key");
  }
  print_r($value);
  print_r($lineBrake);
}
print_r($lineBrake);

print_r($lineBrake);

print_r("<b>Отрывок из стихотворения</b>");
print_r($lineBrake);
$output = <<<INFO
"Здесь должен быть стих.
Мороз и солнце день чудесный"
INFO;
print_r(nl2br($output)); //выводит с соблюдением переноса строки без тега
print_r($lineBrake);
print_r($lineBrake);
print_r("<b>Дата</b><br>");

$date = "010122";
print_r(substr(chunk_split($date, 2, '.'), 0, -1));
print_r($lineBrake);
print_r(chunk_split($date, 2, '.')); // substr убирает подстроку последний символ
print_r($lineBrake);

print_r("<b>Поиск слова в строке</b>");
print_r($lineBrake);

$date_21 = "я считаю до пяти";
if (strpos($date, 'пять') !== false) {
  print_r("Слово присутствует в строке. <br>");
} else {
  print_r("Слова нет в строке. <br>");
}
print_r($lineBrake);

print_r("<b>Вывод последней папки в адресном пути</b>");
print_r($lineBrake);
$pathTopFile = "C:/Program Files(x86)/Comodo/Dragon";
$fileName = substr(strrchr($pathTopFile, "/"), 1);
print_r($fileName);
print_r($lineBrake);

print_r("<b>Дата и время</b>");
print_r($lineBrake);

/*
echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
print_r($lineBrake);
echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 1997));
print_r($lineBrake);
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
print_r($lineBrake);*/
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98));
print_r($lineBrake);
echo date("M-d-Y", mktime(0, 0, 0, 11, 8, 2022));
print_r($lineBrake);

$myBirthDayTimeStamp = mktime(0, 0, 0, 11, 8, 2022);
$dateSegodny = time();

const SECS_PER_DAY = 60 * 60 * 24;
$daysToMyBirsday = intval(($myBirthDayTimeStamp - $dateSegodny)/SECS_PER_DAY);
print_r("До моего дня рождения: $daysToMyBirsday дней!" . "<br>");
print_r($lineBrake);
print_r($lineBrake);
$currentDate = "2022-04-26";
$newDate = date("d-m-Y", strtotime($currentDate));
print_r($newDate) . "<br>";
print_r($lineBrake);
print_r("<b>Дата и время c начала года</b>");
print_r($lineBrake);

$fromDate_1 = strtotime("2022-01-01");
$toDate_1 = time();
$subDate_1 = intval(($toDate_1 - $fromDate_1)/SECS_PER_DAY);
print_r($subDate_1);
