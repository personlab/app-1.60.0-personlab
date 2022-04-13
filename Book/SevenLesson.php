<?php
$lineBrake = "<br>";

print_r($lineBrake);
print_r($lineBrake);
print <<<HTMLBLOCK
<html>
<head><title>SevenLesson</title></head>
<body bgcolor="#fffed9">
</body>
</html>
HTMLBLOCK;


function typeOfAge($age)
{
  $lineBrake = "<br>";
  if ($age > 10  && $age < 19) {
    return "Возраст $age является подрастковым. {$lineBrake}";
  }
  return "Возраст $age не я вляется подрастковым. $lineBrake";
}

print_r(typeOfAge(5));
print_r(typeOfAge(16));

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>test</b>");
print_r($lineBrake);
print_r($lineBrake);


function typeOfAge_One($age)
{
  $lineBrake = "<br>";
  if ($age > 10  && $age < 19) {
      $str = "Поздравляю!";
    return "{$str} Возраст $age является подрастковым. {$lineBrake}";
  }
  return "Возраст $age не я вляется подрастковым. {$lineBrake}";
}

print_r(typeOfAge_One(5));
print_r(typeOfAge_One(16));

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>Out</b>");
print_r($lineBrake);
print_r($lineBrake);


function outh($login, $pass) {


  $loginUse = "Alex";
  $passUser = "1234";

  $result = "";
  $lineBrake = "<br>";
  $login === $loginUse;

  if  ($login === $loginUse && $pass === $passUser) {
    print_r("Добро пожаловать! . {$lineBrake}");
  } else {
        if ($login === $loginUse){
          $result = "Проверьте пароль . {$lineBrake}";
        }
      else $result = "Пройдите регистрацию. {$lineBrake}";
  }
  return $result;
}


print_r(outh("Alex", "1234"));
print_r(outh("Alex", "7667"));
print_r(outh("Sonya", "2322"));

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>Out второй вариант</b>");
print_r($lineBrake);
print_r($lineBrake);


function outh_1($login, $pass) {
  //$password_Use = "1!11";
  $loginUse = "Alex";
  $passUser = "1234";

  $result = "";
  $lineBrake = "<br>";
  $login === $loginUse;

  if  ($login === $loginUse && $pass === $passUser) {
    print_r("Добро пожаловать! . {$lineBrake}");
  } elseif ($login === $loginUse){
          $result = "Проверьте пароль . {$lineBrake}";
        }
      else $result = "Пройдите регистрацию. {$lineBrake}";

  return $result;
}


print_r(outh_1("Alex", "1234"));
print_r(outh_1("Alex", "7667"));
print_r(outh_1("Sonya", "2322"));

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>Получение модуля числа из отрицательного</b>");
print_r($lineBrake);
print_r($lineBrake);

function modul_43($num) {
      if ($num >= 0) {
         return $num;
    } else return -$num;
}
print_r(modul_43(-5));
print_r(modul_43(10));

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>Тернарный оператор, использовать только в логических выражениях</b>");
print_r($lineBrake);
print_r($lineBrake);

function ternar($num){
  return $num >= 0 ? $num : -$num; // знак вопроса это вопрос, это истина или вопрос
}

print_r(ternar(-5));
print_r(ternar(10));

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>switch</b>");
print_r($lineBrake);
print_r($lineBrake);

$num_1 = 3;

switch ($num_1) {
  case 1:
    $str_1 = "Winter";
    break;
    case 2:
    $str_1 = "Spring";
    break;
    case 3:
      $str_1 = "Summerr";
      break;
      case 4:
      $str_1 = "Fall";
      break;
}

print_r($str_1);
