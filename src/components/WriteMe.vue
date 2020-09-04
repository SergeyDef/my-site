<template>
  <section class="window">
    <div class="window__wrapper">
      <form>
        <div class="window__title">
          <span>Написать на почту</span>
          <div class="window__close" @click="closeWindowMail">
            <div class="window__plus"></div>
          </div>
        </div>
        <div class="window__block">
          <label for="whom"><span>Кому</span>
            <input 
            type="text" 
            name="whom" 
            value="pas.sergei2014@yandex.ru" 
            class="window__input"
            v-model="post.whom">
          </label>
        </div>
        <div class="window__block">
          <label for="theme"><span>Тема</span>
            <input 
            type="text" 
            name="theme" 
            class="window__input"
            v-model="post.theme">
          </label>
        </div>
        <div class="window__textarea">
          <textarea 
          rows="10" 
          cols="45" 
          name="content" 
          placeholder="Напишите что-нибудь"
          v-model="post.content"></textarea>
        </div>
        <div class="window__buttons">
          <div class="window__consent">
            <label for="consent">
              <input type="checkbox" name="consent" value="false" v-model="consent">
               согласие на обработку персональных данных
            </label>
          </div>
          <button 
          type="button" 
          class="btn window__button"
          @click="sendEmail">Отправить</button>
        </div>
      </form>
    </div>
  </section>
</template>

<script>
export default {
  name: 'WriteMe',
  props: {
  },
  data(){
    return{
      post: {
        whom: "pas.sergei2014@yandex.ru",
        theme: "",
        content: "",
      },
      consent: true,
    }
  },
  methods: {
    closeWindowMail: function (){
     this.$emit('closeWindowMail');
    },
    sendEmail: function (){
      console.log()
      let myMail = this.post.whom;
      let themeMail = this.post.theme;
      let mesege = this.post.content;

      if (this.consent) {
        console.log(myMail + " " + themeMail + " " + mesege);
      } else{
        console.log("Нет согласия на обработку данных");
      }
    }
  },
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .window{
    position: fixed;
    z-index: 99;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    overflow: auto;
    display: flex;
    background-color: rgba(0,0,0,0.7);

    .window__wrapper{
      width: 30%;
      height: 50%;
      border-radius: 10px;
      margin: auto;
      background-color: #ffffff;
    }
    .window__wrapper>form{
      width: 100%;
      height: 100%;
    }
    .window__title{
      width: 90%;
      height: 10%;
      padding-top: 2%;
      display: flex;
      justify-content: space-between;
      margin: auto;
      border-bottom: 1px solid rgba(45,55,79,0.15);
    }
    .window__title>span{
      font-size: 1rem;
      color: #333;
    }
    .window__close{
      width: 16px;
      height: 16px;
      cursor: pointer;
    }
    .window__plus{
      transform: rotate(45deg);
      position: relative;
      width: 14px;
      height: 2px;
      background-color: #333;
      left: 0;
      top: 13px;
    }
    .window__plus:after{
      content: "";
      position: absolute;
      background-color: #333;
      width: 2px;
      height: 15px;
      left: 6px;
      top: -6px;
    }
    .window__block{
      width: 90%;
      height: 10%;
      margin: auto;
    }
    .window__block>label{
      display: flex;
      width: 100%;
      height: 100%;
    }
    .window__block>label>span{
      width: 10%;
      text-align: left;
      margin: auto 0;
      font-size: 0.9rem;
      color: rgba(45,55,79,0.60);
    }
    .window__input{
      width: 80%;
      height: 100%;
      border: none;
    }
    .window__textarea{
      width: 90%;
      height: 50%;
      margin: auto;
    }
    .window__textarea>textarea{
      width: 100%;
      height: 100%;
      border: none;
      resize: none;
    }
    .window__buttons{
      width: 90%;
      height: 12%;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
    }
    .window__consent{
      width: 65%;
      height: 100%;
      display: flex;
    }
    .window__consent>label{
      font-size: 0.8rem;
      margin: auto;
      width: 100%;
      text-align: left;
    }
    .window__button{
      @include buttonMain(30%, 100%, 1rem);
    }
  }
  @media (max-width: 1967px){
  .window{

    .window__wrapper{
      width: 40%;
    }
    .window__wrapper>form{
    }
    .window__title{
    }
    .window__title>span{
    }
    .window__close{
    }
    .window__plus{
    }
    .window__plus:after{
    }
    .window__block{
    }
    .window__block>label{
    }
    .window__block>label>span{
    }
    .window__input{
    }
    .window__textarea{
    }
    .window__textarea>textarea{
    }
    .window__buttons{
    }
    .window__consent{
    }
    .window__consent>label{
    }
    .window__button{
    }
  }
}
  @media (max-width: 967px){
  }
  @media (max-width: 967px){
  }
  @media (max-width: 667px){
  }
  @media (max-width: 400px){
  }
</style>
