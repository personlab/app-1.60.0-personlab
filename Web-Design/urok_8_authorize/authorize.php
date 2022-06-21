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
       print_r("<br>");
       print_r("<br>");
       if (!isset($_GET['submit'])) {
           print_r("<form class = 'userForm'>
                  <p><input type = 'text' name = 'login' required = 'required'><span>Login:<span class = 'error'>*</span></span></p>
                  <p><input type = 'password' name = 'passwd' required = 'required'><span>Password<span class = 'error'>*</span></span></p>
                  <button class = 'btn' type = 'submit' name = 'submit'>
                  <span>Зарегистрироваться</span>
                  <span>Зарегистрироваться</span>
                  </button>
                </form>");
         } else {
           $_SESSION['login'] = $_GET['login']; //регистрируем переменную логин
           $_SESSION['passwd'] = $_GET['passwd']; // регистрируем переменную passwd,  теперь
           // логин и пароль - глобальные переменные для этой сессии
           if ($_GET['login'] === "abc" && $_GET['passwd'] === "123") {
             Header("Location: privatePage.php"); // перенаправляем на страницу
           } else {
             print_r("Неверный ввод, попробуйте еще раз<br>");
           }
         }
       print_r("<br>");
       print_r("<br>");
       //print_r($_SESSION); //вывод всех меременных суссии
      ?>
      <!--  required = "required" <form class = "userForm" method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> обработка кода php в этом же файле -->
     <h3><a href="index.php">Главная страница</a></h3>
   </div>
</body>
</html>
<?php

/*  htmlspecialchars($_SERVER['PHP_SELF']);
  session_start(); // создает новую сессию или восстанавливает текущую

  if (!isset($_GET['submit'])) {
      print_r("<form class = userForm>
             <p><input type = text name = login required = required><span>Login:<span class = error>*</span></span></p>
             <p><input type = password name = passwd required = required><span>Password<span class = error>*</span></span></p>
             <button class = btnWTPNews type = submit name = submit><span>Отправить</span></button>
           </form>");
    } else {
      $_SESSION['login'] = $_GET['login']; //регистрируем переменную логин
      $_SESSION['passwd'] = $_GET['passwd']; // регистрируем переменную passwd,  теперь
      // логин и пароль - глобальные переменные для этой сессии
      if ($_GET['login'] === "abc" && $_GET['passwd'] === "123") {
        Header("Location: privatePage.php"); // перенаправляем на страницу
      } else {
        print_r("Неверный ввод, попробуйте еще раз<br>");
      }
    }
  print_r("<br>");
  //print_r($_SESSION); //вывод всех меременных суссии

 ?>*/
