<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="form.css">
  <link rel="stylesheet" href="btnTwuo.css">
  <title>Форма обновлений</title>
</head>
<body>
   <div class="contact-us">
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


       if (!isset($_GET['submit'])) {
           print_r("<form class = 'userForm'>
                  <p><input type = 'text' name = 'id' required = 'required'><span>ID:<span class = 'error'>*</span></span></p>
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
                  <span>Обновить данные</span>
                  <span>Обновить данные</span>
                  </button>
                </form>");
         } else {
           //Пишем логин и пароль из формы в переменные (для удобства работы):
    $used_id = $_GET['id'];
    $userBD = $_GET['name'];
		$login = $_GET['login'];
    $email = $_GET['email'];
		$password = $_GET['passwd'];
    $gender = $_GET['userGender'];
		$password_confirm = $_GET['passwd_confirm']; //подтверждение пароля
    $link = mysqli_connect("localhost", "root", "", "passwords");


  if ($password === $password_confirm) {
    $sql = "UPDATE `users` SET userName = '$userBD', userLogin = '$login', userEmail = '$email', userGender = '$gender' WHERE id = '$used_id'";
     mysqli_query($link, $sql);
     print_r("Данные успешно обновлены!");


        } else { 	//Если пароль и его подтверждение НЕ совпадают - выведем ошибку:
          print_r("Пароли не совпадают!<br>");
       }

	}
      ?>
      <!--  required = "required" <form class = "userForm" method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> обработка кода php в этом же файле -->
    <br>
     <br>
     <h3><a href="Form_update.php">Обновить данные</a></h3>
   </div>
</body>
</html>
