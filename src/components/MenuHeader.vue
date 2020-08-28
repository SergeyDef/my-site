<template>
  <header class="header">
    <a name="upward"></a>
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
    <nav class="menu__adantiv" v-if="showMenuAdantiv">
        <transition>
          <ul class="menu__wrapper">
            <li 
            class="menu__item"
            v-for="adantivMenuList in adantivMenuLists">
            <a v-bind:href="adantivMenuList.href" @click="hideMenuList"><span>{{ adantivMenuList.title }}</span></a>
          </li>
        </ul>
      </transition>
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
          <div class="sandwich__block" v-if="!showMenuSandwich" @click="showMenuList" key="menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="sandwich__clear" v-else @click="hideMenuList" key="clear"></div>
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
      adantivMenuLists: [
      {id: 1, title: 'Главная', href: '#main'},
      {id: 2, title: 'Обо мне', href: '#aboutMe'},
      {id: 3, title: 'Навыки', href: '#skills'},
      {id: 4, title: 'Образование', href: '#education'},
      {id: 5, title: 'Портфолио', href: '#portfolio'},
      {id: 6, title: 'Отзывы', href: '#reviews'},
      {id: 7, title: 'Опыт работы', href: '#workExperience'},
      {id: 8, title: 'Новости', href: '#news'},
      {id: 9, title: 'Обратная связь', href: '#feedback'},
      ],
      showMenuAdantiv: false,
      showMenuSandwich: false,
    };
  },
  methods: {
    showMenuList: function () {
      this.showMenuAdantiv = true;
      this.showMenuSandwich = true;
    },
    hideMenuList: function () {
      this.showMenuAdantiv = false;
      this.showMenuSandwich = false;
    }
  },
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
      display: none;
    }
  }
@media (max-width: 1440px){
  .header{
    .menu{
      width: 100%;
    }
  }
}
@media (max-width: 1340px){
  .header{
    .menu{
       
       .menu__wrapper{
        
        .menu__item>a>span{
          font-size: 0.85rem;
        }
      }  
    }
  }
}
@media (max-width: 1140px){
    .header{
    @include blockMain(100%, 1%);
    justify-content: flex-end;

    .menu{
     display: none;

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
    .menu__adantiv{
      z-index: 9999;
      background-color: #ffffff;
      width: 100%;
      height: 410px;
      top: 10%;
      right: 5%;
      box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
      -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
      -moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);

      .menu__item{
        display: block;
        width: 100%;
        height: 45px;
        display: flex;
        border-bottom: 1px solid #000;
      }
      .menu__item>a{
        margin: auto;
        width: 100%;
        color: #2c3e50;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        text-transform: uppercase;
      }
      .menu__item:hover{
        background-color: #F7F7F7;
      }
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
    }
  }
}
@media (max-width: 967px){
    .header{
      height: 0.7%;
      .menu{

        .menu__wrapper{

          .menu__item{
          }
          .menu__item:hover{
          }
          .menu__item>a{
          }
          .menu__item>a>span{
          }
        }
      }
    .menu__block{
      width: 30%;
    }
    .menu__adantiv{}
    .search{

      .search__button{

      }
      .search__button>svg{
        width: 100%;
        height: 100%;
      }
      .search__button:hover{
      }
    }
    .sandwich{
    }
  }
}
@media (max-width: 667px){
    .header{
      height: 0.7%;
      position: relative;

      .menu{

        .menu__wrapper{

          .menu__item{
          }
          .menu__item:hover{
          }
          .menu__item>a{
          }
          .menu__item>a>span{
          }
        }
      }
    .menu__block{
      width: 30%;
    }
    .menu__adantiv{

      .menu__item{
      }
      .menu__item>a{
      }
      .menu__item:hover{
      }
    }
    .search{

      .search__button{

      }
      .search__button>svg{
        width: 100%;
        height: 100%;
      }
      .search__button:hover{
      }
    }
    .sandwich{
    }
  }
}
</style>
