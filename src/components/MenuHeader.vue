<template>
  <header class="header" id="main">
    <a name="upward"></a>
    <nav class="menu">
      <ul class="menu__wrapper">
        <li 
        class="menu__item" 
        v-for="menuList in menuHeaderLists"
        v-bind:id="menuList.id" >
          <button v-bind:id="menuList.href" @click="followLink" type="button" class="btn menu__btn">{{ menuList.title }}</button>
        </li>
      </ul>
    </nav>    
    <div class="menu__call">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-forward-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.471 17.471 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969zM12.646.646a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
      </svg>
    </div>
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
        <div class='search__form' v-if="serchField">
          <form>
            <button type="button" class="btn search__btn search__button" @click="foundText">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
              </svg>
            </button>
            <input type="text" name="search" class="search__input" v-model="searchText">
            <div class="search__clear_form clear" @click="clearText">
              <div class="clear__bloc">
                <div class="clear__plus"></div>
              </div>
            </div>
          </form>
        </div>
        <button type="button" v-if="!searchForm" @click="showSearch" key="showSearch" class="btn search__button">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-out" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
            <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
          </svg>
        </button>
        <div class="search__clear" v-else @click="hideSearch" key="clearSearch"></div>
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
    menuHeaderLists: {
      type: Array,
      required: false
    }
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
      searchForm: false,
      serchField: false,
      searchText: "",
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
    },
    showSearch: function (){
      this.searchForm = true;
      this.serchField = true;
    },
    hideSearch: function (){
      this.searchForm = false;
      this.serchField = false;
    },
    foundText: function (){
      let contentText = document.body.innerHTML;
      console.log(contentText);

      alert(this.searchText);
    },
    clearText: function (){
      this.searchText = '';
    },
    followLink: function () {
      let link = event.target;
      let id = link.getAttribute('id');
      this.$router.push({name: 'Home', hash: id});
      console.log(link);

      
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
    z-index: 9;

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
        .menu__btn{
          width: 100%;
          height: 100%;
          color: #121212;
          margin: 0;
          padding: 0;
          font-size: 0.9rem;
        }
      }
    }
    .menu__block{
      display: flex;
      cursor: pointer;
      justify-content: space-evenly;
      width: 12%;
    }
    .menu__call{
      display: none;
    }
    .search{
      width: 50%;
      height: 100%;
      margin: 0 auto;
      display: flex;
      position: relative;

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
      .search__form{
        position: absolute;
        top: 0;
        right: 100%;
        width: 300px;
        height: 100%;
      }
      .search__form>form{
        display: flex;
        width: 100%;
        height: 50%;
        border-radius: 2%;
        margin-top: 7.5%;
        border: 1px solid #2196F3;
      }
      .search__input{
        width: 70%;
        height: 100%;
        z-index: 99999;
        border: none;
      }
      .search__btn{
        width: 20%;
        height: 100%;
        opacity: 1;
        background-color: #ffffff;
      }
      .search__btn>svg{
        width: 100%;
        height: 100%;
      }
      .search__btn:hover{
        opacity: 1;
      }
      .search__clear{
        width: 30px;
        height: 30px;
        border-radius: 6px;
        margin: auto;
        position: relative;
        display: block;
        z-index: 200;
        text-indent: -9999px;
        cursor: pointer;
      }
      .search__clear:before,
      .search__clear:after {
          content: '';
          width: 80%;
          height: 6px;
          background: #000;
          position: absolute;
          top: 48%;
          left: 10%;
          transform: rotate(45deg);
          transition: all 0.3s ease-out;
      }
      .search__clear:after {
          transform: rotate(-45deg);
          transition: all 0.3s ease-out;
      }
      .search__clear:hover:before,
      .search__clear:hover:after {
          transform: rotate(180deg);
          background: #000;
      }
      .search__clear_form{
        width: 10%;
        display: flex;
        background-color: #ffffff;
      }
      .clear{
        .clear__bloc{
          margin: auto;
          width: 19px;
          height: 19px;
          border-radius: 40%;
          background-color: #CFCFCF;
        }
        .clear__plus{
          transform: rotate(45deg);
          width: 14px;
          height: 2px;
          background: #808080;
          position: relative;
          left: 3px;
          top: 8px;
        }
        .clear__plus:after{
          content: "";
          width: 3px;
          height: 14px;
          background: #808080;
          position: absolute;
          left: 5px;
          top: -6px;
        }
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
    .menu__call{
      display: flex;
      width: 10%;
      height: 100%;
    }
    .menu__call>svg{
      color: #26A59A;
      width: 60%;
      height: 50%;
      margin: auto;
      cursor: pointer;
    }
    .menu__adantiv{
      z-index: 99999999;
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
        padding: 0;
      }
      .search__button>svg{
        width: 60%;
        height: 60%;
      }
      .search__button:hover{
        opacity: 0.9;
      }
      .search__btn{
        width: 20%;
        padding: 0;
        background-color: #fff;
        opacity: 1;
      }
      .search__btn>svg{
        width: 100%;
        height: 100%;
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
        padding: 5px;
      }
      .search__button>svg{
        width: 100%;
        height: 100%;
      }
      .search__button:hover{
      }
       .search__btn{
        width: 20%;
        padding: 0;
        background-color: #fff;
        opacity: 1;
      }
      .search__btn>svg{
        width: 100%;
        height: 100%;
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
    .menu__call{
      width: 20%;
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
      .search__form{
        width: 250px;
      }
      .search__form>form{
      }
      .search__input{
      }
      .search__btn{
        width: 20%;
        padding: 0;
        background-color: #fff;
        opacity: 1;
      }
      .search__btn>svg{
        width: 100%;
        height: 100%;
      }
    }
    .sandwich{
    }
  }
}
@media (max-width: 400px){
    .header{

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
    }
    .menu__call>svg{
      width: 100%;
      height: 100%;
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
      }
      .search__button:hover{
      }
      .search__form{
        width: 200px;
      }
      .search__form>form{
      }
      .search__input{
      }
      .search__btn{
        width: 20%;
        padding: 0;
        background-color: #fff;
        opacity: 1;
      }
      .search__btn>svg{
        width: 100%;
        height: 100%;
      }
    }
    .sandwich{
    }
  }
}
</style>
