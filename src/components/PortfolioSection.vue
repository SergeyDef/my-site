<template>
  <section class="portfolio">
  	<div class="portfolio__substrate">
  		<h6>My Portfolio</h6>
  	</div>
    <div class="portfolio__info info">
      <div class="info__title">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trophy info__icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 1h10c-.495 3.467-.5 10-5 10S3.495 4.467 3 1zm0 15a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1H3zm2-1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1H5z"/>
          <path fill-rule="evenodd" d="M12.5 3a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-3 2a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm-6-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-3 2a3 3 0 1 1 6 0 3 3 0 0 1-6 0z"/>
          <path d="M7 10h2v4H7v-4z"/>
          <path d="M10 11c0 .552-.895 1-2 1s-2-.448-2-1 .895-1 2-1 2 .448 2 1z"/>
        </svg>
        <h2>My Portfolio</h2>
      </div>
      <div class="info__text">
        <p>В первый раз сцепление на Донфенге накрылось после пробега в 32 тысячи километров! После снятия коробки выяснилось следущее: во-первых сами накладки диска гавно- сажа.</p>
      </div>
    </div>
    <div class="portfolio__menu menu">
      <ul class="menu__wrapper">
        <li class="menu__item">
          <div class="menu__link"><span>All</span></div>
        </li>
        <li class="menu__item">
          <div class="menu__link">
            <span>Logos</span>
          </div>
        </li>
        <li class="menu__item">
          <div class="menu__link">
            <span>Websites</span>
          </div>
        </li>
        <li class="menu__item">
          <div class="menu__link">
            <span>Apps</span>
          </div>
        </li>
        <li class="menu__item">
          <div class="menu__link">
            <span>Softwares</span>
          </div>
        </li>
      </ul>
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
          <img src="@/assets/portfolio/0_1.png" alt="">
        </a>
      </div>
      <div class="gallery__block">
        <a href="" class="gallery__link">
          <img src="@/assets/portfolio/0_2.png" alt="">
        </a>
      </div>
      <div class="gallery__block">
        <a href="" class="gallery__link">
          <img src="@/assets/portfolio/0_3.png" alt="">
        </a>
      </div>
      <div class="gallery__block">
        <a href="" class="gallery__link">
          <img src="@/assets/portfolio/0_4.png" alt="">
        </a>
      </div>
      <div class="gallery__block">
        <a href="" class="gallery__link">
          <img src="@/assets/portfolio/0_5.png" alt="">
        </a>
      </div>
      <div class="gallery__block">
        <a href="" class="gallery__link">
          <img src="@/assets/portfolio/0_6.png" alt="">
        </a>
      </div>
    </div>
    <div class="portfolio__button">
      <button type='button' class="btn">Load More</button>
    </div>
  </section>
</template>

<script>
export default {
  name: 'PortfolioSection',
  props: {
    msg: String
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
        height: 10%;
        background-color: #F0F0F0;
        box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
        -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
        -moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);

        .menu__wrapper{
          width: 60.5%;
          height: 100%;
          background-color: #ffffff;
        }
        .menu__search{
          width: 39.4%;
          display: flex;
          background-color: #ffffff;
        }
        .menu__item{
          width: 14%;
          height: 100%;
          margin: auto;
          cursor: pointer;
        }
        .menu__item:hover>.menu__link{
          color: #ffffff;
          background-color: #2196F3;
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
      }
    .gallery{
      display: flex;
      width: 100%;
      flex-wrap: wrap;
      
      .gallery__block{
        width: 33.33%;
        height: auto;
      }
      .gallery__link{
        display: block;
        width: 100%;
        height: 300px;
        overflow: hidden;
        cursor: pointer;
      }
      .gallery__link>img{
        width: 140%;
        height: auto;
        margin: auto;
        transition: 3s;
      }
    }
    .portfolio__button{
      width: 100%;
      height: 10%;
    }
    .portfolio__button>button{
      @include buttonMain(15%, 50%, 1rem);
      margin: auto;
    }
  }
</style>
