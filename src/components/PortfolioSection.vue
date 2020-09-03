<template>
  <section class="portfolio">
    <a name="portfolio" class="myLink"></a>
  	<div class="portfolio__substrate">
  		<h6>Моё портфолио</h6>
  	</div>
    <div class="portfolio__info info">
      <div class="info__title">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-layers-half info__icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3.188 8L.264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l-4.578 2.441a.5.5 0 0 1-.47 0L3.188 8z"/>
          <path fill-rule="evenodd" d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4zM1.563 6L8 9.433 14.438 6 8 2.567 1.562 6z"/>
        </svg>
        <h2>Моё портфолио</h2>
      </div>
      <div class="info__text">
        <p>Здесь можно посмотреть мои работы. Лендинги, многостроничные сайты и небольшие приложения.</p>
      </div>
    </div>
    <div class="portfolio__menu menu">
      <ul class="menu__wrapper">
        <li class="menu__item button-activ">
          <div class="menu__link"><span>Все</span></div>
        </li>
        <li class="menu__item">
          <div class="menu__link">
            <span>Лендинги</span>
          </div>
        </li>
        <li class="menu__item">
          <div class="menu__link">
            <span>Сайты</span>
          </div>
        </li>
        <li class="menu__item">
          <div class="menu__link">
            <span>Приложения</span>
          </div>
        </li>
      </ul>
      <ul class="menu__adaptiv" v-if="showMenuAdaptiv">
        <li class="item" v-for="portfolioMenuList in portfolioMenuLists"><span>{{ portfolioMenuList.title }}</span></li>
      </ul>
      <div class="sandwich" id="sandwich">
        <transition>
          <div class="sandwich__block" v-if="!sandwichShow" @click="showMenu" key="menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="sandwich__clear" v-else @click="hideMenu" key="clear"></div>
        </transition>
      </div>
      <div class="menu__search">
        <div class="menu__form">
          <div class="menu__input">
            <input type="text" placeholder="Searh">
          </div>
          <button>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-out" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
              <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div class="portfolio__gallery gallery">
      <div class="gallery__block">
        <a href="" class="gallery__link">
          <img src="@/assets/portfolio/0_5.png" alt="">
        </a>
        <div class="gallery__indicator indicator">
          <div class="indicator__cross"></div>
        </div>
      </div>
      <div class="gallery__block">
        <a href="" class="gallery__link">
          <img src="@/assets/portfolio/0_1.png" alt="">
          <div class="gallery__indicator indicator">
            <div class="indicator__cross"></div>
          </div>
        </a>
      </div>
      <div class="gallery__block">
        <a href="" class="gallery__link">
          <img src="@/assets/portfolio/0_3.png" alt="">
        </a>
        <div class="gallery__indicator indicator">
          <div class="indicator__cross"></div>
        </div>
      </div>
      <div class="gallery__block">
        <a href="" class="gallery__link">
          <img src="@/assets/portfolio/0_2.png" alt="">
        </a>
        <div class="gallery__indicator indicator">
          <div class="indicator__cross"></div>
        </div>
      </div>
      <div class="gallery__block">
        <a href="" class="gallery__link">
          <img src="@/assets/portfolio/0_4.png" alt="">
        </a>
        <div class="gallery__indicator indicator">
          <div class="indicator__cross"></div>
        </div>
      </div>
      <div class="gallery__block">
        <a href="" class="gallery__link">
          <img src="@/assets/portfolio/0_6.png" alt="">
        </a>
        <div class="gallery__indicator indicator">
          <div class="indicator__cross"></div>
        </div>
      </div>
    </div>
    <div class="portfolio__button">
      <button type='button' class="btn">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
      <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
    </svg>
    Смотреть больше</button>
    </div>
  </section>
</template>

<script>
export default {
  name: 'PortfolioSection',
  props: {
    msg: String
  },
  data() {
    return {
      portfolioMenuLists: [
      {id: 1, title: 'Все', value: ''},
      {id: 2, title: 'Лендинги', value: ''},
      {id: 3, title: 'Сайты', value: ''},
      {id: 4, title: 'Приложения', value: ''},
      ],
      sandwichShow: false,
      showMenuAdaptiv: false,
    };
  },
  methods: {
    showMenu: function () {
      this.sandwichShow = true;
      this.showMenuAdaptiv = true;
    },
    hideMenu: function () {
      this.sandwichShow = false;
      this.showMenuAdaptiv = false;
    }
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .portfolio{
    @include blockMain(100%, 14%);
      position: relative;
      padding: 4% 6%;
      flex-direction: column;
      justify-content: space-between;

      .portfolio__substrate{
     	  @include substrate(90%, 90%);
      }
      .portfolio__substrate>h6{
     	  @include substrateText(4rem, 900, 0.1);
      }
      .portfolio__menu{
        width: 100%;
        z-index: 9;
        display: flex;
        justify-content: space-between;
      }
      .menu{
        height: 9%;
        background-color: #F0F0F0;
        box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
        -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
        -moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);

        .menu__wrapper{
          width: 69.5%;
          height: 100%;
          background-color: #ffffff;
        }
        .menu__search{
          width: 30.4%;
          display: flex;
          background-color: #ffffff;
        }
        .menu__item{
          width: 20%;
          height: 100%;
          margin: auto;
          cursor: pointer;
        }
        .menu__item:hover{
          background-color: #F7F7F7;
          color: #121212;
          transform: scale(1.1);
        }
        .menu__link{
          width: 100%;
          height: 100%;
          display: flex;
          color: #121212;
          text-decoration: none;
        }
        .menu__link>span{
          margin: auto;
          font-size: 1rem;
          text-transform: uppercase;
        }
        .menu__form{
          display: flex;
          width: 90%;
          margin: auto;
          justify-content: center;
        }
        .menu__form>button{
          border: 0;
          width: 15%;
          height: 100%;
          background-color: #ffffff;
        }
        .menu__input{
          width: 85%;
        }
        .menu__input>input{
          width: 100%;
          border: 0;
        }
        .sandwich{
          display: none;
        }
      }
    .gallery{
      display: flex;
      width: 100%;
      flex-wrap: wrap;
      z-index: 9;
      
      .gallery__block{
        position: relative;
        width: 33.33%;
        height: auto;
        border: 1px solid #000;
      }
      .gallery__block:hover{
        transform: scale(1.1);
        z-index: 99999;
      }
      .gallery__block:hover .gallery__indicator{
        display: block;
      }
      .gallery__link{
        display: block;
        width: 100%;
        height: 300px;
        overflow: hidden;
        cursor: pointer;
      }
      .gallery__link>img{
        width: 100%;
        height: auto;
        margin: auto;
      }
      .gallery__indicator{
        display: none;
        position: absolute;
        background-color: #2196F3;
        z-index: 9999;
        width: 12%;
        height: 9%;
        top: 70%;
        right: 0;
      }
      .indicator{

        .indicator__cross{
          background: #ffffff;
          height: 13px;
          width: 2px;
          position: relative;
          left: 20px;
          top: 6px;
        }
        .indicator__cross:after{
          content: "";
          height: 2px;
          width: 13px;
          background: #ffffff;
          position: absolute; 
          left: -5px; 
          top: 5px;
        }
      }
    }
    .portfolio__button{
      width: 100%;
      height: 10%;
      z-index: 9;
    }
    .portfolio__button>button{
      @include buttonMain(15%, 50%, 1rem);
      margin: auto;
    }
  }
  @media (max-width: 1140px){
    .portfolio{
      .portfolio__substrate{
      }
      .portfolio__substrate>h6{

      }
      .portfolio__menu{
      }
      .menu{
        .menu__wrapper{

        }
        .menu__search{

            }
            .menu__item{
            }
            .menu__item:hover{
            }
            .menu__link{
            }
            .menu__link>span{
            }
            .menu__form{
            }
            .menu__form>button{
            }
            .menu__input{
            }
            .menu__input>input{
            }
            .sandwich{

            }
            .menu__adaptiv{


              .item{

              }
              .item>span{

              }
              .item:hover{

              }
            }
          }
        .gallery{
          
          .gallery__block{

          }
          .gallery__block:hover{
          }
          .gallery__block:hover .gallery__indicator{
          }
          .gallery__link{
          }
          .gallery__link>img{
          }
          .gallery__indicator{
          }
          .indicator{

            .indicator__cross{
            }
            .indicator__cross:after{
            }
          }
        }
        .portfolio__button{
        }
        .portfolio__button>button{
          width: 30%;
      }
    }
  }
  @media (max-width: 667px){
      .portfolio{
        height: 9%;

          .portfolio__substrate{
          }
          .portfolio__substrate>h6{
            font-size: 1.5rem;
          }
          .portfolio__menu{
          }
          .menu{
            position: relative;
            z-index: 999;
            height: 6%;

            .menu__wrapper{
              display: none;
            }
            .menu__search{
              width: 79%;
            }
            .menu__item{
            }
            .menu__item:hover{
            }
            .menu__link{
            }
            .menu__link>span{
            }
            .menu__form{
            }
            .menu__form>button{
            }
            .menu__input{
            }
            .menu__input>input{
            }
            .sandwich{
              background-color: #ffffff;
              display: flex;
              width: 19%;
            }
            .menu__adaptiv{
              z-index: 9999;
              position: absolute;
              background-color: #ffffff;
              width: 100%;
              height: 200px;
              bottom: -220px;

              .item{
                display: block;
                width: 100%;
                height: 45px;
                display: flex;
                border-bottom: 1px solid #000;
              }
              .item>span{
                margin: auto;
                font-size: 1rem;
                font-weight: 700;
                text-transform: uppercase;
              }
              .item:hover{
                background-color: #F7F7F7;
              }
            }
          }
        .gallery{
          
          .gallery__block{
            width: 50%;
          }
          .gallery__block:hover{
          }
          .gallery__block:hover .gallery__indicator{
          }
          .gallery__link{
            height: 130px;
          }
          .gallery__link>img{
          }
          .gallery__indicator{
          }
          .indicator{

            .indicator__cross{
            }
            .indicator__cross:after{
            }
          }
        }
        .portfolio__button{
        }
        .portfolio__button>button{
          width: 60%;
          height: 70%;
        }
      }
  }
</style>
