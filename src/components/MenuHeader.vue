<template>
  <header class="header">
    <nav class="menu">
      <ul class="menu__wrapper">
        <li class="menu__item button-activ">
          <a href="#main"><span>Главная</span></a>
        </li>
        <li class="menu__item">
          <a href="#aboutMe"><span>Обо мне</span></a>
        </li>
        <li class="menu__item">
          <a href="#skills"><span>Навыки</span></a>
        </li>
        <li class="menu__item">
          <a href="#education"><span>Образование</span></a>
        </li>
        <li class="menu__item">
          <a href="#portfolio"><span>Портфолио</span></a>
        </li>
        <li class="menu__item">
          <a href="#reviews"><span>Отзывы</span></a>
        </li>
        <li class="menu__item">
          <a href="#workExperience"><span>Опыт работы</span></a>
        </li>
        <li class="menu__item">
          <a href="#news"><span>Новости</span></a>
        </li>
        <li class="menu__item">
          <a href="#feedback"><span>Обратная связь</span></a>
        </li>
      </ul>
    </nav>
    <div class="menu__block">
      <div class="search">
        <button type="button" class="btn search__button">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-out" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
            <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
          </svg>
        </button>
      </div>
      <div class="sandwich" id="sandwich">
        <transition>
          <div class="sandwich__block" v-if="!show" @cliche="show = !show" key="menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="sandwich__clear" v-else @click="show =!show" key="clear"></div>
      </transition>
      <transition>
        <ul v-if="show">
          <li v-for="item in items">{{ item }}</li>
        </ul>
      </transition>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: 'LateralFace',
  props: {
    msg: String
  },
  data(){
    return {
      headerMenuLists: [
      {id: 1, title: 'Главная'},
      {id: 2, title: 'О бо мне'},
      {id: 3, title: 'Навыки'},
      {id: 4, title: 'Образование'},
      {id: 5, title: 'Портфолио'},
      {id: 6, title: 'Отзывы'},
      {id: 7, title: 'Опыт работы'},
      {id: 8, title: 'Новости'},
      {id: 9, title: 'Обратная связь'},
      ],
      show: false,
    };
  },
  methods: {
    show: function (){
      alert("AboutMeSection.vue");
    }
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/style.scss';
@import '@/scss/_mixins.scss';

  .header{
    @include blockMain(100%, 1%);
    justify-content: flex-end;

    .menu{
      display: flex;
      width: 83%;
      height: 100%;

      .menu__wrapper{
        width: 100%;
        height: 100%;

        .menu__item{
          width: 11%;
          height: 100%;
          margin: auto;
          cursor: pointer;
        }
        .menu__item:hover{
          background-color: #F7F7F7;
          transform: scale(1.1);
        }
        .menu__item>a{
          width: 100%;
          height: 100%;
          display: flex;
          text-decoration: none;
        }
        .menu__item>a>span{
          margin: auto;
          color: #121212;
        }
      }
    }
    .menu__block{
      display: flex;
      cursor: pointer;
      justify-content: space-evenly;
      width: 12%;
    }
    .search{
      width: 50%;
      height: 100%;
      margin: 0 auto;
      display: flex;

      .search__button{
        margin: auto;
        width: 100%;
        height: 70%;
        opacity: 0.5;
        color: #121212;
      }
      .search__button>svg{
        width: 60%;
        height: 60%;
      }
      .search__button:hover{
        opacity: 0.9;
      }
    }
    .sandwich{
      width: 50%;
      height: 100%;
      margin: 0 auto;
      display: flex;

      .sandwich__block{
        width: 30px;
        height: 30px;
        margin: auto;
        display: flex;
        opacity: 0.5;
        flex-direction: column;
        justify-content: space-evenly;
      }
      .sandwich__block>span{
        width: 90%;
        height: 4px;
        margin: auto 0;
        background-color: #121212;
      }
      .sandwich__block:hover{
        opacity: 0.9;
      }
      .sandwich__clear{
        position: relative;
        width: 32px;
        height: 32px;
      }
      .sandwich__clear:after, .sandwich__clear:before{
        position: absolute;
        left: 15px;
        height: 33px;
        width: 2px;
        background-color: #121212;
      }
      .sandwich__clear:after{
        transform: rotate(-45deg);
      }
      .sandwich__clear:before{
        transform: rotate(45deg);
      }
    }
  }
</style>
