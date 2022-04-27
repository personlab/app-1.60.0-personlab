<?php

//Передача аргуменов по значению и по ссылке
function sumUser($num) {
  $num = $num + 5;
  return;
}
$a = 3;
print_r($a) . "<br>";
sumUser($a);
print_r($a) . "<br>";
print_r($a) . "<br>";

function sumUser1(&$num) {
  $num = $num + 5;
  return;
}
$a = 3;
print_r($a) . "<br>";
sumUser1($a);
print_r($a) . "<br>";



 ?>
