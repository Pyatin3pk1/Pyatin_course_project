<?php
$fullName = filter_var(trim($_POST['fullName']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);
$password1 = filter_var(trim($_POST['password1']),
FILTER_SANITIZE_STRING);
if(mb_strlen($fullName) < 5 || mb_strlen($fullName) > 90) {
echo "Недоспутимая длина логина";
exit();
}else if(mb_strlen($email) < 3 || mb_strlen($email) > 50){
echo "Недоспутимая длина логина";
exit();
}else if(mb_strlen($password) !== mb_strlen($password1) ){
echo "Пароли не совпадают";
exit();
}
$password=md5($password."dsad1213");

$mysql = new mysqli('localhost', 'root', '', 'gky');

$mysql->query("INSERT INTO `users` (`Full_Name`, `Email`, `Password`)
VALUES('$fullName', '$email', '$password')");

$mysql->close();

header('Location: ../html/index.html')
?>