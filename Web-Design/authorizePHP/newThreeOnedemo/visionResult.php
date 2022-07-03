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
           //Пишем логин и пароль из формы в переменные (для удобства работы):
          $used_id = $_POST['id'];
          $link = mysqli_connect("localhost", "personbk_database", "VP!MrPpFMjG9yuz", "personbk_database");
          mysqli_set_charset($link, "utf8");
          if ($link === false) {
            print_r("Невозможно подключиться к MySQL. Ошибка: " . mysqli_connect_error());
          } else {
            print_r("Соединение установлено успешно!<br><br>");
          }


    $sql = "SELECT `id`, `firstName`, `lastName`, `userLogin`, `userEmail`, `phone`, `userGender`, `comment` FROM `users_database`  WHERE id = '$used_id'";
    $result = mysqli_query($link, $sql);

     while ($row = mysqli_fetch_array($result)) {
       print_r("<br>Имя: " . $row['firstName'] . "<br>Фамилия: " . $row['lastName'] . "<br>Логин: " . $row['userLogin'] . "<br>Email:  " . $row['userEmail'] .  "<br>Номер: " . $row['phone'] .  "<br>Пол: " . $row['userGender'] . "<br>Комментарий: " . $row['comment']);
     }
}
      ?>
