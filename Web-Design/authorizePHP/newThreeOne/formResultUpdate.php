<?php

  htmlspecialchars($_SERVER['PHP_SELF']);
  session_start();
  print_r("<br>");
    function checkInput($text) {
    $text = trim($text);
    $text = stripcslashes($text);
    $text = htmlspecialchars($text);
    return $text;
  }


  if (!isset($_POST['submit'])) {
                    } else {
                      //Пишем логин и пароль из формы в переменные (для удобства работы):
               $used_id = $_POST['id'];
               $userBD = $_POST['name1'];
               $surtName = $_POST['surtName1'];
               $login = $_POST['login1'];
               $email = $_POST['email1'];
               $phone = $_POST['phone1'];
               $gender = $_POST['userGender1'];
               //$link = mysqli_connect("localhost", "root", "", "database");
               $link = mysqli_connect("localhost", "personbk_database", "VP!MrPpFMjG9yuz", "personbk_database");
               if ($link === false) {
               print_r("Невозможно подключиться к MySQL. Ошибка: " . mysqli_connect_error());
               } else {
               print_r("Соединение установлено успешно!<br><br>");
               $sql = "UPDATE `users_database` SET firstName = '$userBD', lastName = '$surtName', userLogin = '$login', userEmail = '$email', phone = '$phone', userGender = '$gender' WHERE id = '$used_id'";
                mysqli_query($link, $sql);
                print_r("Данные успешно обновлены!<br><br>");
                print_r("Через 5 сек. Вы автоматически отправитесь на форму обновлений.<br><br>");
                Header("Refresh: 5; registration.php");
               }

             }
