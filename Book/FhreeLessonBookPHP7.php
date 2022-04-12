<?php
print_r("Hello World");
$lineBrake = "<br>";

print_r($lineBrake);
print_r($lineBrake);
print <<<HTMLBLOCK
<html>
<head><title>ThreeLesson</title></head>
<body bgcolor="#fffed9">
</body>
</html>
HTMLBLOCK;

print_r("<b>3.1 - 3.2. Принятие решения с помощью языковой конструкции if()</b>");
print_r($lineBrake);
print_r($lineBrake);

print_r("This is always printed. $lineBrake");
if (strcasecmp($_POST['logged_in'], 'president@whitehouse.gov') === 0) {

print_r("Welcome aboard, trusted user. $lineBrake");
print 'это появляется только тогда когда истина if $logged_in is true.';
//print_r(substr($_POST['logged_in'], 0, 8));

}
print "This is also always printed.";
print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your Password: <input type="text" name="logged_in" />
<br/>
<button type="submit">Say Go</button>
</form>
_HTML_;

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.3. Применение предложения else в условном операторе if()</b>");
print_r($lineBrake);
print_r($lineBrake);

if (strcasecmp($_POST['logged_in_One'], 'president@whitehouse.gov') === 0) {

print_r("Welcome aboard, trusted user. $lineBrake");
print 'это появляется только тогда когда истина if $logged_in_One is true.';
//print_r(substr($_POST['logged_in'], 0, 8));

} else {
print_r("Howdy, stranger.");
print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your Password: <input type="text" name="logged_in_One" />
<br/>
<button type="submit">Say Go</button>
</form>
_HTML_;
}

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.4. Применение языковой конструкции elseif()</b>");
print_r($lineBrake);
print_r($lineBrake);


$emergency  = $new_message = $_POST;

if (strcasecmp($_POST['logged_in_Twuo'], 'president@whitehouse.gov') === 0) {

print_r("Welcome aboard, trusted user. $lineBrake");
print 'это появляется только тогда когда истина if $logged_in_One is true.';
} elseif ($new_message) {
  print_r("Dear stranger, there are new messages. $lineBrake");
} elseif ($emergency) { /// уточнить по вопросу второго перехода, не переходит.
  print_r("Stranger, there are no new messages, but there is an emergency.");
}
print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your Password: <input type="text" name="logged_in_Twuo" />
<br/>
<button type="submit">Say Go</button>
</form>
_HTML_;

print_r($lineBrake);
print_r($lineBrake);
print_r("<b>3.5 Сочетание условных операторов else и elseif()</b>");
print_r($lineBrake);
print_r($lineBrake);

$new_messages_1 = $_POST;
if (strcasecmp($_POST['logged_in_Three'], 'president@whitehouse.gov') === 0) {

print_r("Welcome aboard, trusted user. $lineBrake");
print 'это появляется только тогда когда истина if $logged_in_One is true.';
} elseif ($new_messages_1) {
// Следующая строка кода выполняется, если проверочное
// условие $logged_in ложно, но проверочное условие
// $new_messages истинно
print "Dear stranger, there are new messages.";
} else { // не работает
// Следующая строка кода выполняется, если все проверочные
// условия, $logged_in, $new_messages и $emergency, ложны
print "I don't know you, you have no messages,
and there's no emergency.";
}
print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your Password: <input type="text" name="logged_in_Three" />
<br/>
<button type="submit">Say Go</button>
</form>
_HTML_;
