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

$zadanie1 = nl2br("1. <b>С помощью Heredoc выведите стихотворение А.С. Пушкина с кавычками,
учитывая требования к выводу из ДЗ к уроку 2</b>");
$zadanie2 = nl2br("2. <b>С помощью стандартных функций substr(), chunk_split() и date()
выведите строку “010122” в формате даты “01.01.2022”.</b>");
$zadanie3 = nl2br("3. <b>С помощью стандартной функции strpos() определите,
есть ли подстрока <b style ='color: #ff4a96'>“пяти”</b> во фразе “Я считаю до пяти”.
Организуйте вывод с помощью условной конструкции.</b>");
$zadanie4 = nl2br("4. <b>Определите имя файл в строке пути к нему
<b style ='color: #ff4a96'>C:/OpenServer/domains/localhost/index.php</b>
Используйте стандартные функции substr() и strrchr().</b>");
$zadanie5 = nl2br("4. <b></b>");

	echo '<table width = "100%" height = "100%">';
		echo '<tr>';
		echo "<td valign = 'top' width = '49%' align = 'center' style='color: red'>{$lovePHP}</td>";
		echo "<td valign = 'top' width = '49%' style='color: #89b4f8'>{$str_1_2}</td>";
    echo '<tr>';
    echo "<td align = 'center' colspan = '2'>$zadanie1</td>";
    echo '</tr>';
	echo '</table>';

  //heredoc - Этот документ
  $stPushkin = <<<INFO
  "Аптеку позабудь ты для венков лавровых
  И не мори больных, но усыпляй здоровых".
  INFO;
$informstionStPushkin = nl2br($stPushkin);

echo '<table width = "100%" height = "100%">';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'><br>$informstionStPushkin</td>";
  echo '</tr>';
echo '</table>';

$date = ($_POST['date']);
$date_result = (substr(chunk_split($date, 2, '.'), 0, -1));

print_r("<br>");
echo '<table width = "100%" height = "100%">';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'>$zadanie2<br><br></td>";
  echo '</tr>';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'>
  <form method='POST' action='$_SERVER[PHP_SELF]'>
  <font color = '#89b4f8'>Введите в фомате 010122: </font><input type='text' name='date' />
  <button type='submit'>Say Go</button><br><br><b style='color: #89b4f8'>{$date_result}</b></td>";
  echo '</tr>';
echo '</table>';

echo '<table width = "100%" height = "100%">';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'>$zadanie3</td>";
  echo '</tr>';
echo '</table>';

$slovo = "я считаю до пяти";
if (strpos($_POST['slovo'], 'пяти')!== false) {
  $resultat = "<b style ='color: #fb8c02'>Слово присутствует в строке.</b>";
} else {
  $resultat = "<b style ='color: #ff4a96'>Слова нет в строке.</b>";
}
$resultat_slovo = $resultat;

$pathTopFile = ($_POST['pathTopFile']);
$fileName = substr(strrchr($pathTopFile, "/"), 1);
if ($pathTopFile) {
  $res = $fileName;
}
$pathTopFile = $res;

echo '<table width = "100%" height = "100%">';

  echo '<tr>';
  echo "<td align = 'center' colspan = '2'><br>
  <form method='POST' action='$_SERVER[PHP_SELF]'>
  <font color = '#89b4f8'>Введите слово: </font><input type='text' name='slovo' />
  <button type='submit'>Say Go</button><br><br>{$resultat}
   </td>";
  echo '</tr>';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'><br>$zadanie4</td>";
  echo '</tr>';
  echo '<tr>';
  echo "<td align = 'center' colspan = '2'><br>
  <form method='POST' action='$_SERVER[PHP_SELF]'>
  <font color = '#89b4f8'>Введите любой адрес аналогичный адресу в задании: </font><input type='text' name='pathTopFile' />
  <button type='submit'>Say Go</button><br><br><b style ='color: #fb8c02'>{$res}</b>
  </td>";
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
