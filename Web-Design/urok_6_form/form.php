<?php
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
