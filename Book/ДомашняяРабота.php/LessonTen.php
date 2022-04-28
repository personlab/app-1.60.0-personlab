<!DOCTYPE html>
<html>
<head>
<title>LessonTen</title>
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
    $lineBrake = "<br><br>";
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

$zadanie1 = nl2br("1. <b>Выведите количество дней до еще не наступившего дня рождения (выберите любую дату).
Для получения целого результата используйте стандартную функцию intval().</b>");
$zadanie2 = nl2br("2. <b>С помощью стандартной функции date() приведите строку “2022-02-23” к дате в формате “d-m-Y”.
Результат выведите на страницу в браузере.</b>");
$zadanie3 = nl2br("3. <b>Посчитайте количество дней с начала года до текущей даты.
Для получения целого результата используйте стандартную функцию intval().</b>");

/*$dateSegodny = ($_POST['dateSegodny']);
$myBirthDayTimeStamp = mktime(0, 0, 0, 11, 8, 2022);
$dateSegodny = date("d-m-Y", strtotime($currentDate));
const SECS_PER_DAY = 60 * 60 * 24;
$daysToMyBirsday = intval(($myBirthDayTimeStamp - $dateSegodny)/SECS_PER_DAY);
*/

/*
print_r("До моего дня рождения: $daysToMyBirsday дней!" . "<br>");
*/
$myBirthDayTimeStamp = mktime(0, 0, 0, 11, 8, 2022);
$dateSegodny = time();

const SECS_PER_DAY = 60 * 60 * 24;
$daysToMyBirsday = intval(($myBirthDayTimeStamp - $dateSegodny)/SECS_PER_DAY);
$daysToMyBirsday_1 = "<b style='color: #89b4f8'>До моего дня рождения: $daysToMyBirsday дня(ей)!<?b>";


	echo '<table width = "100%" height = "100%">';
		echo '<tr>';
		echo "<td valign = 'top' width = '49%' align = 'center' style='color: red'>{$lovePHP}</td>";
		echo "<td valign = 'top' width = '49%' style='color: #89b4f8'>{$str_1_2}</td>";
    echo '<tr>';
    echo "<td align = 'center' colspan = '2'>$zadanie1<br></td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td align = 'center' colspan = '2'><br>{$daysToMyBirsday_1}</td>";
    echo '</tr>';
	echo '</table>';


$date = ($_POST['date']);
$currentDate = $date;
$newDate = date("d-m-Y", strtotime($currentDate));
//$newDate;

print_r("<br>");
echo '<table width = "100%" height = "100%">';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'>$zadanie2<br></td>";
  echo '</tr>';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'><br><form method='POST' action='$_SERVER[PHP_SELF]'>
  <font color = '#89b4f8'>Введите дату вида 20010101 без пробелов: </font>
  <input type='text' name='date' />
  <button type='submit'>Say Go</button><br><br>
  <b style='color: #89b4f8'>{$newDate}</td>";
  echo '</tr>';
echo '</table>';

//

$fromDate_1 = strtotime("2022-01-01");
$toDate_1 = time();
$subDate_1 = intval(($toDate_1 - $fromDate_1)/SECS_PER_DAY);

echo '<table width = "100%" height = "100%">';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'><br>$zadanie3</td>";
  echo '</tr>';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'><br><b style='color: #89b4f8'>{$subDate_1}</b></td>";
  echo '</tr>';
echo '</table>';

//

echo '<table width = "100%" height = "100%">';

  echo '<tr>';
  echo "<td align = 'center' colspan = '2'><br></td>";
  echo '</tr>';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'><br></td>";
  echo '</tr>';
echo '</table>';
    ?>
      <td valign = "bottom" style="color: #89b4f8"></td>
    </tr>
    <tr>
    <td></td>
    </tr>
  </table>
</body>
</html>
