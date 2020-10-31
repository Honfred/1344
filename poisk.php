<?php
$poisk = filter_var(trim($_POST['poisk']),
FILTER_SANITIZE_STRING);
$mysql = new mysqli('localhost','root','root','animals');
$result = $mysql->query("SELECT * FROM `animal` WHERE `id`=$poisk ");
if (mysqli_num_rows($result) > 0);
	{
$animal = mysqli_fetch_array($result);
do {
  echo '
  <div class="animal-rows">
    <div class="container">
      <div class="animal-rows__row">
        <div class="animal-rows__info">
          <div class="animal-rows__infos">
            <p>ID животного: '.$animal["id"].'</p>
            <p>Номер вольера:'.$animal["voler"].' </p>
            <p>Кличка:'.$animal["name"].' </p>
          </div>
          <div class="animal-rows__button-more">
            <a href="#" class="btns-admin-search row-btn">Просмотреть</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  ';
  }
  while ($animal = mysqli_fetch_array($result));

  }
?>
