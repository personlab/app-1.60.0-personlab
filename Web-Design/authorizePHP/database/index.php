<?php

  htmlspecialchars($_SERVER['PHP_SELF']);
  session_start();
  print_r(session_id());
  print_r("<br>");
  print_r("<br>");
  // unset очищает историю сессии после выхода с приватной страницы
  unset($_SESSION['logged_in_user_id']);
  unset($_SESSION['logged_login']);
  session_destroy();
  // unset($_SESSION['passwd']);
  // $_SESSION = [];\

 ?>

 <html lang="ru">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="index.css">
   <link rel="stylesheet" href="btn.css">
   <title>Home page</title>
 </head>
     <body>
       <h1>Привет всем!</h1>
       <h2>Это главная страница магазина</h2>
       <br>
       <br>
       <a href="privatePage.php" class = "btn">
         <span>Личная страница</span>
         <span>Личная страница</span>
       </a>
       <br>
       <br>
       <a href="registration.html" class = "btn">
         <span>Форма регистрации</span>
         <span>Форма регистрации</span>
       </a>
     </body>
 </html>

<?php
    print_r("<br>");
    print_r("<br>");
  print_r(session_name());
  // выводим имя текущей сессии
 ?>
