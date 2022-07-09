<?php

htmlspecialchars($_SERVER['PHP_SELF']);
session_start();
setcookie(time()+160);
// ob_get_clean();
/* Задаем переменные */
if ($_POST['submit']) {

} else {
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$header = htmlspecialchars($_POST['header']);
$message = htmlspecialchars($_POST['message']);
$captcha = trim(htmlspecialchars($_POST["captcha"]));
// $tel = htmlspecialchars($_POST["tel"]);
// $website = htmlspecialchars($_POST["website"]);

/* Ваш адрес и тема сообщения */
$address = "yuriy.baragin@gmail.com";
$sub = "Сообщение с сайта YuriyBaragin_Personal_Portfolio";

/* Формат письма */
$mes = "Сообщение с сайта YuriyBaragin_Personal_Portfolio.\n
Имя отправителя: $name
Электронный адрес отправителя: $email
Текст сообщения:
$message";




      if(($_SESSION["rand"] != $captcha) && ($_SESSION["rand"] != "")) {
           //Если капча не передана либо оно является пустой
           print_r("<p'><strong><h2>Ошибка!</h2></strong> <h3>Вы ввели неправильную капчу</h3> </p><br><h2>Письмо не отправлено</h2><br>");
           print_r("<h3>Через 5 сек. Вы автоматически вернётесь.</h3>");
           Header("Refresh: 5; URL=https://shopmaster.info/YuriyBaragin_Personal_Portfolio/Profile/");
           } else {
             /* Отправляем сообщение, используя mail() функцию */
             $from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
             $send = mail($address, $sub, $mes, $from);
             if ($send === rtue) {

             } else {
           print_r("<p'><h2>Письмо отправлено<br>Благодарю!</h2></p><h3>С уважением, Юрий</h3>");
        }
    }
}
