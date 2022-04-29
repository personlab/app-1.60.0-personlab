<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>
<?php

$lineBreak = "<br>";

$families = [["Tom", "Alice"], ["Bob", "Kate"], ["Sam", "Mary"]];
foreach ($families as $family)
{
    echo "<tr>";
    foreach ($family as $user)
    {
        echo "<td>$user</td>";
    }
    echo "</tr>";
}

print_r($lineBreak);
print_r($lineBreak);

$phones = array(
        "apple"=> array("iPhone 12", "iPhone X", "iPhone 12 Pro"),
        "samsumg"=>array("Samsung Galaxy S20", "Samsung Galaxy S20 Ultra"),
        "nokia" => array("Nokia 8.3", "Nokia 3.4"));
foreach ($phones as $brand => $items)
{
    echo "<h3>$brand</h3>";
    echo "<ul>";
    foreach ($items as $key => $value)
    {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}

print_r($lineBreak);
print_r($lineBreak);

print_r("<h3>Вариант с Array</h3>");

$gadgets = array(
        "phones" => array("apple" => "iPhone 12",
                    "samsumg" => "Samsung S20",
                    "nokia" => "Nokia 8.3"),
        "tablets" => array("lenovo" => "Lenovo Yoga Smart Tab",
                        "samsung" => "Samsung Galaxy Tab S5",
                        "apple" => "Apple iPad Pro"));
foreach ($gadgets as $gadget => $items)
{
    echo "<h3>$gadget</h3>";
    echo "<ul>";
    foreach ($items as $key => $value)
    {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
}

print_r($lineBreak);
print_r($lineBreak);

// присвоим одному из элементов другое значение
$gadgets["phones"]["nokia"] = "Nokia 9";
// выведем это значение
echo $gadgets["phones"]["nokia"];

print_r($lineBreak);
print_r($lineBreak);

print_r("<h3>Укороченный вариант с квадратными скобками без array</h3>");

$gadgets_1 = [
        "phones" => ["apple" => "iPhone 12",
                    "samsumg" => "Samsung S20",
                    "nokia" => "Nokia 8.2"],
        "tablets" => ["lenovo" => "Lenovo Yoga Smart Tab",
                        "samsung" => "Samsung Galaxy Tab S5",
                        "apple" => "Apple iPad Pro"]
];
foreach ($gadgets_1 as $gadget_1 => $value_1) {
  echo "<h3>$gadget_1</h3>";
  echo "<ul>";
  foreach ($value_1 as $key => $value){
    echo "<li>$key : $value</li>";
  }
  echo "</ul>";
}

print_r($lineBreak);
print_r($lineBreak);

print_r("<h3>foreach (variable as key => value) {
  // code...
}</h3>");


$a = array(
      'one'   => 'один',
      'two'   => 'два',
      'three' => 'три'
   );
   foreach( $a as $b => $c ){
      echo $b;
      echo ' = ';
      echo $c;
      echo '<br>';
   }

   print_r($lineBreak);
   print_r($lineBreak);

   $a = array('один', 'два', 'три'); //Слово 'три' не будет напечатано, потому что в коде перед ним сработает инструкция break и цикл завершится.
   foreach( $a as $b ){
      if($b == 'три') break;
      echo $b;
      echo '<br>';
   }

   print_r($lineBreak);
   print_r($lineBreak);

   $a = array('один', 'два', 'три'); //Иногда нужно не завершать цикл, а перейти к следующей итерации, к следующему элементу. Для этого используется инструкция continue:
   foreach( $a as $b ){
      if($b == 'два') continue;
      echo $b;
      echo '<br>';
   }

   print_r($lineBreak);
   print_r($lineBreak);

/*Пример из реального проекта
Приведём пример цикла, который приближен к циклу из реального проекта.
Этот цикл будет находиться на странице со списком новостей и будет
выводить название новости и короткое описание. Сам цикл будет проходить
 внутри массива, который описывает всю страницу. Именно таким способом
 программируются современные сайты: в начале ".php" файла вы загружаете
  данные из базы данных и собираете их большой-большой массив,
  обрабатываете и подготавливаете для вывода. А во второй части файла
  вы выводите значение элементов массива вперемешку с HTML кодом,
  но ничего не считаете и не обращаетесь к базе:*/


   $arResult = array();

  // задаём свойства страницы
     $arResult['title'] = 'Список новостей';

  // обрабатываем новости
     $arResult['items'] = array();
     $arResult['items'][] = array(
        'name' => 'Название первой новости',
        'text' => 'Текст первой новости',
     );
     $arResult['items'][] = array(
        'name' => 'Название второй новости',
        'text' => 'Текст второй новости',
     );


    /* <!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <title><?=$arResult['title']?></title>
  </head>
  <body>
     <?*/
        foreach($arResult['items'] as $item){
           echo $item['name'];
           echo '<br>';
           echo $item['text'];
           echo '<br>';
           echo '<br>';
        }
     /*?>
  </body>
</html>*/

   print_r($lineBreak);
   print_r($lineBreak);

   print_r($lineBreak);
   print_r($lineBreak);

   print_r($lineBreak);
   print_r($lineBreak);

   print_r($lineBreak);
   print_r($lineBreak);

?>
</table>
</body>
</html>
