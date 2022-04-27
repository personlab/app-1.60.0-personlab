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

	echo '<table width = "100%" height = "100%">';
		echo '<tr>';
		echo "<td valign = 'top' width = '49%' align = 'center' style='color: red'>{$lovePHP}</td>";
		echo "<td valign = 'top' width = '49%' style='color: #89b4f8'>{$str_1_2}</td>";
    echo '<tr>';
    echo "<td align = 'center' colspan = '2'>$zadanie1<br></td>";
    echo '</tr>';
	echo '</table>';

//

echo '<table width = "100%" height = "100%">';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'><br></td>";
  echo '</tr>';
echo '</table>';

//

print_r("<br>");
echo '<table width = "100%" height = "100%">';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'>$zadanie2<br></td>";
  echo '</tr>';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'></td>";
  echo '</tr>';
echo '</table>';

//

echo '<table width = "100%" height = "100%">';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'>$zadanie3</td>";
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
