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


       if (!isset($_GET['submit'])) {
           print_r("<form class = 'userForm'>
                  <p><input type = 'text' name = 'name' required = 'required'><span>Name:<span class = 'error'>*</span></span></p>
                  <p><input type = 'text' name = 'login' required = 'required'><span>Login:<span class = 'error'>*</span></span></p>
                  <p><input type = 'text' name = 'email' required = 'required'><span>Email:<span class = 'error'>*</span></span></p>
                  <p><input type = 'password' name = 'passwd' required = 'required'><span>Password<span class = 'error'>*</span></span></p>
                  <p><input type = 'password_confirm' name = 'passwd_confirm' required = 'required'><span>Pass.confirm<span class = 'error'>*</span></span></p>
                  <br>
                  <div class = 'genderUser'>
                     Мужской <input class = 'radioB' type = 'radio' name = 'userGender' value = 'Мужской'>
                     Женский <input class = 'radioB' type = 'radio' name = 'userGender' value = 'Женский'>
                   </div>
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
    $gender = $_GET['userGender'];
		$password_confirm = $_GET['passwd_confirm']; //подтверждение пароля
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $link = mysqli_connect("localhost", "root", "", "passwords");
    $row = "SELECT * FROM `users` WHERE `userLogin` = '". $login ."'";
    $is_login_free = mysqli_query($link, $row);
    $rowTwuo = "SELECT * FROM `users` WHERE `userEmail` = '". $email ."'";
		$is_login_freeTwuo = mysqli_query($link, $rowTwuo);




  if ($password === $password_confirm) {

			if ($is_login_free->num_rows > 0) {

			print_r("Такой логин уже занят!<br>");
			} else {
        $sql = "INSERT INTO users (userName, userLogin, userEmail, userGender, hash) VALUES ('$userBD', '$login', '$email', '$gender', '$hash')";
        mysqli_query($link, $sql);
        print_r("Вы успешно зарегистрированы!");
			}
      } else { 	//Если пароль и его подтверждение НЕ совпадают - выведем ошибку:
        print_r("Пароли не совпадают!<br>");
     }
       if (empty($_GET['passwd'])) {
       } else {
       $password = checkInput($_GET['passwd']);
       if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{7,}$/u", $password)) {
         print_r("Введите корректный пароль.<br>Длиной не менее 7 символов,
         включает латинские буквы верхнего и нижнего регистра, цифры и спец.символы.<br>Ваш пароль:  {$password} <br>");
       }
     }
       if (empty($_GET['name'])) {
       } else {
         $name = checkInput($_GET['name']);
         if (!preg_match("/^(([a-zA-Z' -]{1,40})|([а-яА-Я' -]{1,40}))$/u", $name)) {
           print_r("Введите корректное имя.<br>Русские или английские буквы, пробел, знаки ' или -.<br>Ваше имя:  {$name} <br>");
         }
       }
       if ($is_login_freeTwuo->num_rows > 0) {

       print_r("Такой email уже занят!");
       }
       if (empty($_GET['login'])) {
       } else {
         $login = checkInput($_GET['login']);
         if (!preg_match("/^([a-zA-Z0-9-'_]{2,20})$/u", $login)) {
           print_r("Введите корректный логин.<br>Русские или английские буквы, цифры и знаки - ' _.<br>Ваш логин: {$login} <br>");
         }
       }
       if (empty($_GET['userGender'])) {
         print_r("Выберите пол<br>");
       } else {
         $gender = checkInput($_GET['userGender']);
       }


	}
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
