<?php

$servernameFour = $_GET['servernameFour'];
$LoginHostFour = $_GET['loginHostFour'];
$PasswordHostFour = $_GET['passwordHostFour'];
$nameDatabaseFour = $_GET['nameDatabaseFour'];
$nameTableFour = $_GET['nameTableFour'];

/////
$userFirstNameFour = $_GET['nameFour'];
$userLastNameFour = $_GET['surNameFour'];
$userLoginFour = $_GET['loginFour'];
$userEmailFour = $_GET['emailFour'];
$userPhoneFour = $_GET['phoneFour'];
$userDateFour = $_GET['dateFour'];
$userGenderFour = $_GET['userGenderFour'];
$userPasswordFour = $_GET['passwdFour'];
$userMassegeFour = $_GET['userMessageFour'];

// Create connection
$conn = new mysqli($servernameFour, $LoginHostFour, $PasswordHostFour, $nameDatabaseFour);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE `$nameTableFour` (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`$userFirstNameFour` VARCHAR(30) NOT NULL, `$userLastNameFour` VARCHAR(30) NOT NULL,
`$userLoginFour` VARCHAR(50), `$userEmailFour` VARCHAR(50), `$userPhoneFour` VARCHAR(50), `$userDateFour` TIMESTAMP, 
`$userGenderFour` VARCHAR(20), `$userPasswordFour` VARCHAR(256), `$userMassegeFour` VARCHAR(256))";

if ($conn->query($sql) === TRUE) {
    print_r("Таблица создана успешно<br><br>");
	print_r("Через 5 сек. Вы автоматически отправитесь на форму регистрации.");
    Header("Refresh: 5; registration.html");
} else {
    print_r("Error creating table: " . $conn->error);
}
