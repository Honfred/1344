<?php
$mail = filter_var(trim($_POST['mail']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$second_name = filter_var(trim($_POST['second_name']),
FILTER_SANITIZE_STRING);
$adres = filter_var(trim($_POST['adres']),
FILTER_SANITIZE_STRING);
$nomer = filter_var(trim($_POST['nomer']),
FILTER_SANITIZE_STRING);






$id_anim = isset($_GET['id']);

	$mysql = new mysqli('localhost','root','root','animals');
	$mysql->query("INSERT INTO `applic` (`mail`, `name`, `second_name`, `adres`, `nomer`, `id_anim`)
  VALUES ('$mail', '$name', '$second_name', '$adres', '$nomer', '$id_anim');");
	$mysql->close();
header('Location: /хакатон/');
exit();
?>
