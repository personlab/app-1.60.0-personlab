<?php
$lineBrake = "<br>";
// выводит "I love PHP"
echo file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo=');
print_r($lineBrake);
print_r($lineBrake);

print <<<HTMLBLOCK
<html>
<head><title>NineLesson кодировка</title></head>
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
print_r($str_1_2);
print_r($lineBrake);
print_r($lineBrake);

//heredoc - Этот документ
$informstion = <<<INFO
Name: John Smith
Adress: 324 Main St
City: Californiya, Yota
INFO;

print_r($informstion . "<br>");

$informstion_1 = <<<INFO
Name: John Smith
Adress: 324 Main St
City: Californiya, Yota
INFO;

print_r(nl2br($informstion_1)); // nl2br отвечает за перенос строки без html тега <br>

// кодировка
print_r($lineBrake);
print_r($lineBrake);
print_r("<b>Кодировка</b>");
print_r($lineBrake);
print_r($lineBrake);

$strEn = "Hello"; //  5 символов
$strRu = "Привет";//  6 символов

print_r(strlen($strEn). "<br>"); // strlen длина строками
print_r($strEn[0] . "<br>"); // Обращение к символу по номеру
print_r(strlen($strRu). "<br>");
print_r(mb_strlen($strRu). "<br>");      // mb_strlen кодировка символов в русский

print_r(mb_substr($strRu, 0, 1). "<br>"); // обращение к символу по его номеру и до определенного

//получение подстроки
print_r(strpos("Hello world!", "ello"). "<br>"); // подстрока ello начинается с символа 1
print_r(mb_strpos("Привет, мир!", "мир"). "<br>");

if(strpos("Hello world!", "Hello")) { // 0 => false
  print_r("Fine! <br>");
}

if(strpos("Hello world!", "Hello") !== false) { // мы нашли подстроку Hello в строке Hello world
  print_r("Fine! <br>");
}
