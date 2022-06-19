<?php
print_r("<p><b>Домашняя работа по итогам 16 урока: </b></p><br>");
$link = mysqli_connect("localhost", "root", "", "furniturestore");

if ($link === false) {
  print_r("Невозможно подключиться к MySQL. Ошибка: " . mysqli_connect_error());
} else {
  mysqli_set_charset($link, "utf8");
  $date = "29.09.2022";
  $date = date("Y-m-d", strtotime($date));
  print_r("<p>Списки заказов, совершенных <b>" . $date . ": </b></p>");
}


$sql = 'SELECT clients.surName, clients.firstName, clients.lastName, clients.phone, product.productName, material.materialName, orders.orderData FROM clients JOIN material JOIN product JOIN orders ON orders.clientID = clients.ID and orders.materialID = material.ID and orders.productID = product.ID WHERE orders.orderData = \'' . $date . '\';';

$result = mysqli_query($link, $sql);
if ($result === false) {
  print_r("Произошла ошибка при выполнении запроса: " . mysqli_error($link));
}

while ($row = mysqli_fetch_array($result)) {
  print_r("<p>Имя клиента: " . $row['surName'] . " " . $row['firstName'] . " " . $row['lastName'] . ";<br>Номер телефона: " . $row['phone'] . ";<br> Товар: " . $row['productName'] . ";<br>Материал изготовления: " . $row['materialName'] . "<br><br>");
}
