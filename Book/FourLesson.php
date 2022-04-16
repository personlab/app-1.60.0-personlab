<?php

$lineBreak = "<br>";
$greeting = "Wellcome";
$clienName = "Anastasiya";

echo "{$greeting}, {$clienName}! {$lineBreak}";

$priceOfBookOne = 60;
$priceOfBookTwo = 17;
$discount = 30;
$bookCount = 2;

//Бинарные операторы
$totalPrice = $priceOfBookTwo + $priceOfBookOne; // +;-;*;/;**;% = операторы; $totalPrice - операнты
echo "Total price: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookOne - $discount;
echo "Total price with discount: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookOne * $bookCount;
echo "Total price for two books: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookOne / $discount;
echo "Total with discount: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookOne % $priceOfBookTwo; // вычисление остатка от деления
echo "Total: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookTwo ** $bookCount; // возведение в степень
echo "Total price: {$totalPrice}. {$lineBreak}";
//унарные операторы
$positiveNumber = 78;
$negativeNumber = -$positiveNumber;
$count = $positiveNumber + $negativeNumber*3;
echo "{$count}. {$lineBreak}";

$a = 7;
$b = 6;
$c = 5;

$d = $a - $b - $c; // лево-ассоциативный оператор, идет от а к с.
$a = $b = $c; // право-ассоцитивный оператор, сначала b+c  потом идек к а и положет значение
