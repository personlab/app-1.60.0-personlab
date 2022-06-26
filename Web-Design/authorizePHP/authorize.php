<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="form.css">
  <link rel="stylesheet" href="buttonNewsClub.css">
  <title>Authorize Form</title>
</head>
<body>
   <div class="contact-us">
     <?php

       htmlspecialchars($_SERVER['PHP_SELF']);
       session_start(); // создает новую сессию или восстанавливает текущую
       print_r(session_id()); // вывод id сессии
       $_SESSION = [];
       print_r("<br>");
       print_r("<br>");
       if (!isset($_GET['submit'])) {
           print_r("<form class = 'userForm'>
                  <p><input type = 'text' name = 'login' required = 'required'><span>Login:<span class = 'error'>*</span></span></p>
                  <p><input type = 'password' name = 'passwd' required = 'required'><span>Password<span class = 'error'>*</span></span></p>
                  <button class = 'btn' type = 'submit' name = 'submit'>
                  <span>Войти</span>
                  <span>Войти</span>
                  </button>
                </form>");
         } else {
            $login = $_GET['login']; // его логин
            $passwordForm = $_GET['passwd']; // переменная с паролем который создал клиент
            $link = mysqli_connect("localhost", "root", "", "passwords");

           if ($link === false) {
             print_r("Невозможно подключиться к MySQL Ошибка: " . mysqli_connect_error());
           } else {
             $sql = "SELECT `hash` FROM `users` WHERE userLogin = '" . $login . "';";
             $result = mysqli_query($link, $sql);
             if ($result === false) {
               print_r("<br>Произошла ошибка при выполнении запроса: " . mysqli_error($link));
             } else {
               $passwordBD = mysqli_fetch_array($result);  // переменная которая относится к хешу в базе данных
               if (password_verify($passwordForm, $passwordBD['hash'])) {
                 $_SESSION['logged_in_user_id'] = '1';
                 $_SESSION['logged_login'] = 'login';
                 Header("Location: privatePage.php"); // перенаправляем на страницу
                 } else {
                 print_r("Неверный ввод, попробуйте еще раз<br><br><br><a href='authorize.php'>Форма авторизации</a><br>");
                 }
             }
          }
       }
     //}
       print_r("<br>");
       print_r("<br>");
      ?>
      <!--  required = "required" <form class = "userForm" method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> обработка кода php в этом же файле -->
    <br>
     <br>
     <h3><a href="index.php">Главная страница</a></h3>
   </div>
</body>
</html>
