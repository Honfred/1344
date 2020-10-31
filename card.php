<?php
$mysql = new mysqli('localhost','root','root','animals');
$id = isset($_GET['id']) ? $_GET['id']: false;
if ($id ) {
	$result = $mysql->query("SELECT * FROM `animal` WHERE `id` = $id ");
}

$result1 = $mysql->query("SELECT * FROM `priuty` WHERE `id` = '1' ");


if (mysqli_num_rows($result) > 0 and (mysqli_num_rows($result1) > 0));
	{
$priuty = mysqli_fetch_array($result1	);
$animal = mysqli_fetch_array($result);
do {
  echo '














<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/slick.css" rel="stylesheet">
  <link href="css/jquery.fancybox.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
  <title>Главная страница</title>
</head>

<body>
  <div class="page">
    <header class="header">
      <div class="header__upper-menu">
        <ul class="header__upper-menu-left">
          <li><a class="mosru" href="">mos.ru</a></li>
          <li><a href="">Официальный сайт Мэра Москвы</a></li>
        </ul>
        <ul class="header__upper-menu-right">
          <li><a href="">Войти</a></li>
          <li><a href="">Обратная связь</a></li>
        </ul>
      </div>
      <div class="header__bottom-menu">
        <ul class="header__bottom-menu-left">
          <li><a href="">Новости</a></li>
          <li><a href="">Афиша</a></li>
          <li><a href="">Услуги</a></li>
          <li><a href="">Мэр</a></li>
          <li><a href="">Власть</a></li>
          <li><a href="">Карта</a></li>
          <li><a href="">Мой район</a></li>
          <li><a href="">Животные</a></li>
        </ul>
        <img src="images/loupe.svg" alt="search" class="loupe" width="20" hidden="20">
      </div>
    </header>

    <div class="container">
      <div class="card">
        <div class="card__top">
          <p class="card__top-head">Карточка учета животного №</p>
          <div class="card__top-date">
            <p>г. Москва</p>
            <p>«»20 г.</p>
          </div>
					<p>Название приюта:'.$priuty["name_priut"].' </p>
          <p>Приют для животных по адресу:'.$priuty["adress"].' </p>
          <p>Экплуатирующая организация:'.$priuty["org"].' </p>
          <p>Номер вольера:'.$animal["voler"].' </p>
          <p class="card__top-data">Основные сведения: </p>
        </div>
        <div class="card__data">
          <img src="'.$animal["img"].'" alt="Фото животного" width="350" height="300">
          <div class="card__data-info">
            <div class="card__data-flex">
              <p>Вид животного:'.$animal["vid"].' </p>
              <p>Вес:'.$animal["ves"].' </p>
              <p>Рост:'.$animal["rost"].' </p>
            </div>
            <div class="card__data-flex">
              <p>Кличка: '.$animal["name"].' </p>
              <p>Пол: '.$animal["pol"].' </p>
            </div>
            <div class="card__data-flex">
              <p>Порода:'.$animal["poroda"].' </p>
              <p>Окрас: '.$animal["okras"].' </p>
            </div>
            <div class="card__data-flex">
              <p>Шерсть: '.$animal["sherst"].' </p>
              <p>Уши: '.$animal["yxo"].' </p>
            </div>
            <div class="card__data-flex">
              <p>Хвост: '.$animal["hwost"].' </p>
              <p>Размер: '.$animal["razmer"].' </p>
            </div>
              <p>Особые приметы: '.$animal["primeti"].' </p>
              <p>Характер: '.$animal["haracter"].' </p>
          </div>
        </div>
        <div class="card__data-info-2">
          <p>Идентификационная метка:'.$animal["metka"].'</p>
          <p>Дата стерилизации: '.$animal["data_sterl"].'</p>
        </div>
      </div>
    </div>



  </div>







  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>

';
}
while ($animal = mysqli_fetch_array($result));
while ($priuty = mysqli_fetch_array($result1));
}

?>
