<?php
print_r("Hello World");
$lineBrake = "<br>";

print_r($lineBrake);
print_r($lineBrake);
print <<<HTMLBLOCK
<html>
<head><title>ThreeLesson</title></head>
<body bgcolor="#fffed9">
</body>
</html>
HTMLBLOCK;

print_r("<b>3.1 - 3.2. Принятие решения с помощью языковой конструкции if()</b>");
print_r($lineBrake);
print_r($lineBrake);

print_r("This is always printed. $lineBrake");
if (strcasecmp($_POST['logged_in'], 'president@whitehouse.gov') === 0) {

print_r("Welcome aboard, trusted user. $lineBrake");
print 'это появляется только тогда когда истина if $logged_in is true.';
//print_r(substr($_POST['logged_in'], 0, 8));

}
print "This is also always printed.";
print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your Password: <input type="text" name="logged_in" />
<br/>
<button type="submit">Say Go</button>
</form>
_HTML_;

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.3. Применение предложения else в условном операторе if()</b>");
print_r($lineBrake);
print_r($lineBrake);

if (strcasecmp($_POST['logged_in_One'], 'president@whitehouse.gov') === 0) {

print_r("Добро пожаловать на борт, доверенный пользователь. $lineBrake");
print 'это появляется только тогда когда истина if $logged_in_One is true.';
//print_r(substr($_POST['logged_in'], 0, 8));

} else {
print_r("Привет, незнакомец.");
print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your Password: <input type="text" name="logged_in_One" />
<br/>
<button type="submit">Say Go</button>
</form>
_HTML_;
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.4. Применение языковой конструкции elseif()</b>");
print_r($lineBrake);
print_r($lineBrake);


$emergency  = $new_message = $_POST;

if (strcasecmp($_POST['logged_in_Twuo'], 'president@whitehouse.gov') === 0) {

print_r("Welcome aboard, trusted user. $lineBrake");
print 'это появляется только тогда когда истина if $logged_in_One is true.';
} elseif ($new_message) {
  print_r("Dear stranger, there are new messages. $lineBrake");
} elseif ($emergency) { /// уточнить по вопросу второго перехода, не переходит.
  print_r("Stranger, there are no new messages, but there is an emergency.");
}
print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your Password: <input type="text" name="logged_in_Twuo" />
<br/>
<button type="submit">Say Go</button>
</form>
_HTML_;

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.5 Сочетание условных операторов else и elseif()</b>");
print_r($lineBrake);
print_r($lineBrake);


$new_messages_1 = $_POST;
if (strcasecmp($_POST['logged_in_Three'], 'president@whitehouse.gov') === 0) {

print_r("Welcome aboard, trusted user. $lineBrake");
print 'это появляется только тогда когда истина if $logged_in_One is true.';
} elseif ($new_messages_1) {
// Следующая строка кода выполняется, если проверочное
// условие $logged_in ложно, но проверочное условие
// $new_messages истинно
print "Дорогой незнакомец, есть новые сообщения.";
} else { // не работает
// Следующая строка кода выполняется, если все проверочные
// условия, $logged_in, $new_messages и $emergency, ложны
print "Я тебя не знаю, у тебя нет сообщений,
и нет никакой чрезвычайной ситуации.";
}
print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your Password: <input type="text" name="logged_in_Three" />
<br/>
<button type="submit">Say Go</button>
</form>
_HTML_;

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>test</b>");
print_r($lineBrake);
print_r($lineBrake);


$new_messages_1 = $_POST;
if ($_POST['logged_in_test']) {

print_r("Welcome aboard, trusted user. $lineBrake");
print 'это появляется только тогда когда истина if $logged_in_One is true.';
} elseif ($new_messages_1) {
// Следующая строка кода выполняется, если проверочное
// условие $logged_in ложно, но проверочное условие
// $new_messages истинно
print "Dear stranger, there are new messages.";
} else { // не работает
// Следующая строка кода выполняется, если все проверочные
// условия, $logged_in, $new_messages и $emergency, ложны
print "I don't know you, you have no messages,
and there's no emergency.";
}
print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your Password: <input type="text" name="logged_in_test" />
<br/>
<button type="submit">Say Go</button>
</form>
_HTML_;

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.6. Операция сравнения на равенство</b>");
print_r($lineBrake);
print_r($lineBrake);

function sravnenie($new_message_X, $dinner) {

  $new_message_X_New = "10";
  //$max_messages_X_new = "You have the maximum number of messages.;
  $dinner_5 = "Braised Scallops";
  $result = "";
  $lineBrake = "<br>";

  if  ($new_message_X === $new_message_X_New && $dinner === $dinner_5) {
    print_r("Добро пожаловать! . {$lineBrake}");
  } elseif ($new_message_X === $new_message_X_New){
          $result = "Проверьте пароль . {$lineBrake}";
        }
       else $result = "Зарегистрируйтесь. {$lineBrake}";

  return $result;

}

print_r(sravnenie("10", "Braised Scallops"));
print_r(sravnenie("10", "Braised"));
print_r(sravnenie("4", "Braised"));

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.7. Операция сравнения на равенство</b>");
print_r($lineBrake);
print_r($lineBrake);

function isEvenX($new_messages_1X) {
  $lineBrake = "<br>";
  return $new_messages_1X !== 10;
}

print_r("не равняется 10?" . $lineBrake);
var_dump(isEvenX(10));
print_r($lineBrake);
var_dump(isEvenX(9));
print_r($lineBrake);
print_r($lineBrake);

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.8. Операции сравнения на “меньше или равно” и “больше или равно”</b>");
print_r($lineBrake);
print_r($lineBrake);

function sravnenie_One($age_One) {

  return $age_One > 12 && $age_One < 44;
  //return $celsium_temp <= 0 && $celsium_temp > 33;
  //return $kelvin_temp < 20.3;
}

var_dump(sravnenie_One(4));

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.9. Сравнение чисел с плавающей точкой</b>");
print_r($lineBrake);
print_r($lineBrake);


  $price_1 = 50.5;
  $price_2 = 50;
  if (abs($price_1 - $price_2) < 0.00001) {
print_r("$price_1 and $price_2 are equal");
} else {
print '$price_1 and $price_2 are not equal.';
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.10. Сравнение символьных строк</b>");
print_r($lineBrake);
print_r($lineBrake);

if ($word > 'baa') {
print "это преложение в этом случае не выводится word.";
}
if ($word <= 'zoo') {
print "Выводится это предложение zoo.";
}


print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.11. Сравнение чисел и символьных строк</b>");
print_r($lineBrake);
print_r($lineBrake);

if ("х54321" > "х5678") {
print 'The string "х54321" is greater than
the string "x5678". <br>Строка "х54321" больше, чем
строка "x5678".';
} else {
print_r('The string "x54321" is not greater than
the string "x5678". <br> Строка "x54321" не больше, чем
строка "x5678"');
}
print_r($lineBrake);
print_r($lineBrake);
// Следующие значения сравниваются в числовом порядке
if ("54321" > "5678") {
print 'The string "54321" is greater than
the string "5678". <br> Строка "54321" больше, чем
строка "5678".';
} else {
print 'The string "54321" is not greater than
the string "5678". <br> Строка "54321" не больше, чем
строка "5678".';
}
print_r($lineBrake);
print_r($lineBrake);
// Следующие значения сравниваются в лексикографическом порядке
if ('6 pack' < '55 card stud') {
print 'The string "6 pack" is less than
the string "55 card stud". <br> Строка "6 pack" меньше
строка "55 карточный стад"';
} else {
print 'The string "6 pack" is not less than
the string "55 card stud". <br> Строка "6 pack" не менее
строка «55-карточный стад».';
}
print_r($lineBrake);
print_r($lineBrake);
// Следующие значения сравниваются в числовом порядке
if ('6 pack' < 55) {
print 'The string "6 pack" is less than the number 55. <br>
Строка "6 pack" меньше числа 55.';
} else {
print 'The string "6 pack" is not less than the number 55. <br>
Строка "6 pack" не меньше числа 55.';
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.12. Сравнение символьных строк с помощью функции strcmp()
</b>");
print_r($lineBrake);
print_r($lineBrake);

$x = strcmp("s54321","s5678");
if ($х > 0) {
print 'The string "s54321" is greater than the string "s5678". <br>
Строка "s54321" больше, чем строка "s5678".';
} elseif ($x < 0) {
print 'The string "s54321" is less than the string "s5678". <br>
Строка "s54321" меньше строки "s5678".';
}

print_r($lineBrake);
print_r($lineBrake);
$x = strcmp("54321","5678");
if ($x > 0) {
print 'The string "54321" is greater than the string "5678". <br>
Строка "54321" больше, чем строка "5678".';
} elseif ($x < 0) {
print 'The string "54321" is less than the string "5678". <br>
Строка "54321" меньше строки "5678".';
}
print_r($lineBrake);
print_r($lineBrake);
$х = strcmp('6 pack','55 card stud');
if ($x > 0) {
print 'The string "6 pack" is greater than
the string "55 card stud". <br> Строка "6 pack" больше, чем
строка "55-карточный стад".';
} elseif ($x < 0) {
print 'The string "6 pack" is less than
the string "55 card stud". <br> Строка "6 pack" меньше
строка "55-карточный стад".';
}
print_r($lineBrake);
print_r($lineBrake);
$x = strcmp('6 pack',55);
if ($x > 0) {
print 'The string "6 pack" is greater than the number 55. <br>
Строка "6 pack" больше числа 55.';
} elseif ($x < 0) {
print 'The string "6 pack" is less than the number 55. <br>
Строка "6 pack" меньше числа 55.';
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.13. Сравнение разных типов данных с помощью составной операции типа
'космический корабль'
</b>");
print_r($lineBrake);
print_r($lineBrake);

// Переменной $а присваивается отрицательное число,
// поскольку 1 меньше 12.7
$а = 1 <=> 12.7;
var_dump($a);
print_r($lineBrake);
// Переменной $b присваивается положительное число,
// поскольку символ "c" следует после символа "b"
$b = "charlie" <=> "bob";
var_dump($b);
print_r($lineBrake);
print_r($lineBrake);

// Сравнение числовых символьных строк осуществляется аналогично
// операциям сравнения < и >, но не функции strcmp()
$х = '6 pack' <=> '55 card stud';
if ($x > 0) {
print 'The string "6 pack" is greater than
the string "55 card stud". <br> Строка "6 pack" больше, чем
строка «55-карточный стад».';
} elseif ($x < 0) {
print 'The string "6 pack" is less than
the string "55 card stud". <br> Строка "6 pack" меньше
строка 55-карточный стад.';
}

print_r($lineBrake);
print_r($lineBrake);
// Сравнение числовых символьных строк осуществляется аналогично
// операциям сравнения < и >, но не функции strcmp()
$х ='6 pack' <=> 55;
if ($х < 0) {
print 'The string "6 pack" is greater than the number 55. <br>
Строка 6 пак больше числа 55.';
} elseif ($x > 0) {
print 'The string "6 pack" is less than the number 55. <br>
Строка 6 пак меньше числа 55.';
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.14. Применение операции отрицания</b>");
print_r($lineBrake);
print_r($lineBrake);

// Все проверочное выражение ($finished == false)
// истинно, если значение переменной $finished равно false
if ($finished === false) {
print 'Not done yet!';
}

// Все проверочное выражение (! $finished) истинно,
// если значение переменной $finished равно false
if (! $finished) {
print 'Not done yet!';
}
print_r($finished);

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.15. Операция отрицания</b>");
print_r($lineBrake);
print_r($lineBrake);

if (! strcasecmp($first_name, $last_name)) {
print '$first_name and $last_name are equal. <br>
first_name и last_name равны.';
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.16. Логические операции</b>");
print_r($lineBrake);
print_r($lineBrake);

function typeOfAge($age) {

if (($age >= 13) && ($age < 65)) {
    print "You are too old for a kid's discount and too
    young for the senior's discount.";
    }
}
print_r(typeOfAge(13));
print_r($lineBrake);
print_r($lineBrake);

function mealT($meal) {
    if (($meal === 'breakfast') || ($dessert === 'souffle')) {
    print "Time to eat some eggs.";
    }
  }
print_r(mealT("breakfast"));

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.17. Вывод на экран списка, размечаемого
дескриптором, в цикле, организуемом с помощью
конструкции while()
</b>");
print_r($lineBrake);
print_r($lineBrake);

$i = 1;
print '<select name="people">';
while ($i <= 10) {
print "<option>$i</option>\n";
$i++;
}
print_r("</select>");

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.18. Вывод на экран списка, размечаемого дескриптором,
 в цикле, организуемом с помощью конструкции for()</b>");
 print_r($lineBrake);
 print_r($lineBrake);



print_r('<select name = "people">');
for ($i = 1; $i <= 10; $i++) {
  print_r("<option>$i</option>\n");
}
print_r("</select>");

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.19. Применение нескольких выражений в конструкции цикла for()</b>");
 print_r($lineBrake);
 print_r($lineBrake);

 print '<select name="doughnuts">';
 for ($min = 1, $max = 10; $min < 50; $min += 10, $max += 10) {
 print "<option>$min - $max</option>\n";
 }
 print '</select>';

 print_r($lineBrake);
 print_r($lineBrake);

 print_r($lineBrake);
 print_r($lineBrake);
 print_r("<b>Определите истинность или ложность приведенных ниже выражений, не прибегая к помощи
интерпретатора РНР.</b>");
  print_r($lineBrake);
  print_r($lineBrake);

print_r("а - ложь"); // -
print_r($lineBrake);
print_r("б - верно"); // -
print_r($lineBrake);
print_r("с - Верно");
print_r($lineBrake);
print_r("д - ложь");
print_r($lineBrake);
print_r("е - ложь"); // -
print_r($lineBrake);
print_r("ф - верно"); // -
print_r($lineBrake);
print_r("g - Верно");
print_r($lineBrake);
print_r("е - ложь"); // -

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>Выясните результат, выводимый приведенной ниже программой, не прибегая к помощи интерпретатора РНР.
</b>");
 print_r($lineBrake);
 print_r($lineBrake);


$аgе = 12;
$shoe_size = 13;
if ($аgе > $shoe_size)
print "Message 1.";
 elseif (($shoe_size++) && ($аgе > 20))
print "Message 2.";
 else
print "Message 3.";

print "Age: $аgе.  Shoe Size: $shoe_size";


print_r($lineBrake);
print_r($lineBrake);
print_r("<b>Воспользуйтесь конструкцией цикла while(), чтобы вывести на экран величины температур
в пределах от -50 до 50 градусов по Фаренгейту и эквивалентные им величины температур
в градусах Цельсия. По температурной шкале Фаренгейта вода замерзает при температуре 23
градуса и закипает при 212 градусах. А по температурной шкале Цельсия вода замерзает при
температуре 0 градусов и закипает при 100 градусах. Таким образом, для преобразования
температуры по Фаренгейту в температуру по Цельсию следует вычесть из ее величины 32,
умножить полученную разность на 5 и разделить на 9. А для преобразования температуры
по Цельсию в температуру по Фаренгейту следует умножить ее величину на 9, разделить
полученный результат на 5 и прибавить 32.
</b>");
 print_r($lineBrake);
 print_r($lineBrake);

 $f = -50;
while ($f <= 50) {
$c = ($f - 32) * (5/9);
printf("%d degrees F = %d degrees C\n", $f, $c);
$f += 5;
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>Видоизмените выполнение задания в упражнении 3, воспользовавшись конструкцией цикла
for() вместо конструкции цикла while().
</b>");
 print_r($lineBrake);
 print_r($lineBrake);

 for ($f = -50; $f <= 50; $f += 5) {
$c = ($f - 32) * (5/9);
printf("%d degrees F = %d degrees C\n", $f, $c);
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>Вариант 2. Видоизмените выполнение задания в упражнении 3, воспользовавшись конструкцией цикла
for() вместо конструкции цикла while().
</b>");
 print_r($lineBrake);
 print_r($lineBrake);

print '<select name="degrees">';
for ($f = -50; $f < 50; $f += 5) {
  $c = ($f - 32) * (5/9);
print "<option>$f degrees F = $c degrees C</option>\n";
}
print '</select>';
