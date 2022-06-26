<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="form.css">
  <link rel="stylesheet" href="btnTwuo.css">
  <title>Форма Регистрации</title>
</head>
<body>
   <div class="contact-us">
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
       // function checkInputTwou($password) {
       //   $password = trim($password);
       //   $password = stripcslashes($password);
       //   $password = htmlspecialchars($password);
       //   return $password;
       // }


       if (!isset($_GET['submit'])) {
           print_r("<form class = 'userForm'>
                  <p><input type = 'text' name = 'name' required = 'required'><span>Name:<span class = 'error'>*</span></span></p>
                  <p><input type = 'text' name = 'login' required = 'required'><span>Login:<span class = 'error'>*</span></span></p>
                  <p><input type = 'text' name = 'email' required = 'required'><span>Email:<span class = 'error'>*</span></span></p>
                  <p><input type = 'password' name = 'passwd' required = 'required'><span>Password<span class = 'error'>*</span></span></p>
                  <p><input type = 'password_confirm' name = 'passwd_confirm' required = 'required'><span>Pass.confirm<span class = 'error'>*</span></span></p>
                  <button class = 'btn' type = 'submit' name = 'submit'>
                  <span>Зарегистрироваться</span>
                  <span>Зарегистрироваться</span>
                  </button>
                </form>");
         } else {
           //Пишем логин и пароль из формы в переменные (для удобства работы):
    $userBD = $_GET['name'];
		$login = $_GET['login'];
    $email = $_GET['email'];
		$password = $_GET['passwd'];
		$password_confirm = $_GET['passwd_confirm']; //подтверждение пароля
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $link = mysqli_connect("localhost", "root", "", "passwords");
    $row = 'SELECT * FROM `users` WHERE `userLogin` = "'. $login .'"';
    $is_login_free = mysqli_query($link, $row);
		//Если пароль и его подтверждение совпадают...
		if ($password === $password_confirm) {



		} else { 	//Если пароль и его подтверждение НЕ совпадают - выведем ошибку:
      echo 'Пароли не совпадают!';
	  }
          if (empty($_GET['passwd'])) {
            $passwordErr = "Введите пароль";
          } else {
          $password = checkInput($_GET['passwd']);
          if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{7,}$/u", $password)) {
            echo "Введите корректный пароль. Длиной не менее 7 символов,
            включает латинские буквы верхнего и нижнего регистра, цифры и спец.символы.<br>Ваш пароль:  ";
          }
        }
        // $row = 'SELECT * FROM `users` WHERE `userLogin` = "' . $login . '"';
        // $is_login_free = mysqli_query($link, $row);
       //   //Если $is_login_free пустой - то логин не занят!
       if ($is_login_free->num_rows === 1) {
       /* Формируем и отсылаем SQL запрос: ВСТАВИТЬ В таблицу_users УСТАНОВИТЬ логин = $login И пароль = $password. */
        $sql = "INSERT INTO users (userName, userLogin, userEmail, hash) VALUES ('$userBD', '$login', '$email', '$hash')";
        mysqli_query($link, $sql);
        //Выведем сообщение об успешной регистрации:
       echo 'Вы успешно зарегистрированы!';
       } else { //Если $is_login_free НЕ пустой - то логин занят!
        echo 'Такой логин уже занят!';
     }
}


	//Не заполнено какого-либо из полей.
	// else {
	// 	echo 'Поля не могут быть пустыми!';
	// }


     //   if (!isset($_GET['submit'])) {
     //       print_r("<form class = 'userForm'>
     //              <p><input type = 'text' name = 'name' required = 'required'><span>Name:<span class = 'error'>*</span></span></p>
     //              <p><input type = 'text' name = 'login' required = 'required'><span>Login:<span class = 'error'>*</span></span></p>
     //              <p><input type = 'text' name = 'email' required = 'required'><span>Email:<span class = 'error'>*</span></span></p>
     //              <p><input type = 'password' name = 'passwd' required = 'required'><span>Password<span class = 'error'>*</span></span></p>
     //              <p><input type = 'password_confirm' name = 'passwd_confirm' required = 'required'><span>Pass.confirm<span class = 'error'>*</span></span></p>
     //              <button class = 'btn' type = 'submit' name = 'submit'>
     //              <span>Зарегистрироваться</span>
     //              <span>Зарегистрироваться</span>
     //              </button>
     //            </form>");
     //     } else {
     //       $userBD = $_GET['name'];
     //       $login = $_GET['login']; // его логин
     //       $email = $_GET['email'];
     //       $passwordForm = $_GET['passwd']; // переменная с паролем который создал клиент
     //       $password_confirm = $_REQUEST['passwd_confirm'];
     //       $hash = password_hash($passwordForm, PASSWORD_BCRYPT);
     //       $link = mysqli_connect("localhost", "root", "", "passwords");
     //       //$sqlClient = "INSERT INTO urers (userName, userLogin, hash) VALUES ('name', 'login' 'passwd')";
     //       if ($link === false) {
     //         print_r("Невозможно подключиться к MySQL Ошибка: " . mysqli_connect_error());
     //       } else {
     //         $sqlClient = "INSERT INTO users (userName, userLogin, userEmail, hash) VALUES ('$userBD', '$login', '$email', '$hash')";
     //         $result = mysqli_query($link, $sqlClient);
     //         if ($result === false) {
     //         print_r("<br>Произошла ошибка при выполнении запроса: " . mysqli_error($link));
     //         } else {
     //          print_r("Спасибо за регистрацию и добро пожаловать<br><br><br><a href='authorize.php'>Форма авторизации</a><br>");
     //      }
     //  }
     // }
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


<!-- <?php

$sqlClient = "SELECT `userName` FROM `users` WHERE userLogin = '" . $login . "';";
$is_login_free = mysqli_query($link, $sqlClient);
if (empty( $is_login_free)) {
  echo 'Такой логин уже занят!';
}

?> -->
