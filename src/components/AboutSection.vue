<template>
  <section class="about">
    <a name="main"></a>
    <div id="carouselExampleCaptions" class="carousel slide about__slide" data-ride="carousel">
      <ol class="carousel-indicators slideshow__indicator">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner slideshow">
        <div class="carousel-item active">
          <div class="slideshow__dlock">
            <div class="slideshow__content">
              <h5 class="slideshow__title">Привет!</h5>
              <h6 class="slideshow__title-min">Меня зовут Сергей</h6>
              <div class="slideshow__text">
                <p>И я занимаюсь созданием сайтов и веб-преложений</p>
              </div>
              <button type="button" class="btn slideshow__btn">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>
              Просмотр портфолио</button>
            </div>
            <div class="about__block">
              <div class="about__picchu">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-right-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 1h12a1 1 0 0 1 1 1v11.586l-2-2A2 2 0 0 0 11.586 11H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
                  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
              </div>
              <div class="about__img d-block w-100">
                <img src="@/assets/aboutSection/photo.png" alt="photo">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slideshow__dlock">
            <div class="slideshow__content">
              <h5 class="slideshow__title">Профессионализм</h5>
              <h6 class="slideshow__title-min">Мне нравится делать сайты</h6>
              <div class="slideshow__text">
                <p>По этому я качественно и в сроки выполняю свою работу</p>
              </div>
              <button type="button" class="btn slideshow__btn">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                  <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>
              Посмотреть отзывы</button>
            </div>
            <div class="about__img d-block w-100">
              <img src="@/assets/aboutSection/photo_01.png" alt="photo">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slideshow__dlock">
            <div class="slideshow__content">
              <h5 class="slideshow__title">Видео</h5>
              <h6 class="slideshow__title-min">Ещё немного о бо мне</h6>
              <div class="slideshow__text">
              </div>
              <button type="button" class="btn slideshow__btn">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-volume-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zM6 5.04L4.312 6.39A.5.5 0 0 1 4 6.5H2v3h2a.5.5 0 0 1 .312.11L6 10.96V5.04z"/>
                <path d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z"/>
                <path d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z"/>
                <path d="M8.707 11.182A4.486 4.486 0 0 0 10.025 8a4.486 4.486 0 0 0-1.318-3.182L8 5.525A3.489 3.489 0 0 1 9.025 8 3.49 3.49 0 0 1 8 10.475l.707.707z"/>
              </svg>
              Включить звук</button>
            </div>
            <div class="about__img d-block w-100">
              <img src="@/assets/aboutSection/photo.png" alt="photo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'AboutSection',
  props: {
    msg: String
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .about{
     @include blockMain(100%, 6%);
     padding: 4% 6%;

     .about__slide{
      background-color: #ffffff;
      width: 100%;
      height: 100%;
     }
     .about__block{
      display: flex;
      height: 100%;
      margin: auto;
      position: relative;
     }
     .about__img{
      width: 260px!important;
      height: 260px;
      margin: auto;
      overflow: hidden;
      border-radius: 50%;
      box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
      -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
      -moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
     }
     .about__img>img{
      width: 100%;
      height: auto;
     }
     .about__picchu{
      position: absolute;
      width: 60px;
      z-index: 99;
      height: 60px;
      left: 4%;
      top: 5%;
      display: flex;
      background-color: #EE534F;
      border-radius: 50%;
     }
     .about__picchu>svg{
      width: 20px;
      height: 20px;
      margin: auto;
      color: #ffffff;
     }
     .slideshow{
      height: 100%;

      .slideshow__dlock{
        display: flex;
        width: 90%;
        margin: auto;
        height: 100%;
        padding-top: 5%;
       }
      .slideshow__content{
        width: 50%;
        text-align: left;
        border-right: 2px solid #F0F0F0;
      }
      .slideshow__title{
        font-weight: 900;
        font-size: 3rem;
        color: #121212;
        padding-bottom: 3%;
       }
       .slideshow__title-min{
        color: #121212;
        font-size: 1.5rem;
       }
       .slideshow__text{
        padding: 2% 0;
       }
       .slideshow__text>p{
        font-size: 1.2rem;
        color: #121212;
       }
       .slideshow__btn{
         @include buttonMain(40%, 25%, 1rem);
       }
     }
     .slideshow__indicator{
      left: 75%;
      bottom: 45%;
      flex-direction: column;

      .active{
        width: 13px;
        height: 13px;
        background-color: #2196F3;
      }
     }
     .slideshow__indicator>li{
      width: 10px;
      height: 10px;
      background-color: #CDCDCD;
     }
  }
</style>
