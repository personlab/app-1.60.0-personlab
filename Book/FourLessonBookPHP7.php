<?php
print <<<HTMLBLOCK
<html>
<head><title>FourLessonBookPHP7</title></head>
<body bgcolor="#fffed9">
</body>
</html>
HTMLBLOCK;
$lineBrake = "<br>";
// Приветствие, время
$today_SW = date("F j, Y, g:i a");
$today_S = date("H:i:s");

// выводит "I love PHP"
echo file_get_contents('data://text/plain;base64,SSBsb3ZlIFBIUAo=');
print_r($lineBrake);
print_r($lineBrake);

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
print_r("<b>4.1. Создание массивов</b>");
print_r($lineBrake);
print_r($lineBrake);

$vegetables = array('corn' => 'yellow', 'beet' => 'red', 'carrot' => 'orange' );
$dinner = array(0 => 'Sweet Corn and Asparagus', 1 => 'Lemon Курица', 2 => 'Braised Bamboo Fungus');
$computers = array('trs-80' => 'Radio Shack', 2600 => 'Atari', 'Adam' => 'Coleco');
print_r($vegetables['corn'] . "<br>");
print_r($dinner[1] . "<br>");
print_r($computers[2600] . "<br>");

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.2. Применение сокращенного синтаксиса массивов</b>");
print_r($lineBrake);
print_r($lineBrake);
$vegetables_sokr = ['corn' => 'yellow', 'beet' => 'red', 'carrot' => 'orange'];
$dinner_sokr = [0 => 'Sweet Corn and Asparagus', 1 => 'Lemon Курица', 2 => 'Braised Bamboo Fungus'];
$computers_sokr = ['trs-80' => 'Radio Shack', 2600 => 'Atari', 'Adam' => 'Coleco'];
print_r($vegetables_sokr['corn'] . "<br>");
print_r($dinner_sokr[2] . "<br>");
print_r($computers_sokr[2600] . "<br>");

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.3. Создание массива поэлементно</b>");
print_r($lineBrake);
print_r($lineBrake);

// Массив $vegetables со строковыми ключами
$vegetables_1['corn'] = 'yellow';
$vegetables_1['beet'] = 'red';
$vegetables_1['carrot'] = 'orange';
print_r($vegetables_1['corn'] . "<br>");
print_r($vegetables_1['beet'] . "<br>");
print_r($vegetables_1['carrot'] . "<br>");
print_r($lineBrake);
// Массив $dinner с числовыми ключами
$dinner_1[0] = 'Sweet Corn and Asparagus';
$dinner_1[1] = 'Lemon Chicken';
$dinner_1[2] = 'Braised Bamboo Fungus';
print_r($dinner_1[0] . "<br>");
print_r($dinner_1[1] . "<br>");
print_r($dinner_1[2] . "<br>");
print_r($lineBrake);
// Массив $computers с числовыми и строковыми ключами
$computers_1['trs-80'] = 'Radio Shack';
$computers_1[2600] = 'Atari';
$computers_1['Adam'] = 'Coleco';
print_r($computers_1['trs-80'] . "<br>");
print_r($computers_1[2600] . "<br>");
print_r($computers_1['Adam'] . "<br>");

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.4. Взаимное превращение скалярных и нескалярных величин</b>");
print_r($lineBrake);
print_r($lineBrake);

// Создание массива $vegetables
$vegetables_2['corn'] = 'yellow';
// Бесследное удаление строк "corn" и "yellow" и
// создание скалярной переменной $vegetables
$vegetables_2 = 'delicious'; // выдает ошибку
// Создание скалярной переменной $fruits
$fruits = 283; // выдает ошибку
// Не пройдет! Значение 283 по-прежнему остается в
// переменной $fruits, а интерпретатор РНР выдает предупреждение
$fruits['potassium'] = 'banana';
// А в данном случае содержимое переменной $fruits
// перезаписывается, и она становится массивом
$fruits = array('potassium' => 'banana');
print_r($vegetables_2); //['corn'] . "<br>");
print_r($lineBrake);
print_r($fruits);//['potassium'] . "<br>");

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.5. Создание числовых массивов с помощью языковой конструкции array()</b>");
print_r($lineBrake);
print_r($lineBrake);

$dinner = array('Нулевая строка', 'Первая строка',
'вторая строка');
print_r("I want $dinner[0] and $dinner[2]");

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.6. Ввод в массив новых элементов с помощью сокращенного синтаксиса</b>");
print_r($lineBrake);
print_r($lineBrake);

// Создать массив $lunch, состоящий из двух элементов.
// В следующей строке кода задается первый элемент
// массива $lunch[0]
$lunch[] = 'Dried Mushrooms in Brown Sauce';
// В следующей строке кода задается второй элемент
// массива $lunch[1]
$lunch[] = 'Pineapple and Yu Fungus';
// Создать массив $dinner, состоящий из трех элементов
$dinner_3 = array('Sweet Corn and Asparagus', 'Lemon Chicken',
'Braised Bamboo Fungus', 'Flank Skin with Spiced Flavor');
// Ввести новый элемент в конце массива $dinner.
//В следующей строке кода задается четвертый элемент
// массива $dinner[3]
//$dinner_3[] = 'Flank Skin with Spiced Flavor';
print_r($lunch[0] . "<br>");
print_r($dinner_3[3] . "<br>");

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.7. Определение размера массива</b>");
print_r($lineBrake);
print_r($lineBrake);

$dinner_4 = array('Sweet Corn and Asparagus', 'Lemon Chicken',
'Braised Bamboo Fungus');
$dishes = count($dinner_4);
print_r("There are $dishes things for dinner.");
