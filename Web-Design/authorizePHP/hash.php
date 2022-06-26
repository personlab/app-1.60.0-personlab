<?php
   $password = "123456789";
   $hash = password_hash($password, PASSWORD_BCRYPT);

    var_dump($hash);
   // if (password_verify($password, $hash)) {
   //   print_r("Пароль правильный");
   // } else {
   //   print_r("Пароль неправильный");
   // }

 ?>
