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
    <form class = "userForm" method = "POST" action = "visionResult.php">
      <?php
        include 'visionResult.php';
        ?>

      <br>
      <br>
      <a href="registration.php">
        <span>Ввести данные</span>
        <span>снова</span></a>
    </form>
</body>
</html>
