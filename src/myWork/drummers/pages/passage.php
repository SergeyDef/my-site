<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="SergiuszDef">
    <meta http-equiv="content-language" content="ru">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="../css/magnific-popup.css">
  
  <link rel="stylesheet" href="../css/font-awesome.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  
  <link rel='stylesheet' href='../css/css.css'>

  <script src="../js/jquery.min.js" type="text/javascript"></script>

  <script src="../js/magnific-popup.js" type="text/javascript"></script>

  <title>Галерея</title>
</head>
  <body>
    <!-- header site -->
    <?php
  require_once '../tpl/head.php';
  ?>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12 separator2">
          <hr />
      </div>
    </div>
  </div>
  <!-- content -->
  <content class="content">
    <div class="container-fluid">
      <div class="row">
              <div class="heading">
                <h2>Галерея</h2>
                <a href="XXX.php">ТЕСТ</a>
              </div>

              <script type="text/javascript">
                $(document).ready(function() {

                  $('.simple-ajax-popup-align-top').magnificPopup({
                    type: 'ajax',
                    alignTop: true,
                    overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
                  });

                  $('.simple-ajax-popup').magnificPopup({
                    type: 'ajax'
                  });
                  
                });
              </script>
             <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"> <!-- block-1 -->

                <section class="passage">
                  <a class="simple-ajax-popup-align-top" href="../modal_pages/gallery1.php?tmpl=component">
                    <figure class="pictur">
                      <img src="../img/gallery/gallery_passage/1.jpg">
                      <div class="description">
                        <span>Короткое описание</span>
                      </div>
                      <figcaption class="view">Посмотреть</figcaption>
                    </figure>
                    
                  </a>
                  <article class="year">
                    <span>1842г.</span>
                  </article>
              </section>
              <section class="passage">
                <a href="../modal_pages/gallery1.php?tmpl=component" class="simple-ajax-popup-align-top">
                  <figure class="pictur">
                    <img src="../img/gallery/gallery_passage/2.jpg">
                    <div class="description">
                      <span>Короткое описание</span>
                    </div>
                    <figcaption class="view">Посмотреть</figcaption>
                  </figure>
                </a>
                <article class="year">
                  <span>1842г.</span>
                </article>
              </section>
              <script>
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
              <section class="passage popup-gallery">
                  <a href="../img/gallery/gallery_passage/3.jpg" class="">
                    <figure class="pictur">
                      <img src="../img/gallery/gallery_passage/3.jpg">
                      <div class="description">
                        <span>Короткое описание</span>
                      </div>
                      <figcaption class="view">Посмотреть</figcaption>
                    </figure>
                  </a>
                  <article class="year">
                    <span>1842г.</span>
                  </article>
              </section>
            </div> <!-- block-1 -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"> <!-- block-3 -->
                <section class="passage">
                  <a href="">
                    <figure class="pictur">
                      <img src="../img/gallery/gallery_passage/7.jpg">
                      <div class="description">
                        <span>Короткое описание</span>
                      </div>
                      <figcaption class="view">Посмотреть</figcaption>
                    </figure>
                    
                  </a>
                  <article class="year">
                    <span>1842г.</span>
                  </article>
              </section>
              <section class="passage">
                <a href="">
                  <figure class="pictur">
                    <img src="../img/gallery/gallery_passage/8.jpg">
                    <div class="description">
                      <span>Короткое описание</span>
                    </div>
                    <figcaption class="view">Посмотреть</figcaption>
                  </figure>
                  
                </a>
                <article class="year">
                  <span>1842г.</span>
                </article>
              </section>
              <section class="passage">
                  <a href="">
                    <figure class="pictur">
                      <img src="../img/gallery/gallery_passage/9.jpg">
                      <div class="description">
                        <span>Короткое описание</span>
                      </div>
                      <figcaption class="view">Посмотреть</figcaption>
                    </figure>
                  </a>
                  <article class="year">
                    <span>1842г.</span>
                  </article>
              </section>
            </div> <!-- block-2 -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"> <!-- block-3 -->
                <section class="passage">
                  <a href="">
                    <figure class="pictur">
                      <img src="../img/gallery/gallery_passage/4.jpg">
                      <div class="description">
                        <span>Короткое описание</span>
                      </div>
                      <figcaption class="view">Посмотреть</figcaption>
                    </figure>
                  </a>
                  <article class="year">
                    <span>1842г.</span>
                  </article>
              </section>
              <section class="passage">
                <a href="">
                  <figure class="pictur">
                    <img src="../img/gallery/gallery_passage/10.jpg">
                    <div class="description">
                      <span>Короткое описание</span>
                    </div>
                    <figcaption class="view">Посмотреть</figcaption>
                  </figure>
                  
                </a>
                <article class="year">
                  <span>1842г.</span>
                </article>
              </section>
              <section class="passage">
                  <a href="">
                    <figure class="pictur">
                      <img src="../img/gallery/gallery_passage/6.jpg">
                      <div class="description">
                        <span>Короткое описание</span>
                      </div>
                      <figcaption class="view">Посмотреть</figcaption>
                    </figure>
                    
                  </a>
                  <article class="year">
                    <span>1842г.</span>
                  </article>
              </section>
            </div> <!-- block-3 -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"> <!-- block-4 -->
                <section class="passage">
                  <a href="">
                    <figure class="pictur">
                      <img src="../img/gallery/gallery_passage/5.jpg">
                      <div class="description">
                        <span>Короткое описание</span>
                      </div>
                      <figcaption class="view">Посмотреть</figcaption>
                    </figure>
                    
                  </a>
                  <article class="year">
                    <span>1842г.</span>
                  </article>
              </section>
              <section class="passage">
                <a href="">
                  <figure class="pictur">
                    <img src="../img/gallery/gallery_passage/11.jpg">
                    <div class="description">
                      <span>Короткое описание</span>
                    </div>
                    <figcaption class="view">Посмотреть</figcaption>
                  </figure>
                  
                </a>
                <article class="year">
                  <span>1842г.</span>
                </article>
              </section>
              <section class="passage">
                  <a href="">
                    <figure class="pictur">
                      <img src="../img/gallery/gallery_passage/12.jpg">
                      <div class="description">
                        <span>Короткое описание</span>
                      </div>
                      <figcaption class="view">Посмотреть</figcaption>
                    </figure>
                  </a>
                  <article class="year">
                    <span>1842г.</span>
                  </article>
              </section>
            </div> <!-- block-4 -->

            </div>
          </div>
        </content> <!-- content -->

     <!-- footer site -->  
<?php
  require_once '../tpl/footer.php';
  ?>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
  </body>
</html>