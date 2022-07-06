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
    <form class = "userForm" method = "POST" action = "formResultUpdate.php">
      <?php
        include 'formResultUpdate.php';
        ?>
        <br>
        <br>
      <p><span>Ваше имя:  <span class = "error"><?php echo $userBD_1; ?></span></span></p>
      <br>
      <p><span>Фамилия:  <span class = "error"><?php echo $surtName_1; ?></span></span></p>
      <br>
      <p><span>Ваш Login:  <span class = "error"><?php echo $login_1; ?></span></span></p>
      <br>
      <p><span>Ваше Email:  <span class = "error"><?php echo $email_1; ?></span></span></p>
      <br>
      <p><span>Ваш номер:  <span class = "error"><?php echo $phone_1; ?></span></span></p>
      <br>
      <p><span>Ваш пол:  <span class = "error"><?php echo $gender_1; ?></span></span></p>
      <br>

      <br>
      <br>
      <a href="registration.html">
        <span>Ввести данные</span>
        <span>снова</span></a>
    </form>
</body>
</html>
