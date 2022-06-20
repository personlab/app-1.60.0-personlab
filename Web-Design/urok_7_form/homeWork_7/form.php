<?php

function checkInput($text) {
  $text = trim($text);
  $text = stripcslashes($text);
  $text = htmlspecialchars($text);
  return $text;
}

$nameErr = $loginErr = $emailErr = $passwordErr = $genderErr = "";  // ощищает поля ввода при вводе данных
$name = $login = $email = $password = $gender = $message = "";

// Для отправки файла
$file = $_FILES['userFoto'];
//print_r("<br>Загружен файл с именем " . $file['name'] . " и размером " . $file['size'] . " байт ");

$current_path = $_FILES['userFoto']['tmp_name'];  // полный путь к файлу внутри временного хранилища
$fileName = $_FILES['userFoto']['name']; // имя загруженного файла
$new_path = dirname(__FILE__) . '/uploads/' . $fileName; // формируем путь внутри нашего проекта

move_uploaded_file($current_path, $new_path); // перемещаем файл из временного хранилища в папку

if (empty($_POST['userName'])) {
  $nameErr = "Введите имя";
} else {
  $name = checkInput($_POST['userName']);
  if (!preg_match("/^(([a-zA-Z' -]{1,40})|([а-яА-Я' -]{1,40}))$/u", $name)) {
    $nameErr = "Введите корректное имя.<br>Русские или английские буквы, пробел, знаки ' или -.<br>Ваше имя:  ";
  }
}

if (empty($_POST['userLogin'])) {
  $loginErr = "Введите логин";
} else {
  $login = checkInput($_POST['userLogin']);
  if (!preg_match("/^([a-zA-Z0-9-'_]{2,20})$/u", $login)) {
    $loginErr = "Введите корректный логин.<br>Русские или английские буквы, цифры и знаки - ' _.<br>Ваш логин:  ";
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

if (empty($_POST['userPassword'])) {
  $passwordErr = "Введите пароль";
} else {
  $password = checkInput($_POST['userPassword']);
  if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{7,}$/u", $password)) {
    $passwordErr = "Введите корректный пароль. Длиной не менее 7 символов,
    включает латинские буквы верхнего и нижнего регистра, цифры и спец.символы.<br>Ваш пароль:  ";
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
if ($_SERVER['REQUEST_METHOD'] === "POST") {  // эту строчку добавляем если у нас скрипт php  на одной странице с html
    if (empty($_POST['userName'])) {
      $nameErr = "Введите имя";
  } else {
    $name = checkInput($_POST['userName']);
  }
}
*/
/*
<!--<?php
$regexp = "/к[а-яё]т/ui";

// строки, к которым мы будем по очереди применять регулярку
$lines = [
  'рыжий кот',
  'рыжий крот',
  'кит и кот'
];

foreach ($lines as $line) {
    echo "Строка: $line\n";

    // сюда будет помещено первое
    // совпадение с шаблоном
    $match = [];
    if (preg_match($regexp, $line, $match)) {
        echo "+ Найдено слово '{$match[0]}'\n";
    } else {
        echo "- Ничего не найдено\n";
    }
}
?>-->
*/
