<?php
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);
$password=md5($password."dsad1213");
$mysql = new mysqli('localhost', 'root', '', 'gky');
$result = $mysql -> query("SELECT * FROM `users` WHERE `Email`= 
'$email' AND `Password` = '$password'");
$user = $result -> fetch_assoc();
if(count($user) == 0) {
echo "Неверно введён email или пароль";
exit();
}
setcookie('user', $user['name'], time() + 3600, "/");
$mysql->close();
header('Location: ../html/index.html')
?>