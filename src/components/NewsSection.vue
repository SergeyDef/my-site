<template>
  <section class="news" id="news">
    <a name="news" class="myLink"></a>
  	<div class="news__substrate">
  		<h6>Статьи</h6>
  	</div>
  	<div class="info">
      <div class="info__title">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text info__icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
          <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
          <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
        </svg>
        <h2>Статьи</h2>
      </div>
      <div class="info__text">
        <p>Здесь можно ознакомиться с моими статьями на тему веб-разработке и всего, что с этим связано.</p>
      </div>
    </div>
    <div class="news__wrapper">
      <div class="news__item">
          <div class="news__img"><img src="@/assets/news/news_php.jpg" alt="news"></div>
          <div class="news__info">
            <div class="news__line"></div>
            <div class="news__block">
              <div class="news__container">
                <div class="news__heading">
                  <div class="news__title">
                    <h5>Векторная графика в веб-разработке (svg)</h5>
                  </div>
                  <ul class="news__menu">
                    <li><a href="">Спросить меня</a></li>
                    <li class="news__menu-line">13.09.2020</li>
                    <li class="news__menu-right news__comment" @click="readComments" id="vectorGraphics">Комментарии</li>
                  </ul>
                </div>
                <div class="news__img-adaptiv">
                  <img src="@/assets/news/news_php.jpg" alt="news">
                </div>
              </div>
              <div class="news__text">
                <p>Для размещения изображений на интернет-ресурсах можно использовать как растровые, так и векторные изображения. Оба типа картинок имеют, так сказать, свою сферу применения...</p>
              </div>
              <div class="news__button">
                <button class="btn" @click="readArticle" id="1">
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
            <div class="news__container">
              <div class="news__img-adaptiv">
                <img src="@/assets/news/news_sait.jpg" alt="news">
              </div>
              <div class="news__heading">
                <div class="news__title">
                  <h5>Зачем делать свой сайт для бизнеса?</h5>
                </div>
                <ul class="news__menu">
                  <li class="news__menu-right"><a href="" class="news__menu-left">Спросить меня</a></li>
                  <li class="news__menu-line">01.10.2020</li>
                  <li class="news__menu-left news__comment" @click="readComments" id="website">Комментарии</li>
                </ul>
              </div>
            </div>
            <div class="news__text">
              <p>Каждый предприниматель, вне зависимости от рода предоставляемых им услуг, рано или поздно задумывается о позиционировании своей...</p>
            </div>
            <div class="news__button">
              <button class="btn" @click="readArticle" id="2">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
                <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
              </svg>
              Читать статью
            </button>
            </div>
          </div>
        </div>
        <div class="news__img"><img src="@/assets/news/news_sait.jpg" alt="news"></div>
      </div>
      <div class="news__item">
        <div class="news__img"><img src="@/assets/news/news_routing.jpg" alt="news"></div>
        <div class="news__info">
          <div class="news__line"></div>
          <div class="news__block">
            <div class="news__container">
              <div class="news__heading">
                <div class="news__title">
                  <h5>Использование роутинга во Vue js</h5>
                </div>
                <ul class="news__menu">
                  <li><a href="">Спросить меня</a></li>
                  <li class="news__menu-line">17.08.2020</li>
                  <li class="news__menu-right news__comment" id="routing">Комментарии</li>
                </ul>
              </div>
              <div class="news__img-adaptiv">
                <img src="@/assets/news/news_routing.jpg" alt="news">
              </div>
            </div>
            <div class="news__text">
              <p>Роутинг или маршрутизация в веб-приложениях представляет из себя организацию маршрутов внутри самого приложения...</p>
            </div>
            <div class="news__button news__buttonBlock">
              <button class="btn" @mouseover="blockMessageShow" @mouseout="blockMessageHide" @click="blockMessage" id="3">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
                  <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
                </svg>
              Читать статью
              </button>
              <div class="blocking" v-if="block">
                <div class="blocking__text">
                  <span>Статья не дописана</span>
                </div>
                <div class="blocking__triangle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="news__navigation navigation">
      <div class="btn-toolbar navigation__wrapper" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2 navigation__block" role="group" aria-label="First group">
          <!-- <button type="button" class="btn btn-secondary navigation__button navigation-left">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
              <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
          </button>
          <button type="button" class="btn btn-secondary navigation__button">01</button>
          <button type="button" class="btn btn-secondary navigation__button button-activ">02</button>
          <button type="button" class="btn btn-secondary navigation__button navigation-right">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
          </svg>
          </button> -->
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
  },
  data(){
    return {
      block: false,
    }
  },
  methods: {
    readArticle: function () {
      let button = event.target;
      let id = button.getAttribute('id');

      this.$router.push('/article/' + id);
    },
    blockMessageShow: function () {
      this.block = true;
    },
    blockMessageHide: function () {
      this.block = false;
    },
    blockMessage: function () {
      let block_message = document.querySelector('div.blocking');
      
      block_message.classList.add('blocking-activ');

      function removeActiv (){
        block_message.classList.remove('blocking-activ')
      }
      setTimeout(removeActiv, 1500);
    },
    readComments: function () {
      let comment_link = event.target;
      let indicator = comment_link.getAttribute('id');
      let id;

      if (indicator == 'vectorGraphics') {
        id = 1;
      } else if (indicator == 'website') {
        id = 2;
      }

      this.$router.push({
        path: '/article/' + indicator + '/' + id,
        hash: indicator,
      });
    }
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .news{
		@include blockMain(100%, 18%);
		position: relative;
		padding: 4% 6%;
    flex-direction: column;
    justify-content: space-between;

    .info{
      height: 10%;
    }
		.news__substrate{
			@include substrate(90%, 90%);
		}
		.news__substrate>h6{
			@include substrateText(4rem, 900, 0.1);
		}
    .news__wrapper{
      width: 100%;
      height: 85%;
      z-index: 9;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .news__item{
      width: 100%;
      height: 26%;
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
      padding-top: 5%;
      display: flex;
    }
    .news__menu>li{
      width: 32%;
      color: #797979;
    }
    .news__menu>li>a{
      width: 100%;
      display: block;
      text-align: left;
    }
    .news__menu-line{
      text-align: center;
      border-left: 1px solid #797979;
      border-right: 1px solid #797979;
    }
    .news__menu-right{
       text-align: right;
    }
    .news__menu-left>a{
      text-align: left;
    }
    .news__comment{
      cursor: pointer;
    }
    .news__comment:hover{
      color: #FAC02E;
    }
    .news__navigation{
      width: 100%;
      height: 5%;
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
    .news__container{
      width: 100%;
    }
    .news__heading{
      width: 100%;
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
    .news__img-adaptiv{
      display: none;
    }
    .news__buttonBlock{
      position: relative;
    }
    .news__buttonBlock>button{
      background-color: #111949;
    }
    .blocking{
      width: 210px;
      height: 60px;
      top: -70px;
      left: 150px;
      display: flex;
      border-radius: 20px;
      position: absolute;
      background-color: #EE534F;
      transition-property: all;
      transition-duration: 1s;

      .blocking__text{
        width: 100%;
        margin: auto;
        text-align: center;
      }
      .blocking__text>span{
        font-size: 1rem;
        color: #fff;
        font-weight: 600;
        transition-property: all;
        transition-duration: 1s;
      }
      .blocking__triangle{
        position: absolute;
        width: 20px;
        height: 20px;
        top: 60px;
        left: 200px;
/*        background-color: #fff;*/
      }
      .blocking__triangle::after{
        content: '';
        position: absolute;
        left: 20px;
        bottom: -20px;
        border: 20px solid transform;
        border-top: 20px solid #EE534F;
      }
    }
    .blocking-activ{
      width: 660px;
      height: 180px;
      top: -230px;
      left: -170px;

      .blocking__text>span{
        font-size: 3rem;
      }
    }
	}
  @media (max-width: 967px){
    .news{

      .news__substrate{
      }
      .news__substrate>h6{
      }
      .news__wrapper{
      }
      .news__item{
        flex-direction: column;
      }
      .news__img{
        display: none;
      }
      .news__img>img{
      }
      .news__menu{
        width: 100%;
      }
      .news__menu>li{
        font-size: 0.8rem;
      }
      .news__menu-line{
      }
      .news__menu-right{
      }
      .news__menu-left>a{
        text-align: right;
      }
      .news__navigation{
      }
      .navigation{

        .navigation__wrapper{
        }
        .navigation__block{
        }
        .navigation__button{
          padding: 10px;
        }
        .navigation__button:hover{
        }
        .navigation-left{
        }
        .navigation-right{
        }
        .navigation-left>svg{
        }
        .navigation-right>svg{
        }
      }
      .news__info{
        width: 100%;
      }
      .news__line{
        width: 100%;
        height: 3px;
        margin-left: 0;
      }
      .news__line-left{
      }
      .news__block{
        padding: 0;
        display: flex;
        height: 100%;
        flex-direction: column;
        justify-content: space-between;
      }
      .news__container{
        display: flex;
        justify-content: space-between;
        height: 50%;
      }
      .news__heading{
        padding-top: 5%;
        width: 50%;
        height: 100%;
      }
      .news__text{
        height: 25%;
      }
      .news__block-left{
      }
      .news__title{
      }
      .news__title>h5{
      }
      .news__text>p{
      }
      .news__button{
        height: 15%;

      }
      .news__button>button{
        width: 30%;
      }
      .news__img-adaptiv{
        display: block;
        width: 40%;
        height: 100%;
      }
      .news__img-adaptiv>img{
        width: 100%;
        height: 100%;
      }
    }
  }
  @media (max-width: 667px){
    .news{
      .info{
        height: 10%;
      }
      .news__substrate{
      }
      .news__substrate>h6{
        font-size: 1.5rem;
      }
      .news__wrapper{
        height: 80%;
      }
      .news__item{
        height: 30%;
      }
      .news__img{
      }
      .news__img>img{
      }
      .news__menu{
      }
      .news__menu>li{
      }
      .news__menu-line{
      }
      .news__menu-right{
      }
      .news__menu-left>a{
      }
      .news__navigation{
        height: 5%;
      }
      .navigation{

        .navigation__wrapper{
        }
        .navigation__block{
        }
        .navigation__button{
          padding: 8px;
          font-size: 0.7rem;
        }
        .navigation__button:hover{
        }
        .navigation-left{
        }
        .navigation-right{
        }
        .navigation-left>svg{
          width: 20px;
          height: 20px;
        }
        .navigation-right>svg{
          width: 20px;
          height: 20px;
        }
      }
      .blocking{
        left: 50px;
      }
      .blocking-activ{
        width: 360px;
        height: 130px;
        top: -200px;
        left: -20px;

        .blocking__text>span{
          font-size: 2rem;
        }
      }
      .news__info{
      }
      .news__line{
      }
      .news__line-left{
      }
      .news__block{
      }
      .news__container{
        flex-direction: column;
      }
      .news__heading{
        width: 100%;
      }
      .news__text>p{
        font-size: 0.9rem;
      }
      .news__block-left{
      }
      .news__title{
      }
      .news__title>h5{
        font-size: 1rem;
        text-align: center;
      }
      .news__text>p{
        text-align: left;
      }
      .news__button{

      }
      .news__button>button{
        width: 60%;
        margin: auto;
        display: block;
      }
      .news__img-adaptiv{
        display: block;
        width: 100%;
        height: 40%;
      }
      .news__img-adaptiv>img{
        width: 60%;
        height: 100%;
        margin: auto;
        display: block;
      }
    }
  }
</style>
