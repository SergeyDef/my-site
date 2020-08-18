<template>
  <section class="about">
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
              <h5 class="slideshow__title">Hello</h5>
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
            <div class="about__img d-block w-100">
              <img src="@/assets/aboutSection/photo.png" alt="photo">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slideshow__dlock">
            <div class="slideshow__content">
              <h5 class="slideshow__title">Hello</h5>
              <h6 class="slideshow__title-min">My name is Akshay</h6>
              <p class="slideshow__text">& I am absolutely design addicted</p>
              <button type="button" class="btn slideshow__btn"><img src="" alt="">View Protfolio</button>
            </div>
            <div class="about__img d-block w-100">
              <img src="@/assets/aboutSection/photo.png" alt="photo">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slideshow__dlock">
            <div class="slideshow__content">
              <h5 class="slideshow__title">Hello</h5>
              <h6 class="slideshow__title-min">My name is Akshay</h6>
              <p class="slideshow__text">& I am absolutely design addicted</p>
              <button type="button" class="btn slideshow__btn"><img src="" alt="">View Protfolio</button>
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
