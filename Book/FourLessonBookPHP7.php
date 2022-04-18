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

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.19. Вставка элементов массива в символьные строки, заключаемые в двойные кавычки</b>");
print_r($lineBrake);
print_r($lineBrake);

$meals_7['breakfast'] = 'Walnut Bun';
$meals_7['lunch'] = 'Eggplant with Chili Sauce';
$amounts_1 = array(3, 6, 8);
print "For breakfast, I'd like $meals_7[breakfast]
and for lunch<br>";                                   //здесь ищем по ключу слова
print "I'd like $meals_7[lunch]. I want $amounts_1[0]
at breakfast and ";                                //здесь по его порядковуму номеру
print "$amounts_1[2] at lunch.";

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.20. Вставка элементов массива в символьные строки по ключам, заключаемым в
фигурные скобки</b>");
print_r($lineBrake);
print_r($lineBrake);

$meals_8['Walnut Bun'] = '$3.95';
$hosts_1['www.example.com'] = 'website';
print_r("A Walnut Bun costs {$meals_8['Walnut Bun']}<br>");
print "www.example.com is a {$hosts_1['www.example.com']}.";

/*Чтобы удалить элемент из массива, достаточно вызвать функцию unset():
unset($dishes['Roast Duck']);*/

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.21. Формирование символьной строки из элементов массива с помощью функции
implode() вывод всех строк из массива</b>");
print_r($lineBrake);
print_r($lineBrake);

$dimsum = array('Chicken Bun', 'Stuffed Duck Web','Turnip Cake');
$menu = implode(', ', $dimsum);
print $menu;

// implode()
print_r($lineBrake);
$letters = array('А','В','С' ,'D');
print implode('', $letters);
/*Чтобы вывести весь массив без разделения его элементов заданным ограничителем, достаточно
указать пустую строку в качестве первого аргумента при вызове функции*/
print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.22. Вывод строк HTML-таблицы на экран с помощью функции implode()</b>");
print_r($lineBrake);
print_r($lineBrake);

print "<table border = '1' bordercolor = '#df0074'>";
$dimsum = array('Chicken Bun','Stuffed Duck Web','Turnip Cake');
print '<tr><td>' . implode ('</td><td>', $dimsum) . '</td></tr>';
print_r("</table>");

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.23. Преобразование символьной строки в массив с помощью функции explode()</b>");
print_r($lineBrake);
print_r($lineBrake);

$fish = 'Bass, Carp, Pike, Flounder';
$fish_list = explode(', ', $fish);
print "The second fish is $fish_list[2]";

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.24. Сортировка массива с помощью функции sort()</b>");
print_r($lineBrake);
print_r($lineBrake);

$dinner = array('Sweet Corn and Asparagus',
'Lemon Chicken',
'Braised Bamboo Fungus');
$meal = array('breakfast' => 'Walnut Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce');
print "Before Sorting:<br>";
foreach ($dinner as $key => $value) {
print " $dinner: $key $value <br>";
}
foreach ($meal as $key => $value) {
print " $meal: $key $value<br>";
}
sort($dinner);
sort($meal);

print "After Sorting:<br>";
foreach ($dinner as $key => $value) {
print "$dinner: $key $value<br>";
}
foreach ($meal as $key => $value) {
print "$meal: $key $value<br>";
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.25. Сортировка массива с помощью функции asort()</b>");
print_r($lineBrake);
print_r($lineBrake);

$meal = array('breakfast' => 'Walnut Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce');
print "Before Sorting/До<br>";
foreach ($meal as $key => $value) {
print " $meal: $key $value<br>";
}
asort($meal);
print "After Sorting:<br>";  // по алфавитному порядку
foreach ($meal as $key => $value) {
print " $meal: $key $value<br>";
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.26. Сортировка по ключам массива с помощью функции ksort()</b>");
print_r($lineBrake);
print_r($lineBrake);

$meal = array('breakfast' => 'Walnut Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce');
print "Before Sorting:<br>";
foreach ($meal as $key => $value) {
print " $meal: $key $value<br>";
}
ksort($meal);
print "After Sorting:<br>";  // в алфатном порядке
foreach ($meal as $key => $value) {
print " $meal: $key $value<br>";
}

/*
У функций сортировки массивов sort(), asort() и ksort() имеются аналоги, сортирующие
массивы по убывающей и соответственно называемые rsort(), arsort() и krsort(). Они действуют аналогично функциям sort(), asort() и ksort(), но сортируют массив таким образом,
чтобы ключи или значения располагались в массиве по убывающей, начиная с самого большого (в алфавитном порядке) ключа или значения. В примере 4.27 показано применение функции
arsort().
*/
print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.27. Сортировка массива с помощью функции arsort()</b>");
print_r($lineBrake);
print_r($lineBrake);

$meal = array('breakfast' => 'Walnut Bun',
'lunch' => 'Cashew Nuts and White Mushrooms',
'snack' => 'Dried Mulberries',
'dinner' => 'Eggplant with Chili Sauce');
print "Before Sorting:<br>";
foreach ($meal as $key => $value) {
print "$meal: $key $value<br>";
}
arsort($meal);
print "After Sorting:<br>";
foreach ($meal as $key => $value) {
print "$meal: $key $value<br>";
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.28. Создание многомерных массивов с помощью языковой конструкции array() или
сокращенного синтаксиса []</b>");
print_r($lineBrake);
print_r($lineBrake);

$meals = array('breakfast' => ['Walnut Bun','Coffee'],
'lunch' => ['Cashew Nuts', 'White Mushrooms'],
'snack' => ['Dried Mulberries','Salted Sesame Crab']);
$lunches = [ ['Chicken','Eggplant','Rice'],
['Beef','Scallions','Noodles'],
['Eggplant','Tofu'] ];
$flavors = array('Japanese' => array('hot' => 'wasabi',
'salty' => 'soy sauce'),
'Chinese' => array('hot' => 'mustard',
'pepper-salty' => 'prickly ash'));

print $meals['lunch'][1]; // White Mushrooms (Белые грибы)
print $meals['snack'][0]; // Dried Mulberries (Сушеная шелковица)
print_r($lineBrake);
print $lunches[0][0]; // Chicken (Цыпленок)
print $lunches[2][1]; // Tofu (Соевый сыр)
print_r($lineBrake);
print $flavors['Japanese']['salty']; // soy sauce (соевый соус)
print $flavors['Chinese']['hot']; // mustard (горчица)

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.29. Доступ к элементам многомерного массива</b><br>
print meals['lunch'][1]; // White Mushrooms (Белые грибы)<br>
print meals['snack'][0]; // Dried Mulberries (Сушеная шелковица)<br>
print lunches[0][0]; // Chicken (Цыпленок)<br>
print lunches[2][1]; // Tofu (Соевый сыр)<br>
print flavors['Japanese']['salty']; // soy sauce (соевый соус)<br>
print flavors['Chinese']['hot']; // mustard (горчица)");
print_r($lineBrake);
print_r($lineBrake);

print_r($lineBrake);
print_r($lineBrake);
print_r("<b> 4.30. Манипулирование многомерными массивами</b>");
print_r($lineBrake);
print_r($lineBrake);

$prices['dinner']['Sweet Corn and Asparagus'] = 12.50;
$prices['lunch']['Cashew Nuts and White Mushrooms'] = 4.95;
$prices['dinner']['Braised Bamboo Fungus'] = 8.95;
$prices['dinner']['total'] =
$prices['dinner']['Sweet Corn and Asparagus'] +
$prices['dinner']['Braised Bamboo Fungus'];
$specials[0][0] = 'Chestnut Bun';
$specials[0][1] = 'Walnut Bun';
$specials[0][2] = 'Peanut Bun';
$specials[1][0] = 'Chestnut Salad';
$specials[1][1] = 'Walnut Salad';
// Если опустить индекс, новый элемент будет введен в конце массива.
// В следующей строке кода создается элемент массива $specials[1][2]
$specials[1][] = 'Peanut Salad';
print_r($prices['dinner']['total']);
print_r($lineBrake);
print_r($specials[0][1]);

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.31. Перебор многомерного массива во вложенном цикле, организованном с помощью
языковой конструкции foreach()</b>");
print_r($lineBrake);
print_r($lineBrake);

$flavors = array('Japanese' => array('hot' => 'wasabi','salty' => 'soy sauce', 'Kyiv' => 'Izum'),
'Chinese' => array('hot' => 'mustard','pepper-salty' => 'prickly ash'));
// Переменная $culture содержит ключ, а переменная
// $culture_flavors - значение (в данном случае — массив)
foreach ($flavors as $culture => $culture_flavors) {
// Переменная $flavor содержит ключ, а переменная
// $example — значение
foreach ($culture_flavors as $flavor => $example) {
print "A $culture $flavor flavor is $example.<br>";
}
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.32. Перебор многомерного массива во вложенном цикле, организуемом с помощью языковой конструкции for()</b>");
print_r($lineBrake);
print_r($lineBrake);

$specials = array( array('Chestnut Bun',
'Walnut Bun',
'Peanut Bun','\'Bun Bun Bun\''),
array('Chestnut Salad',
'Walnut Salad',
'Peanut Salad') );
// Переменная $num_specials содержит значение 2: количество
// элементов в первой размерности массива $specials
for ($i = 0, $num_specials = count($specials); $i < $num_specials;
$i++) {
// Переменная $num_sub содержит значение 3: количество
// элементов в каждом подмассиве
for ($m = 0, $num_sub = count($specials[$i]);
$m < $num_sub; $m++) {
print "Element [$i][$m] is " . $specials[$i][$m] . "<br>";
}
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>4.33. Вставка значения элемента многомерного массива</b>");
print_r($lineBrake);
print_r($lineBrake);

$specials = array( array('Chestnut Bun',
'Walnut Bun',
'Peanut Bun'),
array('Chestnut Salad',
'Walnut Salad',
'Peanut Salad','Салат \'Цезарь\'') );
// Переменная $num_specials содержит значение 2: количество
// элементов в первой размерности массива $specials
for ($i = 0, $num_specials = count($specials);
$i < $num_specials; $i++) {
// Переменная $num_sub содержит значение 3: количество
// элементов в каждом подмассиве
for ($m = 0, $num_sub = count($specials[$i]);
$m < $num_sub; $m++) {
print "Element [$i][$m] is $specials[$i][$m]<br>";
}
}
