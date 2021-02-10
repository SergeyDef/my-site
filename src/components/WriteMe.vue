<template>
  <section class="window">
    <div class="window__wrapper">
      <form @submit="sendEmail">
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
          <span class="error_form">это менять нельзя</span>
        </div>
        <div class="window__block">
          <label for="theme"><span>Тема</span>
            <input 
            type="text" 
            name="theme" 
            class="window__input"
            v-model="post.theme">
          </label>
          <span class="error_form">не заполнено</span>
        </div>
        <div class="window__textarea">
          <textarea 
          rows="10" 
          cols="45" 
          name="content" 
          placeholder="Напишите что-нибудь"
          v-model="post.content"></textarea>
          <span class="error_form">не заполнено</span>
        </div>
        <div class="window__buttons">
          <div class="window__consent">
            <label for="consent">
              <input type="checkbox" name="consent" value="false" v-model="consent">
               согласие на обработку персональных данных
            </label>
            <span class="error_form">требуется согласие</span>
          </div>
          <button 
          type="submit" 
          class="btn window__button"
          >Отправить</button>
        </div>
      </form>
    </div>
  </section>
</template>

<script>
  import { validatiomMixin } from 'vuelidate'
  import { required } from 'vuelidate/lib/validators'

export default {
  name: 'ModalWindow',
  props: {
  },
  data(){
    return{
      optionsWindow: [
        { sendAnEmail: '' },
      ],
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
@import '@/scss/window.scss';

  .window{

    &__title{
      height: 10%;
      border-bottom: 1px solid rgba(45,55,79,0.15);
    }
    &__block{
      width: 90%;
      height: 10%;
      margin: auto;
      position: relative;
    }
    &__input{
      width: 80%;
      height: 100%;
      border: none;
    }
    &__textarea{
      width: 90%;
      height: 50%;
      margin: auto;
      position: relative;
    }
    &__textarea>textarea{
      width: 100%;
      height: 100%;
      border: none;
      resize: none;
    }
    &__buttons{
      width: 90%;
      height: 12%;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
    }
    &__button{
      @include buttonMain(30%, 100%, 1rem);
    }
    &__consent{
      position: relative;
    }
  }
  .error_form{
    color: #ff0000;
    position: absolute;
    font-size: 0.8rem;
    left: 0;
    bottom: 0;
    font-weight: bold;
  }
  @media (max-width: 967px){
    .window{
      &__button{
        height: 50px;
        margin: auto 0;
      }
    }
  }
  @media (max-width: 667px){
    .window{
      &__button{
        height: 40px;
        margin: auto 0;
      }
    }
  }
  @media (max-width: 410px){
    .window{

      &__wrapper{
        height: 360px;
      }

      &__title{
        height: 11%;
        padding-top: 4%;
        margin-bottom: 3%;
      }
      &__block{
        height: 10%;
        margin: 3% auto;
      }
      &__textarea{
        height: 25%;
        margin: 2% auto;
      }
      &__buttons{
        width: 90%;
        height: 25%;
        margin: 4% auto;
        flex-direction: column;
      }
      &__consent{
        order: 1;
        width: 100%;
        height: 40%;
        text-align: center;
      }
      &__consent>label{
        margin: 0;
      }
      &__button{
        order: 0;
        font-size: 0.9rem;
        width: 70%;
        height: 40px;
        margin: 0 auto;
      }
    }
  }
</style>
