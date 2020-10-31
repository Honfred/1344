<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost','root','root','animals');

$result = $mysql->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
$students = $result->fetch_assoc();
if(count($students) == 0) {
	echo "Логин или пароль введен неправильно";
	exit();
}
setcookie('students', $students['login'], time() + 3600, "/");
setcookie('password', $students['password'], time() + 3600, "/");

$mysql->close();
header('Location: /хакатон/admin.php ');
exit();
?>
