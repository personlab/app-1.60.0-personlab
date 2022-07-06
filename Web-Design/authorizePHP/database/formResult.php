<?php

  htmlspecialchars($_SERVER['PHP_SELF']);
  session_start(); // создает новую сессию или восстанавливает текущую
  print_r(session_id()); // вывод id сессии
  print_r("<br>");
  print_r("<br>");
  //$link = mysqli_connect("localhost", "root", "", "passwords");
    function checkInput($text) {
    $text = trim($text);
    $text = stripcslashes($text);
    $text = htmlspecialchars($text);
    return $text;
  }

if (!isset($_POST['submit'])) {

         } else {

           $servername2 = $_POST['servernameSecond'];
           $loginHost2 = $_POST['loginHostSecond'];
           $passwordHost2 = $_POST['passwordHostSecond'];
           $nameDatabase2 = $_POST['nameDatabaseSecond'];
           $nameTable2 = $_POST['nameTableSecond'];
           //Пишем логин и пароль из формы в переменные (для удобства работы):
          $used_id = $_POST['id'];
  //$link = mysqli_connect("localhost", "personbk_database", "VP!MrPpFMjG9yuz", "personbk_database");
          $link = mysqli_connect("$servername2", "$loginHost2", "$passwordHost2", "$nameDatabase2");
          mysqli_set_charset($link, "utf8");
          if ($link === false) {
            print_r("Невозможно подключиться к MySQL. Ошибка: " . mysqli_connect_error());
          } else {
            print_r("Соединение установлено успешно!<br><br>");
          }


    $sql = "SELECT `id`, `firstName`, `lastName`, `userLogin`, `userEmail`, `reg_data`, `userPhone`, `userGender`, `userPassword`, `userMessage` FROM $nameTable2  WHERE id = '$used_id'";
    $result = mysqli_query($link, $sql);

     while ($row = mysqli_fetch_array($result)) {
       print_r("<br>Имя: " . $row['firstName'] . "<br>Фамилия: " . $row['lastName'] . "<br>Логин: " . $row['userLogin'] . "<br>Email:  " . $row['userEmail'] . "<br>Дата регистрации: " . $row['reg_data'] . "<br>Номер: " . $row['userPhone'] .
       "<br>Пол: " . $row['userGender'] . "<br>Комментарий: " . $row['userMessage'] .  "<br>");
       print_r("Через 15 сек. Вы автоматически отправитесь на форму регистрации.");
       Header("Refresh: 15; registration.html");
     }
}


  if (!isset($_GET['submit'])) {
  } else {
    // Подключение кбазе данных
    $servername = $_GET['servernameOne'];
    $LoginHost = $_GET['loginHostOne'];
    $PasswordHost = $_GET['passwordHostOne'];
    $nameDatabase = $_GET['nameDatabaseOne'];
    $nameTable = $_GET['nameTableOne'];

  // Пишем логин и пароль из формы в переменные (для удобства работы):
$userBD = $_GET['name'];
$userBDSurName = $_GET['surtName'];
$login = $_GET['login'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$dateOfBirth = $_GET['date'];
$gender = $_GET['userGender'];
$password = $_GET['passwd'];
$password_confirm = $_GET['passwd_confirm']; //подтверждение пароля
$hash = password_hash($password, PASSWORD_BCRYPT);
$comment = checkInput($_GET['userMessage']);
$captcha = trim($_GET["captcha"]);
//$link = mysqli_connect("localhost", "root", "", "database");
$link = mysqli_connect("$servername", "$LoginHost", "$PasswordHost", "$nameDatabase");
mysqli_set_charset($link, "utf8");
if ($link === false) {
print_r("Невозможно подключиться к MySQL. Ошибка: " . mysqli_connect_error());
} else {
print_r("Соединение установлено успешно!<br><br>");
}
$row = "SELECT * FROM `$nameTable` WHERE `userLogin` = '". $login ."'";
$is_login_free = mysqli_query($link, $row);
$rowTwuo = "SELECT * FROM `$nameTable` WHERE `userEmail` = '". $email ."'";
$is_login_freeTwuo = mysqli_query($link, $rowTwuo);
$sql = "INSERT INTO `$nameTable` (firstName, lastName, userLogin,	userEmail, userPhone, reg_data, userGender, userPassword, userMessage) VALUES ('$userBD', '$userBDSurName', '$login', '$email', '$phone', '$dateOfBirth', '$gender', '$hash', '$comment')";



if ($password === $password_confirm) {

    if (empty($_GET['passwd'])) {

         } else {
         $password = checkInput($_GET['passwd']);
         if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{7,}$/u", $password)) {
           print_r("Введите корректный пароль.<br>Длиной не менее 7 символов,
           включает латинские буквы верхнего и нижнего регистра, цифры и спец.символы.<br>Ваш пароль:  {$password}  <br><br>");
           print_r("Через 6 сек. Вы автоматически отправитесь на форму регистрации.");
           Header("Refresh: 6; registration.php");
         } else {
           if ($is_login_free->num_rows > 0) {
               print_r("Такой логин уже занят! <br><br>");
               print_r("Через 5 сек. Вы автоматически отправитесь на форму регистрации.");
               Header("Refresh: 5; registration.php");
           } else {
             if ($is_login_freeTwuo->num_rows > 0) {
                 print_r("Такой email уже занят! <br><br>");
                 print_r("Через 5 сек. Вы автоматически отправитесь на форму регистрации.");
                 Header("Refresh: 5; registration.php");
             } else {
               if (empty($_GET['name'])) {
               } else {
                   $userBD = checkInput($_GET['name']);
                 if (!preg_match("/^(([a-zA-Z' -]{1,40})|([а-яА-Я' -]{1,40}))$/u", $userBD)) {
                     print_r("Введите корректное имя.<br>Русские или английские буквы, пробел, знаки ' или -.<br>Ваше имя:  {$userBD}  <br><br>");
                     print_r("Через 5 сек. Вы автоматически отправитесь на форму регистрации.");
                     Header("Refresh: 5; registration.php");
                 } else {
                   if (empty($_GET['surtName'])) {
                   } else {
                     $userBDSurName = checkInput($_GET['surtName']);
                     if (!preg_match("/^(([a-zA-Z' -]{1,40})|([а-яА-Я' -]{1,40}))$/u", $userBDSurName)) {
                       print_r("Введите корректную фамилию.<br>Русские или английские буквы, пробел, знаки ' или -.<br>Ваша фамилия:  {$userBDSurName}  <br><br>");
                       print_r("Через 5 сек. Вы автоматически отправитесь на форму регистрации.");
                       Header("Refresh: 5; registration.php");
                     } else {
                       if (empty($_GET['login'])) {
                       } else {
                           $login = checkInput($_GET['login']);
                         if (!preg_match("/^([a-zA-Z0-9-'_]{2,20})$/u", $login)) {
                             print_r("Введите корректный логин.<br>Русские или английские буквы, цифры и знаки - ' _.<br>Ваш логин: {$login}  <br><br>");
                             print_r("Через 5 сек. Вы автоматически отправитесь на форму регистрации.");
                             Header("Refresh: 5; registration.php");
                         } else {
                           if ($is_login_freeTwuo->num_rows > 0) {
                               print_r("Такой email уже занят!<br>");
                           } else {
                             if (empty($_GET['phone'])) {
                             } else {
                                 $phone = checkInput($_GET['phone']);
                                 if (!preg_match("/^([0-9]{2,40})$/u", $phone)) {
                                     print_r("Введите корректный номер: цифры.<br>Ваш номер: {$phone} <br><br>");
                                     print_r("Через 5 сек. Вы автоматически отправитесь на форму регистрации.");
                                     Header("Refresh: 5; registration.php");
                                 } else {
                                   if (empty($_GET['userGender'])) {
                                       print_r("Выберите пол<br>");
                                   } else {
                                     if(($_SESSION["rand"] != $captcha) && ($_SESSION["rand"] != "")){
                                        //Если капча не передана либо оно является пустой
                                        print_r("<p'><strong>Ошибка!</strong> Вы ввели неправильную капчу </p><br><br>");
                                        print_r("Через 5 сек. Вы автоматически отправитесь на форму регистрации.");
                                        Header("Refresh: 5; registration.php");
                                      } else {


                                     $gender = checkInput($_GET['userGender']);
                                        mysqli_query($link, $sql);
                                        print_r("Вы успешно зарегистрированы!<br><br>");
                                        print_r("Через 15 сек. Вас переведут на персональную страницу.");
                                        Header("Refresh: 15; privatePage.php");
                                         }
                                       }
                                     }
                                   }
                                 }
                               }
                             }
                           }
                         }
                       }
                     }
                   }
                 }
               }
             }

    } else { 	//Если пароль и его подтверждение НЕ совпадают - выведем ошибку:
    print_r("Пароли не совпадают!<br><br>");
    print_r("Через 5 сек. Вы автоматически отправитесь на форму регистрации.");
    Header("Refresh: 5; registration.html");
    }
}
