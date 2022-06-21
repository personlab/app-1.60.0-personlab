<?php

  htmlspecialchars($_SERVER['PHP_SELF']);
  session_start();
  print_r(session_id());
  print_r("<br>");
  print_r("<br>");
  // unset очищает историю сессии после выхода с приватной страницы
  unset($_SESSION['login']);
  unset($_SESSION['passwd']);

  //$_SESSION = []

 ?>

 <html lang="ru">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="index.css">
   <title>Home page</title>
 </head>
     <body>
       <h1>Привет всем!</h1>
       <h2>Это главная страница магазина</h2>
       <h3><a href="privatePage.php">Закрытая информация</a></h3>
     </body>
 </html>

<?php
    print_r("<br>");
    print_r("<br>");
  print_r(session_name());
  // выводим имя текущей сессии
 ?>
