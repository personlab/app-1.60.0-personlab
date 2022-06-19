<?php

function checkInput($text) {
  $text = trim($text);
  $text = stripcslashes($text);
  $text = htmlspecialchars($text);
  return $text;
}

$nameErr = $emailErr = $genderErr = "";  // ощищает поля ввода при вводе данных
$name = $email = $gender = $message = "";

if (empty($_POST['userName'])) {
  $nameErr = "Введите имя";
} else {
  $name = checkInput($_POST['userName']);
  if (!preg_match("/^(([a-zA-Z' -]{1,40})|([а-яА-Я' -]{1,40}))$/u", $name)) {
    $nameErr = "Русские или английские буквы, пробел и дефис если есть. Ваше имя:  ";
  }
}

if (empty($_POST['userEmail'])) {
  $emailErr = "Введите e-mail";
} else {
  $email = checkInput($_POST['userEmail']);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Введите корректный email. Ваш email:  ";
  }
}

if (empty($_POST['userGender'])) {
  $genderErr = "Выберите пол";
} else {
  $gender = checkInput($_POST['userGender']);
}
$message = checkInput($_POST['userMessage']);

/*
 if (isset($_POST['userName'], $_POST['userEmail'], $_POST['userMessage'])) {
        print_r("Имя: " . htmlspecialchars($_POST['userName'], ENT_QUOTES, "UTF-8"));
        print_r("<br>Email: " . htmlspecialchars($_POST['userEmail'], ENT_QUOTES, "UTF-8"));
        print_r("<br>Комментарий: " . htmlspecialchars($_POST['userMessage'], ENT_QUOTES, "UTF-8"));
        // Для отправки файла
        $file = $_FILES['userFoto'];
        print_r("<br>Загружен файл с именем " . $file['name'] . " и размером " . $file['size'] . " байт ");
}


   $current_path = $_FILES['userFoto']['tmp_name'];  // полный путь к файлу внутри временного хранилища
   $fileName = $_FILES['userFoto']['name']; // имя загруженного файла
   $new_path = dirname(__FILE__) . '/uploads/' . $fileName; // формируем путь внутри нашего проекта

   move_uploaded_file($current_path, $new_path); // перемещаем файл из временного хранилища в папку
*/

/*
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (empty($_POST['userName'])) {
      $nameErr = "Введите имя";
  } else {
    $name = checkInput($_POST['userName']);
  }
}
*/
