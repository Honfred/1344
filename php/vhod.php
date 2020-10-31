<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost','root','root','animals');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
	echo "Логин или пароль введен неправильно";
	exit();
}
setcookie('user', $user['login'], time() + 3600, "/");





$mysql->close();
header('Location: /хакатон/admin');
exit();
?>
