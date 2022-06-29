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
                  <br>
                  <button class = 'btn' type = 'submit' name = 'submit'>
                  <span> Обновить данные</span>
                  <span> Обновить данные</span>
                  </button>
                </form>");
         } else {
           //Пишем логин и пароль из формы в переменные (для удобства работы):
          $used_id = $_GET['id'];
          $link = mysqli_connect("localhost", "root", "", "passwords");
          mysqli_set_charset($link, "utf8");


    $sql = "SELECT `id`, `userName`, `userLogin`, `userEmail`, `userGender` FROM `users`  WHERE id = '$used_id'";
    $result = mysqli_query($link, $sql);

     while ($row = mysqli_fetch_array($result)) {
       print_r("<br>Имя клиента: " . $row['userName'] . "<br>Логин клиента: " . $row['userLogin'] .  "<br>Email:  " . $row['userEmail'] . "<br>Пол клиента: " . $row['userGender']);
     }
}
      ?>
    <br>
     <br>
     <h3><a href="Form_vision.php">данные по id</a></h3>
   </div>
</body>
</html>
