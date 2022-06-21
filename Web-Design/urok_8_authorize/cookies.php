<?php
  $visitCount = 0;

  if (isset($_COOKIE['visitCount'])) {
    $visitCount = $_COOKIE['visitCount'] + 1;
  }

  //setcookie("visitCount", $visitCount, strtotime("+30 days"));
  setcookie("visitCount", $visitCount, time()+3600);
  print_r("Вы посетили эту страницу " . $visitCount . " раз");
