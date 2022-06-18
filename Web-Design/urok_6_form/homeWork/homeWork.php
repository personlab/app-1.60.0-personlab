<?php

  function isLeapYear($year) {
    return date($year % 4 === 0);
    //return date($year % 4 === 0);
  }
  function whatDay($date) {
    //echo strftime("%a, %d/%m/%Y", strtotime($date));
    return strftime("%A", strtotime($date));
    //return date("D", time());
  }
  function daysToBD($dateBD) {
    $BirthD = explode('.', $dateBD); // explode — Разбивает строку с помощью разделителя
    // mktime — Возвращает метку времени Unix для заданной даты
    $BirthD = mktime(0, 0, 0, $BirthD[1], $BirthD[0], date('Y') + ($BirthD[1].$BirthD[0] <= date('md')));
    $days_BirthD = ceil(($BirthD - time()) / 86400); // ceil — Округляет дробь в большую сторону
    return $days_BirthD;
  }

  if (isset($_POST['userCity'], $_POST['userYear'], $_POST['userDate'], $_POST['userBirthD'])) {
  //if (isset($_POST['send'])) {
    print_r("Любимый город пользователя: " . htmlspecialchars($_POST['userCity'], ENT_QUOTES, "UTF-8") . "<br>"); // . htmlspecialchars($_POST['userYear'], ENT_QUOTES, "UTF-8")
    if (htmlspecialchars(isLeapYear($_POST['userYear'], ENT_QUOTES, "UTF-8"))) print_r("Год " . htmlspecialchars($_POST['userYear'], ENT_QUOTES, "UTF-8") . " является високосным.<br>");

    else print_r("Год " . htmlspecialchars($_POST['userYear'], ENT_QUOTES, "UTF-8") . " не является високосным.<br>");

    print_r("Дата " . htmlspecialchars($_POST['userDate'], ENT_QUOTES, "UTF-8") . " день недели: " . htmlspecialchars(whatDay($_POST['userDate'], ENT_QUOTES, "UTF-8")) . "<br>");
    print_r("До дня рождения осталось: " . htmlspecialchars(daysToBD($_POST['userBirthD'], ENT_QUOTES, "UTF-8") . " дней"));
  }

/*
  function isleap( $year )
  {
      if( $year % 4 == 0 )
          # Год високосный
          echo 'Год високосный';
      else
          # Год не високосный
          echo 'Год не високосный';
  }
  echo isleap(2000);
  */
/*
  // Установливаем русскую локаль
   // или setlocale(LC_ALL, 'ru_RU'); в PHP 4
   setlocale(LC_ALL, 'rus_RUS');
   // Получаем сегодняшнюю дату
   // Формируем вывод
   // %a - короткая запись дня недели (Чт)
   // %A - обычная запись дня недели (Четверг)
   // %Y - год полностью (2008)
   // %y - год кратко (08)
   // Короче, смотрите маны
   $data = strftime("%a, %d/%m/%Y", time());
   // В PHP4 потребуется конвертация
   // $data = iconv('ISO-8859-5','windows-1251', $data);
   echo $data; // В PHP 4 название дня недели
   // будет начинаться с заглавной буквы
   // в обычной форме записи
*/
