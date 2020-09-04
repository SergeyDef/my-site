<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="SergiuszDef">
    <meta http-equiv="content-language" content="ru">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<!-- Markiz de Sad script -->
   <link href="http://allfont.ru/allfont.css?fonts=markiz-de-sad-script" rel="stylesheet" type="text/css" />

  <!-- slaider -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- progress-bar -->
  <link rel='stylesheet' href='css/progress-bar.css'>

  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  
  <link rel='stylesheet' href='css/css.css'>


    <script src="js/jquery.min.js" type="text/javascript"></script>

    <script src="js/magnific-popup.js" type="text/javascript"></script>

   <!--  <script src="js/transfer-form.js" type="text/javascript"></script>
 -->
  <title>Ансамбль барабанщиц</title>
</head>
  <body>
    <!-- header site -->
    <header class="container-fluid">
      <div class="row">
        <div class="navbar navbar-default menu_block">
          <div class="container-fluid"> 
            <div class="navbar-header .col-lg-3 col-md-3 .col-sm-3">
              <a href="index.php" class="link_site">
                <img src="img/logo.svg" class="muscovites" alt="logotype">
              </a>
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#res-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
               </button>
            </div>
            <nav class="collapse navbar-collapse menu .col-lg-7 col-md-7 .col-sm-7" id="res-menu">
                <ul class="nav navbar-nav menu_item">
                  <li>
                    <a href="index.php" class="a_item">О нас</a>
                  </li>
                  <li>                    
                    <a href="pages/school.php">Школа</a></li>
                  <li>
                    <a href="pages/passage.php">Галерея</a>
                  </li>
                  <li>
                    <a href="pages/contacts.php">Контакты</a>
                  </li>
                </ul>
              </nav>

              <div class="contact navbar-header .col-lg-2 col-md-2 .col-sm-2">
                <div class="contact_block"> <!-- contact_block -->
                  <div class="phone_block phones">
                   <span class="phone">+7 (915)390-99-15</span>
                  </div>
                  <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $('.popup-with-form').magnificPopup({
                         type: 'inline',
                         focus: '#name'
                      });
                    });
                  </script>
                  <div class="callback phones">
                    <a href="#form-popup" class="popup-with-form">Заказать обратный звонок</a>
                  </div>
                  <ul class="network">
                   <li>
                    <a href="">
                      <img src="img/icon/vk.svg" alt="VK" class="network_img">
                    </a>
                    </li>
                    <li>
                      <a href="">
                        <img src="img/icon/facebook.svg" alt="facebook" class="network_img">
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <img src="img/icon/instagram.svg" alt="instagram" class="network_img">
                      </a>
                    </li>
                   <li>
                    <a href="">
                      <img src="img/icon/mail.svg" alt="mail" class="network_mail">
                    </a>
                  </li>
                 </ul>
              </div> <!-- contact_block -->

              <div id="form-popup" class="white-popup mfp-hide">
                <div class="container_modal_form">
                  <buttom title="Close (Esc)" type="button" class="mfp-close close_form">X</buttom>
                  <form action="mail/form.php" method="post" class="modal_form">
                    <fieldset class="modal_form_line">
                      <div class="call_back">
                        <h6>Оставьте заявку и мы перезвоним Вам!</h6>
                      </div>
                      <div class="modal_form_elem">
                        <label for="name_modal" class="form_name">Имя</label>
                        <input id="name_modal" class="inputbox" type="text" name="name" placeholder="Ваше имя" />
                      </div>
                      <div class="modal_form_elem">
                        <label for="phone_modal" class="form_name">Телефон</label>
                        <input id="phone_modal" class="inputbox" type="text" name="phone" placeholder="Ваш номер телефона" />
                      </div>
                      <div>
                        <button class="btn btn-default modal_form_btn" name="submit">Отправить</button>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>

          </div> <!-- container -->
        </div> <!-- menu_block -->
        
      </div>
    </header>
    <!-- slider -->
        <div class="">
          <div class="container-fluid slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="row">
                  <div class="col-md-12 slider_img">
                    <div class="slider_img">
                      <img src="img/slide/slide12.png" alt="slide1.2">
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="item">
               <div class="row">
                  <div class="col-md-12">
                    <div class="slider_img">
                      <img src="img/slide/slide12.png" alt="slide1.2">
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="item">
               <div class="row">
                  <div class="col-md-12 ">
                    <div class="slider_img">
                      <img src="img/slide/slide12.png" alt="slide1.2">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Controls -->
          </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <content class="content col-md-12">
              <section>
                <div class="heading">
                  <h2>Почему именно мы?</h2>
                </div>
                <div class="history">
                  <p>Ансамбль барабанщиц "Москвички" основан в 1986 году и имеет огромный опыт работы.</p>
                  <p>Ансамбль работает  на мероприятиях различного маштаба</p> 
                  <p>от свабед и выписок из Роддомов, до Кремля, учавствует в съемках фильмов.</p> 
                  <p>В арсенале ансамбля имеется большое колличество различных номеров на любой вкус, а</p>
                  <p>так же ансамбль может выступать под Вашу музыку!</p>
                </div>
                <script type="text/javascript">
                  // Type Iframe - видео Youtube (или Vimeo), карты Гугл или другой контент в iframe 
                   jQuery(document).ready(function($) {
                     $('.popup-youtube').magnificPopup({ 
                        type: 'iframe' 
                     });
                  });
                </script>
                <div class="video">
                  <a href="https://www.youtube.com/watch?v=cSwwRrOoQog" class="popup-youtube">
                    <img src="img/video.png" alt="video">
                  </a>
                </div>
              </section>

              <script type="text/javascript">
                  // Image - галерея картинок
                  jQuery(document).ready(function($) {
                    $('.popup-gallery').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    tLoading: 'Загрузка изображения #%curr%...',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                    }
                    });
                  });
              </script>

              <section class="popup-gallery">
                <div class="heading">
                  <h2>Наши костюмы</h2>
                </div>
               <div class="gallery">
                 <div class="gallery_title">
                   <h3>«Красный Октябрь»</h3>
                   <div class="gallery_img">
                    <a href="img/gallery/gallery_slayd/4.jpg">
                      <img src="img/gallery/gallery1.png" alt="">
                    </a>
                  </div>
                 </div>
               </div>
               <div class="gallery">
                 <div class="gallery_title">
                   <h3>«Красный Октябрь»</h3>
                   <div class="gallery_img">
                    <a href="img/gallery/gallery_slayd/1.jpg">
                      <img src="img/gallery/gallery2.png" alt="">
                    </a>
                  </div>
                 </div>
               </div>
               <div class="gallery">
                 <div class="gallery_title">
                   <h3>«Красный Октябрь»</h3>
                   <div class="gallery_img">
                    <a href="img/gallery/gallery_slayd/2.jpg">
                      <img src="img/gallery/gallery3.png" alt="">
                    </a>
                  </div>
                 </div>
               </div>
               <div class="gallery">
                 <div class="gallery_title">
                   <h3>«Красный Октябрь»</h3>
                   <div class="gallery_img">
                    <a href="img/gallery/gallery_slayd/3.jpg">
                      <img src="img/gallery/gallery4.png" alt="">
                    </a>
                  </div>
                 </div>
               </div>
               <div class="gallery">
                 <div class="gallery_title">
                   <h3>«Красный Октябрь»</h3>
                   <div class="gallery_img">
                    <a href="img/gallery/gallery_slayd/5.jpg">
                      <img src="img/gallery/gallery5.png" alt="">
                    </a>
                  </div>
                 </div>
               </div>
               <div class="gallery">
                 <div class="gallery_title">
                   <h3>«Красный Октябрь»</h3>
                   <div class="gallery_img">
                    <a href="img/gallery/gallery_slayd/6.jpg">
                      <img src="img/gallery/gallery6.png" alt="">
                    </a>
                  </div>
                 </div>
               </div>
              </section>
              
            </content> <!-- content -->
          
        <div class="container-fluid">
          <div class="row">
            <footer class="col-md-12 footer">
              <div class="heading">
                  <h2>Как с нами связаться</h2>
                </div>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form action="mail/mail2.php" method="post" id="feedback" class="form">
                      <fieldset class="form_line">
                        <div class="form_title">
                          <h4>Оставьсте заявку и мы<br />перезвоним вам в течение часа</h4>
                        </div>
                        <ul class="form_list">
                          <li>
                            <label class="form_lebel" for="first_name">Ваше имя</label>
                              <input type="text" name="first_name" value="" class="form-control" id="first_name">
                          </li>
                          <li>
                            <label class="form_lebel" for="phone_number">Номер телефона</label>
                              <input type="text" name="phone_number" value="" class="form-control" id="phone_number">
                          </li>
                          <li>
                            <button class="btn btn-default send" name="submit">Отправить</button>
                          </li>
                        </ul>
                      </fieldset>
                    </form>

                  </div>
                  <div class="col-md-6">
                    <ul class="footer_contact">
                      <li><span class="contact_name">Адрес :</span>Сеславинская улица, 8</li>
                      <li><span class="contact_name">Телефон :</span>8 (915) 390-99-15</li>
                      <li><span class="contact_name">E-mail :</span> luchkinshad@yandex.ru</li>
                    </ul>
                    <div class="map">
                      <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A03f9095af37dc023ca6046ab05fec6e843733582353195de22865bc3b90667a9&amp;source=constructor" frameborder="0" class="on_a_map"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
          </div> <!-- row -->
        </div> <!-- container -->
   <!-- footer -->

   <!-- progress-bar -->
  <!--  <ul id="progress">
    <li>
        <div id="layer1" class="ball"></div>
        <div id="layer7" class="pulse"></div>
    </li>
    <li>
        <div id="layer2" class="ball"></div>
        <div id="layer8" class="pulse"></div>
    </li>
    <li>
        <div id="layer3" class="ball"></div>
        <div id="layer9" class="pulse"></div>
    </li>
    <li>
        <div id="layer4" class="ball"></div>
        <div id="layer10" class="pulse"></div>
    </li>
    <li>
        <div id="layer5" class="ball"></div>
        <div id="layer11" class="pulse"></div>
    </li>
</ul> -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


  </body>
</html>