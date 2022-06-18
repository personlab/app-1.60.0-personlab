<?php
echo '<p><b>Пример 1. 3 буфер вывода</b></p>';
// включаем буфер
ob_start();
echo "<p>Буфер 1</p>";
//отключаем буфер вывода и отправляем в браузер
ob_end_flush();

ob_start();
echo "<p>Буфер 2</p>";
// отключаем и очищаем буфер
ob_end_clean();

ob_start();
echo "<p>Буфер 3</p>";

//ob_flush();
//ob_end_clean();

/*
ob = output buffer
ob_start(); = "открываем буфер вывода"
ob_clean(); = "очищаем буфер вывода"
ob_flush(); = "отправляем буфер вывода"
ob_end_clean(); = "отключаем и очищаем буфер вывода"
ob_end_flush(); = "отключаем буфер вывода и отправляем в браузер"
ob_get_clean(); = "получаем буфер вывода, очищаем и отключаем"
ob_get_flush(); = "отправляем буфер вывода, очищаем и отключаем"
*/

echo "<p><b>Пример 2. Сохранение данных</b></p>";
ob_start();
{
    echo "<p>Hello world</p>"; // вывод информации
    $content = ob_get_contents(); //сохраняем все что есть в буфере в переменную
}
ob_end_clean(); // отключаем и очищаем буффер
echo $content;
$content = "";
/*
echo "<p><b>Пример 3. Функция-обработчик буфера</b></p>";
function ob_handler($buffer) {
  return "Lenght of string '$buffer' is " . strlen($buffer);
}
ob_start('ob_handler');
  echo "Hello world!";
ob_end_flush();
*/

echo "<p><b>Пример 4. Буфер внутри буфера внутри буфера...</b></p>";
echo ob_get_level() . "<br>"; //  ob_get_level показывает уровень вложенности
ob_start();
    echo ob_get_level() . "<br>";
    ob_start();
        echo ob_get_level() . "<br>";
        ob_start();
            echo ob_get_level() . "<br>";
        ob_end_flush();
    ob_end_flush();
ob_end_flush();

echo "<p><b>Пример 5. Буфер внутри буфера внутри буфера...</b></p>";
ob_start();
{
  ob_start();
  echo "<p>вывод второго буфера</p>";
  ob_end_flush();
  echo "<p>вывод первого буфера</p>";
  ob_start();
  echo "<p>вывод третьего буфера</p>";
  ob_end_flush();
}
//ob_end_clean();

echo "<p><b>Домашняя работа</b></p>";
$lineBreak = "<br>";
echo $lineBreak;
echo "<b>Домашняя работа по итогам 14 урока</b>";
ob_start();
 {
   echo "<p>Это первая строка</p>";
   $firstRow = ob_get_contents();
 }
ob_end_clean();
echo "<p>Это вторая строка</p>";
echo $firstRow;
echo $lineBreak;

echo "<b>Задание 2. CallBack функция.</b>{$lineBreak}";
function ob_handler($buffer) {
  $newString = "";
  while ($i < strlen($buffer)) {
    $newString = $newString . $buffer[(strlen($buffer) - 1) - $i];
    $i = $i + 1;
  }
  return $newString;
}
ob_start("ob_handler");
   echo "Reverse string.";
ob_end_flush();
echo $lineBreak;

echo "<b>Задание 3. Вложенные буферы вывода</b>{$lineBreak}";
echo "Это исходный код{$lineBreak}";
echo ob_get_level() . "<br>"; //  ob_get_level показывает уровень вложенности
ob_start();
    echo ob_get_level() . "<br>";
    ob_start();
        echo ob_get_level() . "<br>";
        ob_start();
            echo ob_get_level() . "<br>";
        ob_end_flush();
    ob_end_flush();
ob_end_flush();
echo "Это итоговый код.{$lineBreak}";
ob_start();
    ob_start();
        ob_start();
           echo ob_get_level() . "<br>"; //  ob_get_level показывает уровень вложенности
        ob_end_flush();
        echo ob_get_level() . "<br>";
    ob_end_flush();
    echo ob_get_level() . "<br>";
ob_end_flush();
echo ob_get_level() . "<br>";
