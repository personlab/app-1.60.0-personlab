<?php
$lineBreake = "<br>";
/*print_r('"Hello\'s, \\World"');
print_r("<ul>
<li>Beef Chow-Fun</li>
<li>Sauteed Pea Shoots</li>
<li>Soy Sauce Noodles</li>

</ul>");*/


/*print <<<HTMLBLOCK
<html>
<head><title>Menu</title></head>
<body bgcolor="#fffed9">
<h1>Dinner</h1>
<ul>
<li> Beef Chow-Fun
<li> Sauteed Pea Shoots
<li> Soy Sauce Noodles </ul>
</body>
</html>
HTMLBLOCK;*/
print_r("Вывод имени после ввода в поле . $lineBreake");

if ($_POST['user']) {
print "Hello, ";
//вывести на экран значение параметра 'user' из переданной на обработку формы
print $_POST['user'];
print "!";
} else { // иначе вывести саму форму для ввода имени
  print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your Name: <input type="text" name="user" />
<br/>
<button type="submit">Say Hello</button>
</form>
_HTML_;
}

print_r($lineBreake);
print_r($lineBreake);

print_r("<b>1.6. Вывод отформатированного числа на экран</b>");
print_r($lineBreake);
print_r($lineBreake);
print "The population of the US is about: ";
print number_format(320853904);
print_r($lineBreake);
print_r($lineBreake);
//print_r("bread fruit {$lineBreake}");
//print_r("It's a beautiful day in the neighborhood. {$lineBreake}");
// Переменная $_SERVER['zipcode'] содержит значение параметра
// "zipcode" из переданной на обработку формы
//$zipcode = trim($_POST['zipcode']);
// А теперь это значение с удаленными начальными и конечными
// пробелами содержит переменная $zipcode
//$zip_length = strlen($zipcode);
// выдать предупреждение, если указан почтовый индекс
// длиной меньше 5 символов
/*

/*
Функция trim() удаляет пробел в начале и в конце символьной строки. Этой функцией можно
воспользоваться в сочетании с функцией strlen(), возвращающей длину заданной строки, для
определения длины переданного значения, игнорируя начальные и конечные пробелы
*/
/*
// Переменная $_POST['zipcode'] содержит значение параметра
// "zipcode" из переданной на обработку формы
$zipcode = trim($_POST['zipcode']);
// А теперь это значение с удаленными начальными и конечными
// пробелами содержит переменная $zipcode
$zip_length = strlen($zipcode);
// выдать предупреждение, если указан почтовый индекс
// длиной меньше 5 символов
if ($zip_length != 5) {
print "Please enter a zip code that is 5 characters long. {$lineBreake}";
}
*/

print_r("<b>2.3. Проверка длины усеченной символьной строки, цифра 5 означает длину при которой выдает ошибку</b>");
print_r($lineBreake);
/*
if (strlen(trim($_POST['zipcode'])) != 5) {
print "Please enter a zip code that is 5 characters long. {$lineBreake}";
}


$zipcode = rtrim(ltrim(trim($_POST['zipcode'])));
$zip_length = strlen($zipcode);
if ($zip_length != 5) {
*/
  if (strlen(trim($_POST['zipcode'])) !== 5) {
print_r("Please enter a zip code that is 5 characters long. {$lineBreake}");
print_r("Your zipcode: ");
print_r($_POST['zipcode']);
}
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your zipcode: <input type="text" name="zipcode" />
<br/>
<button type="submit">clik</button>
</form>
_HTML_;
print_r($lineBreake);

print_r("<b>2.5. Сравнение символьных строк с помощью операции равенства<br>
Оператор print выполняется в коде лишь в том случае, если параметр email
передаваемой на обработку формы содержит строковое значение регистра president@whitehouse.gov</b>");
print_r($lineBreake);
print_r($lineBreake);

if ($_POST['email'] == 'president@whitehouse.gov') {
print "Welcome, US President.";
}

print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Email: <input type="text" name="email" />
<br/>
<button type="submit">Go</button>
</form>
_HTML_;
print_r($lineBreake);
print_r($lineBreake);


print_r("<b>2.6. Сравнение(выравнивание) символьных строк без учета регистра<br>
Чтобы сравнить символьные строки без учета регистра букв, следует воспользоваться функцией
strcasecmp(). Эта функция сравнивает две символьные строки, игнорируя отличия в регистре
букв. Если обе символьные строки, предоставляемые функции strcasecmp(), окажутся одинаковыми независимо от отличий в прописных и строчных буквах, она возвратит нулевое значение.</b>");
print_r($lineBreake);
print_r($lineBreake);
if (strcasecmp($_POST['email'], 'president@whitehouse.gov') === 0) {
print "Welcome back, OS President.";
}


print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Email: <input type="text" name="email" />
<br/>
<button type="submit">Go</button>
</form>
_HTML_;

//Форматированный вывод цены с помощью функции printf()
/*
$interit = 5 + 5;
$interit1 = 4 + 4;
print_r("Five plus five is: {$interit} {$lineBreake}");
print_r("Four plus four is: {$interit1} {$lineBreak}");
*/

print_r("<b>2.7 Форматированный вывод цены с помощью функции printf()</b>");
print_r($lineBreake);
print_r($lineBreake);
// 2.7 Форматированный вывод цены с помощью функции printf()
$price = 5; $tax = 0.075;
printf ('The dish costs $%.2f', $price * (1 - $tax));
print_r($lineBreake);

$price = 5; $tax = 0.075;
printf ('The dish costs $%.3f', $price * (1 + $tax)); // $%.3f цифра три означает, что после плавающей точки три цивры
print_r($lineBreake);
print_r($lineBreake);

print_r("<b>2.8. Заполнение нулями значения, выводимого на экран с помощью функции printf()</b>");
//Пример 2.8. Заполнение нулями значения, выводимого на экран с помощью функции printf()
/*После модификаторов следует обязательный символ, обозначающий тип выводимого значения. Вчастности, символ d обозначает
десятичное число, символ s — символьную строку, а символ f — число с плавающей точкой. Если эта загадочная смесь,
состоящая из знака процента и модификаторов, не вкладывается в вашу голову, не отчаивайтесь! Чаще всего функция printf()
применяется для вывода цен, отформатированных по правилу %.2f*/
print_r($lineBreake);
print_r($lineBreake);
$zip = "6520";
$month = 2;
$day = 6;
$year = 2021;

printf("ZIP is %05d and the date is %02d/%02d/%d", $zip, $month, $day, $year);
print_r($lineBreake);
print_r($lineBreake);


//Пример 2.9. Отображение чисел со знаками с помощью функции printf()
print_r("<b>2.9. Отображение чисел со знаками с помощью функции printf()</b>");
print_r($lineBreake);
print_r($lineBreake);
$min = -40;
$max = 40;
printf("The computer can operate between %+d and %+d degrees Celsius.", $min, $max);
print_r($lineBreake);
print_r($lineBreake);

/*
способом форматирования текста является манипулирование регистром букв в символьных строках.
В частности, функция strtolower() делает все буквы строчными, а функция
strtoupper() — прописными в символьной строке. Применение функции strtolower()
демонстрируется в примере 2.10.
*/

//Пример 2.10. Смена регистра букв
print_r("<b>2.10. Смена регистра букв</b>");
print_r($lineBreake);
print_r($lineBreake);
print_r(strtolower("Beef, CHICKEN, Pork, duCK")); //все маленькие буквы
print_r($lineBreake);
print_r(strtoupper("Beef, CHICKEN, Pork, duCK")); // все заглавные "большие" буквы
print_r($lineBreake);
print_r($lineBreake);
/*
Функция ucwords() делает прописной первую букву каждого слова в символьной строке. Ею
удобно пользоваться в сочетании с функцией strtolower(), чтобы выделять заглавными буквами
имена, если они исходно набраны только прописными буквами. В примере 2.11 демонстрируется,
как сочетать функции strtolower() и ucwords().
*/

//Пример 2.11. Выделение имен заглавными буквами с помощью функции ucwords()
print_r("<b>2.11. Выделение имен заглавными буквами с помощью функции ucwords()<br>
Функция ucwords() делает прописной первую букву каждого слова в символьной строке. Ею
удобно пользоваться в сочетании с функцией strtolower(), чтобы выделять заглавными буквами
имена, если они исходно набраны только прописными буквами. Демонстрируется,
как сочетать функции strtolower() и ucwords()</b>");
print_r($lineBreake);
print_r($lineBreake);
print_r(ucwords(strtolower("JOHN FRANKENSHTEIN"))); // ucwords Делает первыми заглавными буквами
print_r($lineBreake);
print_r($lineBreake);

/*
$_POST['comments']
print_r(substr($_POST['comments'], 0, 3));
print_r("...");
*/

// вывести на экран приветствие, если форма
// передана на обработку
print_r("<b>вывод на экран приветствие, если форма передана на обработку<br></b>");
print_r($lineBreake);
print_r($lineBreake);
if ($_POST['user']) {
print "Hello person,";
// вывести на экран значение параметра 'user' из
// переданной на обработку формы
print $_POST['user'];
print "!";
} else {
// иначе - вывести на экран саму форму
//Глава 1. Краткое введение в РНР 30
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Name: <input type="text" name="user" />
<br/>
<button type="submit">Say Hello</button>
</form>
_HTML_;
}
print_r($lineBreake);
print_r($lineBreake);

//  второй вариант укороченное имя
print_r("<b>вывод на экран приветствие, если форма передана на обработку
<br>второй вариант укороченное имя До пяти символов<br></b>");
print_r($lineBreake);
print_r($lineBreake);
print "Hello, ";
// вывести на экран значение параметра 'user'
// из переданной на обработку формы
print_r(substr($_POST['user'], 0, 5));
//print $_POST['user'];
print_r("...");
print "!";
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Name: <input type="text" name="user" />
<br/>
<button type="submit">Say Hello</button>
</form>
_HTML_;

print_r($lineBreake);
print_r($lineBreake);

//вариант с комментарием

print_r("<b>вариант с комментарием, ограничение 40 символов<br></b>");
print_r($lineBreake);
print_r($lineBreake);
//print "Hello, ";
/*
В качестве трех аргументов функция substr() принимает обрабатываемую символьную строку,
начальное положение извлекаемой подстроки и количество извлекаемых байтов. Начало символьной
строки находится на позиции 0, а не 1, и поэтому вызов функции substr($_POST['comments'], 0,
30) означает следующее: извлечь 30 байтов из строкового значения переменной $_POST['comments'],
начиная с самого его начала
*/
// вывести на экран значение параметра 'comments'
// из переданной на обработку формы
print_r(substr($_POST['comments'], 0, 40));
//print $_POST['comments'];
print_r("...");
print "!";
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Comment: <input type="text" name="comments" />
<br/>
<button type="submit">Go</button>
</form>
_HTML_;

print_r($lineBreake);
print_r($lineBreake);

print_r("<b>2.13. Извлечение конца символьной строки с помощью функции substr()</b>");
print_r($lineBreake);
print_r($lineBreake);
print_r("Card: XX");
print_r(substr($_POST["card"], -4));
//print_r(4000-1234-5678-9101);
/*
Если параметр card передаваемой на обработку формы содержит номер кредитной карточки
4000-1234-5678-9101, то при выполнении кода из примера 2.13 на экран выводится следующий
результат:
Card: ХХ9101
Вместо вызова функции substr($_POST['card'], -4,4) проще вызвать функцию substr
($_POST['card'], -4). Ведь если оставить последний аргумент в вызове данной функции, она
возвратит подстроку, начиная с заданного начального положения (отрицательного или положительного) и до конца исходной символьной строки
*/
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Number: <input type="text" name="card" />
<br/>
<button type="submit">Go</button>
</form>
_HTML_;

print_r($lineBreake);
print_r($lineBreake);

//Функция str_replace() заменяет отдельные части исходной символьной строки вместо того, чтобы извлекать из нее подстроку.
print_r("<b>2.14. Применение функции str_replace()
<br>Функция str_replace() заменяет отдельные части исходной символьной строки вместо того, чтобы извлекать из нее подстроку. С этой целью она находит подстроку и заменяет ее новой
строкой. Это удобно для простой настройки HTML-разметки по шаблону. Функция
str_replace() применяется для установки атрибута class в дескрипторах <span></b>");
print_r($lineBreake);
print_r($lineBreake);

$html = '<b><span class= "class">Friend Bean Curd<span>
<br>
<span class= "class">Oil-Soaked Fish</span></b>';

print_r(str_replace("class", $my_class, $html));

//Если в переменной $my_class установлено значение lunch
print_r($lineBreake);
print_r($lineBreake);
// мы class изменили на lunch
$my_class = "lunch";
$html = '<b><span class= "lunch">Friend Bean Curd<span>
<br><span class= "class">Bean Curd Friend<span>
<br>
<span class= "class">Oil-Soaked Fish</span>
<br><span class= "lunch">Bean Curd Friend<span></b>';

print_r(str_replace("class", $my_class, $html));

print_r($lineBreake);
print_r($lineBreake);

//числа страница 47 книги PHP7
print_r("<b>2.15. Числа</b>");
print_r($lineBreake);
print_r($lineBreake);
$sumOne = 56;
$sumTwo = 56 + 7;
print_r("{$sumOne} {$lineBreake}");
print_r("{$sumTwo} {$lineBreake}");
print_r(56.30);
print_r(0.774422);
print_r(16777.216);
print_r(0);
print_r(-213);
print_r(1298317);
print_r(-9912111);
print_r(-12.52222);
print_r(0.00);

print_r($lineBreake);
print_r($lineBreake);


//арифметические операции
print_r("<b>2.16. Арифметические операции в РНР
<br>Помимо знака “плюс” (+) для обозначения операции сложения, знака “минус” (-) для операции
вычитания, знака косой черты (/) для операции деления и знака “звездочка” (*) для операции
умножения, в РНР поддерживается обозначение операции возведения в степень двумя знаками
“звездочка” (**), а операции деления по модулю, в результате которой возвращается остаток от
деления, — знаком процента (%): print 17 % 3;
При выполнении приведенной выше строки кода на экран выводится следующий результат: 2
Если разделить число 17 на 3, то получится целая часть 5 и остаток 2, поэтому деление по
модулю 17 % 3 равно 2. Операция деления по модулю удобна для вывода строк, имена классов
CSS которых чередуются в HTML-таблице</b>");
print_r($lineBreake);
print_r($lineBreake);
$sumTree = 17 - 3.5;
print_r(2 + 2 . $lineBreake);
print_r("{$sumTree} {$lineBreake}");
print_r(10 / 3);
print_r($lineBreake);
print_r(6 * 9);
/*
РНР поддерживается обозначение операции возведения в степень двумя знаками
“звездочка” (**), а операции деления по модулю, в результате которой возвращается остаток от
деления, — знаком процента (%): print 17 % 3;
Если разделить число 17 на 3, то получится целая часть 5 и остаток 2, поэтому деление по
модулю 17 % 3 равно 2.
*/ //^^^

print_r($lineBreake);
print_r($lineBreake);
//Переменная
$plates = 5;
$dinner = "Beef Chow-Fun";
$cost_of_dinner = 8.95;
$cost_of_lunch = $cost_of_dinner;

$page_header = <<<HTML_HEADER
<html>
<head><title>Menu</title></head>
<body bgcolor = "#fffed9">
<h1>Dinner</h1>
HTML_HEADER;
print <<<MENU
<ul>
<li> Barbecued $plates
<li> Sliced $dinner
<li> Braised $cost_of_lunch with $cost_of_lunch </ul>
MENU;
$page_footer = <<<HTML_FOOTER
</body>
</html>
HTML_FOOTER;

print_r($page_header);
print_r($lineBreake);
print_r($lineBreake);

/*
В именах переменных учитывается регистр. Это означает, что переменные $dinner, $Dinner
и $DINNER оказываются совершенно разными. У них столько же общего, сколько и у переменных
$breakfast, $lunch и $supper. На практике следует избегать употребления переменных, имена
которых отличаются только регистром букв, поскольку они затрудняют чтение исходного кода и
отладку программ
*/

// 2.17 Операции над переменными
//print_r("\n"); // разрыв строки вместо <br>
print_r("<b>2.17. Операции над переменными</b>");
print_r($lineBreake);
print_r($lineBreake);
$price = 3.95;
$tax_rate = 0.08;
$tax_amount = $price * $tax_rate;
$total_cost = $price + $tax_amount;
$username = "james";
$domain = "@example.com";
$email_address = $username . $domain;

print_r("The tax is " . $tax_amount);
print_r($lineBreake);
print_r("The total cost is " . $total_cost);
print_r("$lineBreake");
print_r("$email_address");
print_r("$lineBreake");
print_r("$lineBreake");

// 2.18 Сочетание операции присваивания с арифметической операцией
// прибавить число 3 обычным способом
print_r("<b>2.18. Сочетание операции присваивания с арифметической операцией
<br>Простой, составной</b>");
print_r($lineBreake);
print_r($lineBreake);
$price = $price + 3;
print_r($price);//простой способ сложения
// прибавить число 3 с помощью составной операции
print_r("$lineBreake");
$price += 3;           //составной
print_r($price);
print_r("$lineBreake");
print_r("$lineBreake");

// 2.19 Сочетание операций присваивания и сцепления символьных строк
print_r("<b>2.19. Сочетание операций присваивания и сцепления символьных строк</b>");//2.20
print_r($lineBreake);
print_r($lineBreake);
$username = "jamse";
$domain = "@gmail.com";
// присоединить символьную строку из переменной $domain в
// конце строки из переменной $username обычным способом
//$username = $username . $domain; //простая сцепка
$username .= $domain;              // составная
print_r($username);     // сцепить символьные строки с помощью составной операции
print_r("$lineBreake");
print_r("$lineBreake");

print_r("<b>2.20 Инкрементирование и декрементирование</b>");//2.20
print_r($lineBreake);
print_r($lineBreake);
/*
Инкрементирование (т.е. приращение) и декрементирование (т.е. отрицательное приращение) переменных на 1 настолько распространено, что для этой цели предназначены отдельные операции.
В частности, операция инкрементирования ++ прибавляет 1 к значению переменной, а операция
декрементирования -- вычитает 1 из значения переменной. Эти операции обычно применяются в
циклах for()
*/
// прибавить 1 к значению переменной $birthday
$birthday = $birthday + 5;
// прибавить еще одну 1 к значению переменной $birthday
++$birthday;
// вычесть 1 из значения переменной $years_left
$years_left = $years_left - 9;
// вычесть еще одну 1 из значения переменной $years_left
--$years_left;
print_r($birthday);
print_r($lineBreake);
//print_r("++$birthday");
print_r($years_left);
print_r($lineBreake);
print_r($lineBreake);

//Пример 2.21. Вставка переменной
print_r("<b>2.21. Вставка переменной</b>");
print_r($lineBreake);
print_r($lineBreake);
$email_address = "yubarmalei@gmail.com";
print_r("Send replies to: $email_address");
print_r($lineBreake);
print_r($lineBreake);

/*
Встраиваемые документы особенно удобны для вставки многих переменных в длинный блок
HTML-разметки
*/

$page_title = 'Menu';
$meat = 'pork';
$vegetable = 'bean sprout';
print <<<MENU
<html>
<head><title>$page_title</title></head>
<body>
<h2>Restorant</h2>
<ul>
<li> Barbecued $meat
<li> Sliced $meat
<li> Braised $meat with $vegetable </ul>
</body>
</html>
MENU;
print_r($lineBreake);
print_r($lineBreake);

$preparation = "Braise";
$meat = "Beef";
print_r("$preparation $meat with Vegetables $lineBreake");
print_r("{$preparation} {$meat} with Vegetables");


print_r($lineBreake);
print_r($lineBreake);

// упражнение 1 главы 2 книги   PHP7
print_r("How are you?" . $lineBreake);
print_r("I'm fine.");

print_r($lineBreake);
print_r($lineBreake);


// упражнение 2 главы 2 книги PHP7
print_r("упражнение 2 главы 2 книги PHP7");
print_r($lineBreake);
print_r($lineBreake);
$burger = 4.95 * 2;
$milkshake = 1.95;
$coceCola = 0.85;
$delenie = 100;
$tax_nalog = 7.5; // 7.5% = 0.075
$tax_nalog_1 = 16; // 16% = 0.16
$total_amount = $burger + $milkshake + $coceCola;
$total_amount_tax = ($burger + $milkshake + $coceCola) / $delenie;
$total_amount_tax1 = $total_amount_tax * $tax_nalog;
$total_amount_tax2 = $total_amount + $total_amount_tax1;
$total_amount_tax3 = $total_amount_tax * $tax_nalog_1;
$total_amount_tips_tax = $total_amount_tax2 + $total_amount_tax3;
print_r("Food: " . $total_amount . $lineBreake);
print_r("Total tax: " . $total_amount_tax2 . $lineBreake);
print_r("Tips: " . $total_amount_tax3 . $lineBreake);
print_r("Total amount: " . $total_amount_tips_tax);
print_r($lineBreake);
print_r($lineBreake);

print_r("второй вариант задания 2");
print_r($lineBreake);
print_r($lineBreake);

$hamburger = 4.95;
$shake = 1.95;
$cola = 0.85;
$tip_rate = 0.16;
$tax_rate = 0.075;
$food = (2 * $hamburger) + $shake + $cola;
$tip = $food * $tip_rate;
$tax = $food * $tax_rate;
$total_xxx = $food + $tip + $tax;
print_r("The total cost of the meal is $" . $total_xxx);

print_r($lineBreake);
print_r($lineBreake);
//задание 3 глава 2 книги PHP7
print_r("задание 3 глава 2 книги PHP7");
print_r($lineBreake);
print_r($lineBreake);
$burger1 = 4.95;
$total_amount_burger = ($burger1 / $delenie) * $tax_nalog;
$total_amount_burger1 = ($burger1 / $delenie) * $tax_nalog_1;
$total_amount_burger2 = $total_amount_burger + $total_amount_burger1 + $burger1;
$total_amount_milkshake = ($milkshake / $delenie) * $tax_nalog;
$total_amount_coceCola = ($coceCola / $delenie) * $tax_nalog;
print_r("Burger: " . $burger1 . " " . "Tax: " . $total_amount_burger . " " . "Tips: " . $total_amount_burger1 . " " . "Amount: " . $total_amount_burger2);
print_r($lineBreake);
print_r($lineBreake);
print_r("Второй вариант задания 3 второй главы");
print_r($lineBreake);
print_r($lineBreake);
$hamburger = 4.95;
$shake = 1.95;
$cola = 0.85;
$tip_rate = 0.16;
$tax_rate = 0.075;
$food = (2 * $hamburger) + $shake + $cola;
$tip = $food * $tip_rate;
$tax = $food * $tax_rate;
$total = $food + $tip + $tax;
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 2, 'Hamburger', $hamburger, 2 * $hamburger);
print_r($lineBreake);
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Shake', $shake, $shake);
print_r($lineBreake);
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Cola', $cola, $cola);
print_r($lineBreake);
printf("<br>%25s: \$%5.2f\n", 'Food Total', $food);
printf("<br>%25s: \$%5.2f\n", 'Food and Tax Total', $food + $tax);
printf("<br>%25s: \$%5.2f\n", 'Food, Tax, and Tip Total', $total);
print_r($lineBreake);


//$first_name = "Konstantine";
//$last_name = "Ibrogimovich";
//$first_name = (substr("Konstantine") -15);
//$last_name = (substr("Ibrogimovich") -14);
//print_r("Welcome, " . $first_name . " " . $last_name);

print_r($lineBreake);
print_r($lineBreake);

//задание 4 второй главы книги PHP7
print_r("Сокращенное имя и фамилия до 5 символов 4 задание");
print_r($lineBreake);
print_r($lineBreake);

print_r("Welcome, ");
print_r(substr($_POST['first_name'], 0, 5) . " ");
print_r(substr($_POST['last_name'], 0, 5));
//print $_POST['comments'];
print "!";
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
First Name <input type="text" name="first_name" />
<form method="post" action="$_SERVER[PHP_SELF]">
Last Name <input type="text" name="last_name" />
<br/>
<button type="submit">Go</button>
</form>
_HTML_;

print_r($lineBreake);
print_r($lineBreake);

print_r("второй вариант 4-го задания");
print_r($lineBreake);
print_r($lineBreake);

$first_name_o = "Srinivasa";
$last_name_o = "Ramanujan";
$name = "$first_name_o $last_name_o";
print_r($name);
print_r(strlen($name)); //strlen - количество символов в строке.

print_r($lineBreake);
print_r($lineBreake);

print_r("Упражнение 5");
print_r($lineBreake);
print_r($lineBreake);

$n = 1; $p = 2; print "$n, $p\n";
print_r($lineBreake);
$n++; $p *= 2; print "$n, $p\n";
print_r($lineBreake);
$n++; $p *= 2; print "$n, $p\n";
print_r($lineBreake);
$n++; $p *= 2; print "$n, $p\n";
print_r($lineBreake);
$n++; $p *= 2; print "$n, $p\n";
print_r($lineBreake);

// провести анализ 3 и 5 упражнения, пройти еще раз эти главы.
