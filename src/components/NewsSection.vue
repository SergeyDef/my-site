<template>
  <section class="news">
    <a name="news" class="myLink"></a>
  	<div class="news__substrate">
  		<h6>Новостные статьи</h6>
  	</div>
  	<div class="info">
      <div class="info__title">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text info__icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
          <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
          <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
        </svg>
        <h2>Новостные статьи</h2>
      </div>
      <div class="info__text">
        <p>Здесь можно ознакомиться с моими статьями на тему новинок в ваб разработки.</p>
      </div>
    </div>
    <div class="news__wrapper">
      <div class="news__item">
          <div class="news__img"><img src="@/assets/news/news_php.jpg" alt="news"></div>
          <div class="news__info">
            <div class="news__line"></div>
            <div class="news__block">
              <div class="news__title">
                <h5>Тренды веб разработки: PHP 7</h5>
              </div>
              <ul class="news__menu">
              <li><a href="">Спросить меня</a></li>
              <li class="news__menu-line">17.08.2020</li>
              <li class="news__menu-right">Коментарии</li>
              </ul>
              <div class="news__text">
                <p>В первый раз сцепление на Донфенге накрылось после пробега в 32 тысячи километров! После снятия коробки выяснилось следущее: во-первых сами накладки </p>
              </div>
              <div class="news__button">
                <button class="btn">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
                    <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
                  </svg>
                Читать статью
              </button>
              </div>
            </div>
          </div>
      </div>
      <div class="news__item">
        <div class="news__info">
          <div class="news__line news__line-left"></div>
          <div class="news__block news__block-left">
            <div class="news__title">
              <h5>WordPress 5.3.2 новыя версия</h5>
            </div>
            <ul class="news__menu">
              <li class="news__menu-right"><a href="">Спросить меня</a></li>
              <li class="news__menu-line">17.08.2020</li>
              <li class="news__menu-left">Коментарии</li>
            </ul>
            <div class="news__text">
              <p>В первый раз сцепление на Донфенге накрылось после пробега в 32 тысячи километров! После снятия коробки выяснилось следущее: во-первых сами накладки </p>
            </div>
            <div class="news__button">
              <button class="btn">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
                <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
              </svg>
              Читать статью
            </button>
            </div>
          </div>
        </div>
        <div class="news__img"><img src="@/assets/news/news_wordpress.jpg" alt="news"></div>
      </div>
      <div class="news__item">
        <div class="news__img"><img src="@/assets/news/news_sait.jpg" alt="news"></div>
        <div class="news__info">
          <div class="news__line"></div>
          <div class="news__block">
            <div class="news__title">
              <h5>Зачем делать свой сайт для бизнеса?</h5>
            </div>
            <ul class="news__menu">
              <li><a href="">Спросить меня</a></li>
              <li class="news__menu-line">17.08.2020</li>
              <li class="news__menu-right">Коментарии</li>
            </ul>
            <div class="news__text">
              <p>В первый раз сцепление на Донфенге накрылось после пробега в 32 тысячи километров! После снятия коробки выяснилось следущее: во-первых сами накладки </p>
            </div>
            <div class="news__button">
              <button class="btn">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
                  <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
                </svg>
              Читать статью
            </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="news__navigation navigation">
      <div class="btn-toolbar navigation__wrapper" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2 navigation__block" role="group" aria-label="First group">
          <button type="button" class="btn btn-secondary navigation__button navigation-left">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
              <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
          </button>
          <button type="button" class="btn btn-secondary navigation__button">01</button>
          <button type="button" class="btn btn-secondary navigation__button button-activ">02</button>
          <button type="button" class="btn btn-secondary navigation__button">03</button>
          <button type="button" class="btn btn-secondary navigation__button">04</button>
          <button type="button" class="btn btn-secondary navigation__button">05</button>
          <button type="button" class="btn btn-secondary navigation__button navigation-right">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
          </svg>
          </button>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'NewsSection',
  props: {
    msg: String
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .news{
		@include blockMain(100%, 17%);
			position: relative;
			padding: 4% 6%;
      flex-direction: column;
      justify-content: space-between;

		.news__substrate{
			@include substrate(90%, 90%);
		}
		.news__substrate>h6{
			@include substrateText(4rem, 900, 0.1);
		}
    .news__wrapper{
      width: 100%;
      height: 70%;
      z-index: 9;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .news__item{
      width: 100%;
      height: 30%;
      display: flex;
      justify-content: space-between;
    }
    .news__img{
      width: 50%;
      height: 100%;
      box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
      -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
      -moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
    }
    .news__img>img{
      width: 100%;
      height: 100%;
    }
    .news__menu{
      width: 100%;
      display: flex;
    }
    .news__menu>li{
      width: 32%;
      color: #797979;
    }
    .news__menu-line{
      text-align: center;
      border-left: 1px solid #797979;
      border-right: 1px solid #797979;
    }
    .news__menu-right{
       text-align: left;
    }
    .news__menu-left>a{
      text-align: left;
    }
    .news__navigation{
      width: 100%;
      height: 10%;
      z-index: 9;
      display: flex;
    }
    .navigation{

      .navigation__wrapper{
        display: flex;
        margin: auto;
      }
      .navigation__block{
        margin: auto!important;
        box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
        -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
        -moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
      }
      .navigation__button{
        color: #000;
        background-color: #ffffff;
        border-radius: 0;
        border: none;
        padding: 20px;
        font-size: 1.3rem;
      }
      .navigation__button:hover{
        background-color: #F7F7F7;
        position: relative;
        transform: scale(1.1);
      }
      .navigation-left{
        border-right: 2px solid #F0F0F0;
      }
      .navigation-right{
         border-left: 2px solid #F0F0F0;
      }
      .navigation-left>svg{
        width: 30px;
        height: 30px;
      }
      .navigation-right>svg{
        width: 30px;
        height: 30px;
      }
    }
    .news__info{
      width: 50%;
      height: 100%;
    }
    .news__line{
      margin-top: 5%;
      width: 25%;
      height: 8px;
      background-color: #1F95EF;
    }
    .news__line-left{
      margin-left: 75%;
    }
    .news__block{
      width: 100%;
      margin-top: 5%;
      height: 75%;
      padding-left: 10%;
      text-align: left;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .news__block-left{
      text-align: right;
      padding-left: 0;
      padding-right: 10%;
    }
    .news__title{
      width: 100%;
    }
    .news__title>h5{
      font-style: 1.2rem;
      text-transform: uppercase;
      font-weight: 700;
    }
    .news__text>p{
      color: #797979;
    }
    .news__button{
      width: 100%;
      height: 25%;
    }
    .news__button>button{
      @include buttonMain(40%, 100%, 1pem);
    }
	}
</style>
