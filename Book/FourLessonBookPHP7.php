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
//Функция count() сообщает о количестве элементов в массиве
print_r($lineBrake);
print_r($lineBrake);

$dinner_4 = array('Sweet Corn and Asparagus', 'Lemon Chicken',
'Braised Bamboo Fungus');
$dishes = count($dinner_4);
print_r("There are $dishes things for dinner.");

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.8. Перебор массива с помощью языковой конструкции foreach()</b>");
print_r($lineBrake);
print_r($lineBrake);

$meal = array('ключ первой строки' => 'переменная первой строки',
              'ключ второй строки' => 'переменная второй строки',
              'ключ третьей строки' => 'переменная третьей строки',
              'ключ четвертой строки' => 'переменная четвертой строки' );
print_r("<table border = '1'>\n");
foreach ($meal as $key => $value) {
  print_r("<tr><td>$key</td><td>$value</td></tr>\n");
}

print_r("</table>");

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.9. Вывод HTML-таблицы с чередованием классов CSS</b>");
print_r($lineBrake);
print_r($lineBrake);

$row_style = array("even", "odd");
$style_index = 1;
$meal_In = array('ключ breakfast строки' => 'переменная первой строки',
              'ключ lunch строки' => 'переменная второй строки',
              'ключ snack строки' => 'переменная третьей строки',
              'ключ dinner строки' => 'переменная четвертой строки');
print_r("<table border = '1'>\n");
foreach ($meal_In as $key => $value) {
    print_r("<tr class='" . $row_styles[$style_index] . "'>");
    print_r("<td>$key</td><td>$value</td></tr>\n");
    // Смена значения переменной $style_index с 0 на 1, и обратно
    $style_index = 1 - $style_index;
}
print_r("</table>");

print_r($lineBrake);
print_r($lineBrake);

$row_styles = array('even','odd');
$style_index = 0;
$my_class = $row_styles[$style_index];
$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');
      print "<table border = '1' bordercolor = '#fe48fd'>\n";
      foreach ($meal as $key => $value) {
      $html = '<tr class = "class" >';
      print_r(str_replace("class", $my_class, $html));
      print "<td>$key</td><td><center>$value</center></td></tr>\n";
// Смена значения переменной $style_index с 0 на 1, и обратно
$style_index = 1 - $style_index;
}
print '</table>';

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.10. Модификация массива с помощью языковой конструкции foreach()</b>");
print_r($lineBrake);
print_r($lineBrake);

$udwoenie_1 = array("Катофель" => 5, "Морковка" => 5.5,
                  "Мороженное" => 1.2, "Пицца Маргарита" => 15);
foreach ($udwoenie_1 as $dish_1 => $price_1) {
              // выражение $price = $price * 2 НЕ пройдет!!!
         $udwoenie_1[$dish_1] = $udwoenie_1[$dish_1] * 2;
        }
            // Перебрать массив снова и вывести измененные
            // значения его элементов
      printf("<table border = '1' bordercolor = '#fe48fd'>\n");
      foreach ($udwoenie_1 as $dish_1 => $price_1) {
      print "<td>Новыя цена на товары $dish_1</td><td><center>$price_1</center></td></tr>\n";
}
print_r("</table>");

print_r($lineBrake);
print_r($lineBrake);
$udwoenie = array("Катофель" => 5, "Морковка" => 5.5,
                  "Мороженное" => 1.2, "Пицца Маргарита" => 15);
foreach ($udwoenie as $dish => $price) {
              // выражение $price = $price * 2 НЕ пройдет!!!
         $udwoenie[$dish] = $udwoenie[$dish] * 2;
        }
            // Перебрать массив снова и вывести измененные
            // значения его элементов
foreach ($udwoenie as $dish => $price) {
  printf("Новыя цена на товары %s is \$%.2f. <br>", $dish, $price);
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.11. Применение языковой конструкции foreach() для перебора числовых массивов</b>");
print_r($lineBrake);
print_r($lineBrake);

$dinner_5 = array('Sweet Corn and Asparagus',
                  'Lemon Chicken',
                  'Braised Bamboo Fungus');
foreach ($dinner_5 as $dish_2) {
  print_r("<br>You can - ты можешь заказать: $dish_2");
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.12. Перебор числового массива с помощью языковой конструкции for()</b>");
print_r($lineBrake);
print_r($lineBrake);

$dinner_6 = array('Sweet Corn and Asparagus',
                'Lemon Chicken',
                'Braised Bamboo Fungus');
for ($i = 0, $num_dishes = count($dinner_6); $i < $num_dishes; $i++) {
print_r("<br/>Dish number $i is $dinner_6[$i]");
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.13. Чередование классов CSS в строках HTML-таблицы с помощью языковой конструкции for()</b>");
print_r($lineBrake);
print_r($lineBrake);

$row_styles_1 = array('even', 'odd');
$dinner_7 = array('Sweet Corn and Asparagus',
                'Lemon Chicken',
                'Braised Bamboo Fungus');
      print "<table border = '1' bordercolor = '#000000'>\n";
      for ($i = 0, $num_dishes_1 = count($dinner_7);
      $i < $num_dishes_1; $i++) {
      print '<tr class="' . $row_styles_1[$i % 2] . '">';
      print "<td>Element $i</td><td>$dinner_7[$i]</td></tr>\n";
}
print '</table>';

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.14. Порядок вывода элементов массива в цикле, организуемом с помощью языковой
конструкции foreach()</b>");
print_r($lineBrake);
print_r($lineBrake);

$letters[0] = 'А';
$letters[1] = 'В';
$letters[3] = 'D';
$letters[2] = 'С';
foreach ($letters as $letter) {
print $letter . $lineBrake;
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.14. Порядок вывода элементов массива в цикле, организуемом с помощью языковой
конструкции foreach()</b>");
print_r($lineBrake);
print_r($lineBrake);

$letters[0] = 'А';
$letters[1] = 'В';
$letters[3] = 'D';
$letters[2] = 'С';
for ($i = 0, $num_letters = count($letters);
$i < $num_letters; $i++) {
print $letters[$i];
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b> 4.15. Проверка наличия элемента в массиве по конкретному ключу функция array_key_exists()</b>");
print_r($lineBrake);
print_r($lineBrake);

$meals = array('Walnut Bun' => 1,
'Cashew Nuts and White Mushrooms' => 4.95,
'Dried Mulberries' => 3.00,
'Eggplant with Chili Sauce' => 6.50,
'Shrimp Puffs' => 0); // Shrimp Puffs are free! - Креветки Puffs бесплатно!
$books = array("The Eater's Guide to Chinese Characters",
'How to Cook and Eat in Chinese', 'Третий элемент он же второй');
// Следующая проверка дает истинное значение
if (array_key_exists('Shrimp Puffs',$meals)) {
print "Yes, we have Shrimp Puffs";
}
// Следующая проверка дает ложное значение
if (array_key_exists('Steak Sandwich',$meals)) {
print "<br>We have a Steak Sandwich";
}
// Следующая проверка дает истинное значение
if (array_key_exists(2, $books)) {
print "<br>Element 1 is How to Cook and Eat in Chinese $books[2]";
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>Чтобы проверить элемент с конкретным значением, следует воспользоваться функцией in_array()</b>");
print_r($lineBrake);
print_r($lineBrake);

$meals = array('Walnut Bun' => 1,
                'Cashew Nuts and White Mushrooms' => 4.95,
                'Dried Mulberries' => 3.00,
                'Eggplant with Chili Sauce' => 6.50,
                'Shrimp Puffs' => 0);
$books = array("The Eater's Guide to Chinese Characters",
'How to Cook and Eat in Chinese');
// Следующая проверка дает истинное значение:
// по ключу Dried Mulberries в массиве имеется значение 3.00
if (in_array(6.5, $meals)) {
print 'There is a $3 item.';
}
// Следующая проверка дает истинное значение
if (in_array('How to Cook and Eat in Chinese', $books)) {
print "<br>We have How to Cook and Eat in Chinese";
}
// Следующая проверка дает ложное значение:
// в функции in_array() учитывается регистр букв
if (in_array("the eater's guide to Chinese characters", $books)) {
print "<br>We have the Eater's Guide to Chinese Characters.";
}

/*
Функция in_array() возвращает логическое значение true, если
обнаруживает в массиве элемент с заданным значением. Сравнение
символьных строк в этой функции выполняется с учетом
регистра букв. Функция array_search() действует аналогично
функции in_array(), но она
возвращает ключ искомого элемента вместо логического значения true.
Так, в примере 4.17 функция array_search() возвращает название блюда
стоимостью 6,50 доллара.
*/

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.17. Поиск элемента в массиве по конкретному значению</b>");
print_r($lineBrake);
print_r($lineBrake);

$meals = array('Walnut Bun' => 1,
                'Cashew Nuts and White Mushrooms' => 4.95,
                'Dried Mulberries' => 3.00,
                'Eggplant with Chili Sauce' => 6.50,
                'Shrimp Puffs' => 0);
$dish = array_search(6.50, $meals);
if ($dish) {
print "$dish costs \$6.50";
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.18. Оперирование элементами массива</b>");
print_r($lineBrake);
print_r($lineBrake);

$dishes_1['Beef Chow Foon'] = 12;
$dishes_1['Beef Chow Foon']++;
$dishes_1['Roast Duck'] = 3;
$dishes_1['total'] = $dishes_1['Beef Chow Foon']
+ $dishes_1['Roast Duck'];
if ($dishes_1['total'] > 11) {
print "You ate a lot: ";
}
print 'You ate ' . $dishes_1['Beef Chow Foon']
. ' dishes of Beef Chow Foon.';
