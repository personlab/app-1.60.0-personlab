<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="formResult.css">
  <title>Result</title>
</head>
<body>
  <?php
    include 'form.php';
    ?>
    <form class = "userForm" method = "POST" action = "formResult.php">
      <p><span>Ваше имя: <span class = "error"><?php echo ($nameErr . " "); echo $name; ?></span></span></p>
      <br>
      <p><span>Ваш логин: <span class = "error"><?php echo ($loginErr . " "); echo $login; ?></span></span></p>
      <br>
      <p><span>Ваш e-mail: <span class = "error"><?php echo ($emailErr . " "); echo $email; ?></span></span></p>
      <br>
      <p><span>Ваш пароль: <span class = "error"><?php echo ($passwordErr . " "); echo $password; ?></span></span></p>
      <br>
      <p><span>Ваш пол:<br><span class = "error"><?php echo $genderErr; echo $gender; ?></span></span></p>
      <br>
      <p><span>Ваш комментарий:<br><?php echo $message; ?></span></p>
      <br>
      <p><span><?php print_r("<br>Загружен файл с именем " . $file['name'] . " и размером " . $file['size'] . " байт "); ?></span></p>
      <br>
      <br>
      <a href="http://localhost/urok_7_form/homeWork_7/form.html">
        <span>Ввести данные</span>
        <span>снова</span></a>
    </form>
</body>
</html>
