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
                    $servernameThree = $_POST['servernameThree'];
                    $loginHostThree = $_POST['loginHostThree'];
                    $passwordHostThree = $_POST['passwordHostThree'];
                    $nameDatabaseThree = $_POST['nameDatabaseThree'];
                    $nameTableThree = $_POST['nameTableThree'];

                    //Пишем логин и пароль из формы в переменные (для удобства работы):
             $used_id = $_POST['id'];
             $userBD_1 = $_POST['name1'];
             $surtName_1 = $_POST['surtName1'];
             $login_1 = $_POST['login1'];
             $email_1 = $_POST['email1'];
             $phone_1 = $_POST['phone1'];
             $gender_1 = $_POST['userGender1'];
             //$link = mysqli_connect("localhost", "root", "", "database");
             $link = mysqli_connect("$servernameThree", "$loginHostThree", "$passwordHostThree", "$nameDatabaseThree");
             if ($link === false) {
             print_r("Невозможно подключиться к MySQL. Ошибка: " . mysqli_connect_error());
             } else {
             print_r("Соединение установлено успешно!<br><br>");
             $sql = "UPDATE `$nameTableThree` SET firstName = '$userBD_1', lastName = '$surtName_1', userLogin = '$login_1', userEmail = '$email_1', userPhone = '$phone_1', userGender = '$gender_1' WHERE id = '$used_id'";
              mysqli_query($link, $sql);
              print_r("Данные успешно обновлены!<br><br>");
              print_r("Через 10 сек. Вы автоматически отправитесь на форму обновлений.<br><br>");
              Header("Refresh: 10; registration.html");
             }

    }
