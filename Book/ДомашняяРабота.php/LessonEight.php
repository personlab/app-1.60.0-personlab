<!DOCTYPE html>
<html>
<head>
<title>LessonEight</title>
<meta charset="utf-8" />
</head>
<body bgcolor="#292a2e">
  <table width = "100%" height = "100%">
    <tr>
        <td colspan = "2" align = "center" style="color: #89b4f8"><b><h2>Домашняя работа</h2></b></td>
    </tr>
    <tr>
      <td valign = "top" colspan = "2" align = "center" style="color: #babbbf"><br>
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
$zadanie1 = nl2br("1. <b>Выберите любой месяц года и составьте массив из значений температуры воздуха в соответствии с количеством дней в нем.</b>
По очереди выведите следующие значения:
Средняя температура месяца;
Три самых высоких значений температуры;
Три самых низких значений температуры.
<b style='color: #89b4f8'>Для выбора трех высоких и трех низких температур используйте стандартную функцию array_slice()</b>");
$zadanie2 = nl2br("2. <b>Создайте многомерный массив из 10 подмассивов.
Заполните каждый из подмассивов 10-ю случайными числами в диапазоне значений
от 1 до 10.</b>");
$zadanie3 = nl2br("3. <b>Создайте многомерный массив с данными пользователей: имя пользователя, логин и пароль.
При организации подмассивов используйте формат ключ-значение (userName => Stanley).
С помощью цикла выведите данные пользователей также в формате ключ-значение.</b>");
$zadanie4 = nl2br("4. <b>Посчитайте сумму квадратов чисел в диапазоне от 1 до 25.</b>");
$zadanie5 = nl2br("4. <b>Напишите функцию, которая будет формировать приветственную фразу для разных пользователей (разных имен).
Дополните эту функцию возможностью выводить приветствие на разных языках: русский, английский, французский и итальянский.</b>");

	echo '<table width = "100%" height = "100%">';

		echo '<tr>';

		echo "<td valign = 'top' width = '49%' align = 'center' style='color: red'>{$lovePHP}</td>";
		echo "<td valign = 'top' width = '49%' style='color: #89b4f8'>{$str_1_2}</td>";
    echo '<tr>';
    echo "<td align = 'center' colspan = '2'> {$zadanie1} </td>";

    echo '</tr>';

	echo '</table>';

$month = array(-0.4, -2.5, -6.9, -6.2, -4.6, 0.5, 0.6, 0.4, 0.5, 1.9, 1.2, 3.6, 1.5,
0.6, -0.4, -2.5, -1.9, -1.2, -4.6, -2.5, 0.6, -3.4, -4.5, -4.9, -3.2, -4.6, -2.5,
-1.6);

print_r("<h3>Month</h3>");
print_r("<select>");
$count_4 = count($month);
$sum_4 = 0;
foreach ($month as $items_4) {
  $sum_4 += $items_4;
    print_r("<option>$items_4</option>");

    }
    $average_4 = round($sum_4 / $count_4);
    print_r("<select>");
print_r($lineBrake);
print_r($lineBrake);
print_r("Средняя максимальная темпераура составила {$average_4} &deg;C.");
    rsort($month);
    print_r($lineBrake);
$warmestTemps = array_slice($month, 0, 3);
print_r("<b>Три самых высоких значений температуры: </b><br>");
foreach ($warmestTemps as $warm) {
  print_r("{$warm} &deg;C. <br>");
}
print_r($lineBrake);

$coolestTemp = array_slice($month, -3, 3);
print_r("<b>Три самые низких значений температуры: </b><br>");
foreach ($coolestTemp as $cool) {
  print_r("{$cool} &deg;C. <br>");
}
print_r($lineBrake);

echo '<table width = "100%" height = "100%">';

  echo '<tr>';
  echo "<td align = 'center' colspan = '2'> {$zadanie2} </td>";
  echo '</tr>';

echo '</table>';

print_r($lineBrake);
$massiv=[];
print_r("<select>");
for ($i=0; $i < 10; $i++) {
  print_r("<option>Значение подмассива: <b>{$i}</b></option>");
  for ($j=0; $j < 10; $j++) {
    $massiv[$i][$j] = rand(1, 10);
    $massssiv = ($massiv[$i][$j] . ' ');
    print_r("<option>$massssiv</option>");
  }
}
print_r("</select>");

print_r($lineBrake);
print_r($lineBrake);

echo '<table width = "100%" height = "100%">';

  echo '<tr>';
  echo "<td align = 'center' colspan = '2'> {$zadanie3} </td>";
  echo '</tr>';

echo '</table>';

$users = [[ "userName" => "Анастасия", "login" => "ЛогинАнастасии", "password" => "ПарольАнастасии"],
  [ "userName" => "Мария", "login" => "ЛогинМарии", "password" => "ПарольМарии" ],
  [ "userName" => "Тая", "login" => "ЛогинТаисии", "password" => "ПарольТаисии" ]];

print_r($lineBrake);
print_r("<select>");
foreach ($users as $user) {
  foreach ($user as $key => $value) {
    print_r("<option>$key: $value $lineBrake</option>");
  }
  print_r($lineBrake);
}
print_r("</select>");
print_r($lineBrake);
print_r($lineBrake);

echo '<table width = "100%" height = "100%">';

  echo '<tr>';
  echo "<td align = 'center' colspan = '2'> {$zadanie4} </td>";
  echo '</tr>';

echo '</table>';
print_r($lineBrake);

$sums = 0;
print_r("<select>");
for ($i=1; $i <=25; $i++) {
  $sums += pow($i, 2);   //** возведение в квадрат
  print_r("<option>$i, $sums</option>\n");
}
print_r("</select>");

$language = (isset($_POST['language'])) ? $_POST['language'] : null;
$name = ($_POST['name']);
function greetings($language, $name) {
  if ($language === 'ru') {
     return "Приветсвие на Русском языке: <b style='color: #89b4f8'>Привет $name</b>";
   } elseif ($language === 'en') {
     return "Greeting in English: <b style='color: #ff4020'>Hello $name</b>";
   } elseif ($language === 'fr') {
     return "Salutation en Français: <b style='color: #a80397'>Salut $name</b>";
   } elseif ($language === 'it') {
     return "Saluto in Italiano: <b style='color: #1ab394'>Сiao $name</b>";
   }
}



$funcName = "greetings";
//$funcName($language, $name);
print_r($lineBrake);
print_r($lineBrake);

echo '<table width = "100%" height = "100%">';

  echo '<tr>';
  echo "<td align = 'center' colspan = '2'> {$zadanie5} </td>";
  echo '</tr>';

  echo '<tr>';
  echo "<td align = 'center' colspan = '2'><br>
  <form method='POST' action='$_SERVER[PHP_SELF]'>
  <font color = '#89b4f8'>Введите язык <b style='color: #babbbf'>ru/en/fr/it</b>: </font><input type='text' name='language' />

  <form method='POST' action='$_SERVER[PHP_SELF]'>
  <font color = '#89b4f8'>Введите Имя: </font><input type='text' name='name' />
  <button type='submit'>Say Go</button><br><br>{$funcName($language, $name)} </td>";
  echo '</tr>';

echo '</table>';
print_r($lineBrake);
print_r($lineBrake);

    ?>
      <td valign = "bottom" style="color: #89b4f8"></td>
    </tr>
    <tr>
    <td></td>
    </tr>
  </table>
</body>
</html>
