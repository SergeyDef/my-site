<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="SergiuszDef">
    <meta http-equiv="content-language" content="ru">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- slaider -->
  <link rel="stylesheet" href="../css/magnific-popup.css">

  <link rel="stylesheet" href="../css/font-awesome.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  
  <link rel='stylesheet' href='../css/css.css'>

  <link rel="stylesheet" href="../css/animate.min.css">


    <script src="../js/jquery.min.js" type="text/javascript"></script>

    <script src="../js/magnific-popup.js" type="text/javascript"></script>

    <script>
      $(window).ready(function () {
        $(".zoomIn").hide(1000);
        $(".zoomIn").show(4000);
      });
    </script>

  <title>Наши контакты</title>
</head>
  <body>
    <!-- header site -->
 <?php
  require_once '../tpl/head.php';
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="art_map col-md-12">
        <div class="pointer zoomIn">
          <h6>Москвички</h6>
          <span class="street">Сеславинская улица</span>
          <br />
          <span class="house_number">8</span>
          <div class="triangle"></div>
        </div>
        <div class="shadow_map">
          <img src="../img/map.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 separator">
          <hr />
      </div>
    </div>
  </div>

  <div class="container-fluid"> <!-- content -->
    <div class="row address_and_map">
      <div class="col-md-12">
        <div class="heading head_contacts">
          <h2>Наши контакты</h2>
        </div>

        <div class="container">
          <form class="row form_cont" action="../mail/mail.php" method="post">
            <div class="col-md-4 form_contacts">
              <label class="form_lebel" for="name_contact">Ваше имя:</label>
              <input type="text" id="name_contact" required name="first_name">
            </div>
            <div class="col-md-4 form_contacts">
              <label class="form_lebel" for="phone">Номер телефона:</label>
              <input type="text" id="phone_contact" required name="phone">
            </div>
            <div class="col-md-4 form_contacts">
              <label class="form_lebel" for="email_contact">Email:</label>
              <input type="text" id="email_contact" required name="email">
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="besides">Укажите цель вашего сообщения</label>
                <textarea name="message" id="besides" cols="50" rows="10" required></textarea>
                <div class="row">
                  <div class="col-md-8 check">
                    <span>согласие на обработку персональных данных</span>
                    <span>
                      <input type="checkbox" checked="checked" name="" id="">
                    </span>
                  </div>
                  <div class="button_contacts col-md-4">
                    <button class="btn btn-default sending" name="submit" value="Submit">Отправить</button>
                  </div>
                </div>   
              </div>
            </div>
          </form>

                  <div class="row"> <!-- direction -->
                    <div class="col-md-5">

                      <div class="row list_contact">
                        <div class="social col-md-12">
                          <a href="#"><img src="../img/icon/vk.svg" alt="VK"></a>
                          <a href="#"><img src="../img/icon/facebook.svg" alt="Facebook"></a>
                          <a href="#"><img src="../img/icon/instagram.svg" alt="Instagram"></a>
                          <a href="#"><img src="../img/icon/mail.svg" alt="Mail"></a>
                        </div>
                        <div class="col-md-5 contact_interaction">
                          <span class="contact_name">Тел.:</span>
                          <span>8 (915) 390-99-15</span>
                        </div>
                        <div class="col-md-7 contact_interaction">
                          <span class="contact_name">E-mail:</span> 
                          <span>luchkinshad@yandex.ru</span>
                        </div>
                        <div class="col-md-12 contact_direction">
                           <span class="contact_name">Адрес:</span>
                           <span>Сеславинская улица, дом 8</span>
                        </div>
                      </div>
                    </div>
    
                    <div class="col-md-7">
                      <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A03f9095af37dc023ca6046ab05fec6e843733582353195de22865bc3b90667a9&amp;source=constructor" frameborder="0" class="card_contacts"></iframe>
                    </div>
                  </div><!-- direction -->
                </div> <!-- content -->

      </div>
    </div>
  </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>