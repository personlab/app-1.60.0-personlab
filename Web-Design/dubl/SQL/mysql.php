<?php

  //путь к нашей базе данных
  $link = mysqli_connect("localhost", "root", "", "testbase");
  // отображение корректного подключения и отображения ошибки в случае обнаружения
  if ($link === false) {
    print_r("Невозможно подключиться к MySQL. Ошибка: " . mysqli_connect_error());
  } else {
    print_r("Соединение установлено успешно!<br>");
  }

  // Кодировка
  mysqli_set_charset($link, "utf8");
  // выбрать id, Имя, телефон из таблицы клиенты ORDER BY по id c лимитом
  #$sql = 'SELECT id, Name, Phone FROM clients ORDER BY id LIMIT 10';

/*  $result = mysqli_query($link, $sql);
  //print_r(var_dump($result));
  #print_r("<br>Количество строк в таблице клиентов: " . mysqli_num_rows($result));
  //mysqli_fetch_array получает ссылку на область памяти с результатом по ключу
  while ($row = mysqli_fetch_array($result)) {
  print_r("<br>Имя клиента: " . $row['Name'] . "<br>Идентификатор: " . $row['id'] . "<br>" . $row['Phone'] . "<br>");
}*/

  //mysqli_fetch_array получает ссылку на область памяти с результатом с константой по индентификатору
  // while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
  // print_r("<br>Имя клиента: " . $row[1] . "<br>Идентификатор: " . $row[0] . "<br>" . $row[2] . "<br>");
  // }

  // получение из массива всех данных
  /*$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //
  foreach ($rows as $row) {
  print_r("Имя клиента: " . $row['Name'] . "; " . "Идентификатор: " . $row['id'] . "; " . "Номер телефона: " . $row['Phone'] . "<br>");
}*/

 // добавление данных в таблицу
 // добавить в таблицу SET
 //$sqlClient = 'INSERT INTO clients SET Name = "Роман", Phone = "8(898)333-33-33"';
 //второй вариант добавления данных
 // добавить в таблицу VALUES значение
 //$sqlClient = "INSERT INTO `clients`(`Name`, `Phone`) VALUES ('Королина','7(788)877-87-87')";
 /*
 $sqlClient = "INSERT INTO clients (Name, Phone) VALUES ('Иван','7(111)988-98-98')";
 $resultClient = mysqli_query($link, $sqlClient);

 if ($resultClient === false) {
   print_r("Произошла ошибка при выполнении запроса: " . mysqli_error($link));
 }*/

 // получение последней записи в таблице
 $sqlClient = "INSERT INTO clients (Name, Phone) VALUES ('Иван','7(111)988-98-98')";
 $resultClient = mysqli_query($link, $sqlClient);
 $callidClient = mysqli_insert_id($link); // возвращает последнюю запись его id

 if ($resultClient === false) {
   print_r("<br>Произошла ошибка при выполнении запроса: " . mysqli_error($link));
 }
 $sql = "INSERT INTO call_center (id_clients, id_operators, problem, status) VALUES ('$callidClient', '2', 'Problem3', 'Solution')";

 $result = mysqli_query($link, $sql);
 if ($result === false) {
   print_r("<br>Произошла ошибка при выполнении запроса: " . mysqli_error($link));
 }
