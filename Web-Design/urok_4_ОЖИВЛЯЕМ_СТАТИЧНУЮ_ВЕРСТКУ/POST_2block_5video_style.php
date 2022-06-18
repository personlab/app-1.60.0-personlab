<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="POST_2block_5video_style.css">
  <title>Оживляем статическую верстку 14_1</title>
</head>
<body>
  <?php
    include 'template.php';
    ?>
  <form method = "POST" class = "inputBox">

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name = "title" required = "required"><span>First Name</span></p>
        <p>&nbsp;&nbsp;&nbsp;<input name = "content" required = "required"><span>Last Name</span></p>
        <button name = "form">
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Отправить</span>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Отправить</span>
        </button>
        <!--<p><button name = "form">Отправить!</button></p>-->


    <!-- <input name = "text" required = "required">
     <span>First Name</span>
     <input name = "text" required = "required">
     <span>Last Name</span>
    <p><button name = "form">Отправить!</button></p>-->
  </form>
</body>
</html>
