<template>
  <section class="window">
    <div class="window__wrapper">
      <form @submit.prevent="sendEmail">
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
            v-model.trim="post.whom"
            :class="$v.post.whom.$dirty && !$v.post.whom.myEmail ? 'findings__error' : ''" />
          </label>
          <span class="error_form" v-if="$v.post.whom.$dirty && !$v.post.whom.myEmail">это менять нельзя</span>
        </div>
        <div class="window__block">
          <label for="theme"><span>Тема</span>
            <input 
            type="text" 
            name="theme" 
            class="window__input"
            v-model.trim="post.text"
            :class="$v.post.text.$dirty && $v.post.text.$error ? 'findings__error' : ''" />
          </label>
          <span class="error_form" v-if="$v.post.text.$dirty && $v.post.text.$error">не заполнено</span>
        </div>
        <div class="window__textarea">
          <textarea 
          rows="10" 
          cols="45" 
          name="message" 
          placeholder="Напишите что-нибудь"
          v-model.trim="post.message"
          :class="$v.post.message.$dirty && $v.post.message.$error ? 'findings__error' : ''" ></textarea>
          <span class="error_form error_form_textarea" v-if="$v.post.message.$dirty && $v.post.message.$error">не заполнено</span>
        </div>
        <div class="window__buttons">
          <div class="window__consent">
            <label for="consent">
              <input 
                type="checkbox" 
                name="consent" 
                v-model="post.consent"
                class="form-check-input" />
               согласие на обработку персональных данных
            </label>
            <span class="error_form error_form_consent" v-if="!$v.post.consent.$model">требуется Ваше согласие</span>
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
  import { validationMixin } from 'vuelidate'
  import { required } from 'vuelidate/lib/validators'

export default {
  mixins: [validationMixin],
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
        text: null,
        content: null,
        message: null,
        consent: true
      },
    }
  },
  methods: {
    closeWindowMail: function (){
     this.$emit('closeWindowMail');
    },
    sendEmail: function (){
      if (this.$v.$invalid) {
        this.$v.post.$touch();
      }
    }
  },
  validations: {
    post: {
      whom: { myEmail: val => {
        const email = "pas.sergei2014@yandex.ru";
        return email == val
      } 
    },
      text: { required },
      content: { required },
      message: { required },
      consent: {}
    }
  }
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
      @include buttonMain(30%, 45px, 1rem);
      margin: auto 0;
    }
    &__consent{
      position: relative;
    }
  }
  .error_form{
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
      &__buttons{
        margin-top: 2%;
      }
      &__button{
        width: 25%;
        height: 40px;
        font-size: 0.9rem;
        margin: auto 0;
      }
      &__consent{
        width: 75%;
      }
      &__consent>label{
        padding-left: 15px;
      }
      .error_form_consent{
        bottom: -6px;
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
        width: 90%;
        margin: 0 auto;
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
  @media (max-width: 360px){
    .window{
      .error_form{
        bottom: -8px;
      }
      .error_form_textarea{
        bottom: 5px;
      }
    }
  }
</style>
