<?php

$today_S = date("H:i:s");

    switch ($today_S) {
          case $today_S >= 6 && $today_S <= 11:
          $str_1_2 = "<b>Доброе утро, </b>";
          break;
          case $today_S >= 12 && $today_S <= 17:
          $str_1_2 = "<b>Добрый день, </b>";
          break;
          case $today_S >= 18 && $today_S <= 23:
          $str_1_2 = "<b>Добрый вечер,</b>";
          break;
          case $today_S >= 00 && $today_S <= 5:
          $str_1_2 = "<b>Доброй ночи,</b>";
          break;
    }


echo $str_1_2;
