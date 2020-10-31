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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
  <title>Главная страница</title>
</head>

<body>
  <div class="page">
    <header class="header">
      <div class="container1440">
        <div class="header__upper-menu">
          <ul class="header__upper-menu-left">
            <li><a class="mosru" href="">mos.ru</a></li>
            <li><a href="">Официальный сайт Мэра Москвы</a></li>
          </ul>
          <ul class="header__upper-menu-right">
            <li><a href="vhod.php">Войти</a></li>
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
          <a href=""><img src="images/loupe.svg" alt="search" class="loupe" width="20" height="20"></a>
        </div>

      </div>
    </header>
    <!-- slider -->

    <section class="topslider">
      <div class="topslider__list js-topslider ">
        <div class="topslider__slide">
          <div class="slider__back1 container1440">
            <div class="container topslider__slide-row">
              <div class="topslider__slide-text">
                <div class="topslider__slide-title">Забери своего <div>нового друга</div>
                </div>

              </div>
              <div class="topslider__slide-photo"></div>
            </div>
          </div>
        </div>

        <div class="topslider__slide">
          <div class="slider__back2 container1440">
            <div class="container topslider__slide-row">
              <div class="topslider__slide-text">
                <div class="topslider__slide-title">Наши сердца <div>в ваших руках</div>
                </div>

              </div>
              <div class="topslider__slide-photo"><img src="images/slider/slide-2.jpg" alt=""></div>
            </div>
          </div>
        </div>

        <div class="topslider__slide">
          <div class="slider__back3 container1440">
            <div class="container topslider__slide-row">
              <div class="topslider__slide-text">
                <div class="topslider__slide-title">Будь в ответе за тех <div>кого приручил</div>
                </div>
                
              </div>
              <div class="topslider__slide-photo"><img src="images/slider/slide-3.jpg" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- END slider -->

    <section class="animals">
      <div class="container">
        <div class="animals__icons">
          <div class="row">
<?php
$a = 0;
$mysql = new mysqli('localhost','root','root','animals');

$result2 = $mysql->query("SELECT * FROM `animal`");
if (mysqli_num_rows($result2) > 0); {
  $animal = mysqli_fetch_array($result2);
  do {

  $a = $a + 1;
$_GET[$a];
echo '
            <div class="col-4">
              <div class="card mb-4 " style="width: 18rem;">
                <img src='.$animal["img"].' class="card-img-top" alt="..." width="200" height="200">
                <div class="card-body">
                  <h5 class="card-title">'.$animal["name"].'</h5>
                  <p class="card-text">Возраст:'.$animal["year"].' </p>
                  <p class="card-text">Порода:'.$animal["poroda"].' </p>
                  <p class="card-text">Размер: '.$animal["razmer"].' </p>

                  <a href="card.php?id='.$animal["id"].'" class="animals__icons-btn ml-3">Подробнее</a>


                  <a href="application.php?id='.$animal["id"].'" class="animals__icons-btn ml-3">Оформить заявку</a>
                </div>
              </div>
            </div>
            ';
            }
            while ($animal = mysqli_fetch_array($result2));
          }
?>

          </div>


        </div>
      </div>
    </section>
    <section class="map">
      <div class="container ">
        <h2>Наши приюты: </h2>
        <div class="map__priut">
          <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab1270aea37a325d0515590fc03dd8854340e38cc3be42a3cd406a758775e48f2&amp;width=1140&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
      </div>
    </section>


  </div>





  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
