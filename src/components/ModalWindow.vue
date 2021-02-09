<template>
  <section class="window">
    <div class="window__wrapper">
      <form class="window__form" method="post" @submit.prevent="sendForm">
        <div class="window__title">
          <span>Оставить коментарий</span>
          <div class="window__close" @click="closeWindow">
            <div class="window__plus"></div>
          </div>
        </div>
        <div class="window__block">
          <div class="window__photo photo">
            <div class="photo__img">
              <img v-bind:src="photoPreview" class="photo__user" v-show="showPreview">
              <video autoplay="autoplay" id="video" class="camera_stream" v-show="showVideo" src="">
                <img src="" class="photo__user">
              </video>
              <canvas></canvas>
            </div>
            <div class="photo__buttons">
              <div class="photo__button photo__download">
                <label>
                  <span class="photo__text">Загрузить фото</span>
                  <input type="file" name="myFile" ref="file" accept="image/*" @change="photoDownload">
                </label>
              </div>
              <!-- <div class="photo__button photo__take">
                <button @click="photoTake">Фото</button>
              </div> -->
            </div>
          </div>
          <div class="window__findings findings">
            <div class="findings__name" :class="$v.file.name.$error? 'findings__error' : ''">
              <label for="name" class="findings__input"><span>Имя:</span>
                <input 
                type="text" 
                name="name" 
                class="findings__input findings__error"
                placeholder="Иван"
                v-model="file.name">
              </label>
            </div>
            <div class="findings__name" :class="$v.file.surname.$error? 'findings__error' : ''" >
              <label for="surname" class="findings__input"><span>Фамилия:</span>
                <input 
                type="text" 
                name="surname" 
                class="findings__input"
                placeholder="Иванов"
                v-model.trim="file.surname" />
              </label>
            </div>
            <div class="findings__textarea" :class="$v.file.text.$error? 'findings__error' : ''">
              <textarea 
              rows="10" 
              cols="45" 
              name="text" 
              placeholder="Напишите что-нибудь"
              v-model="file.text"></textarea>
            </div>
            <div class="findings__name" :class="$v.file.address.$error? 'findings__error' : ''">
              <label for="address" class="findings__input"><span>Ваш сайт:</span>
                <input 
                type="text" 
                name="address" 
                class="findings__input"
                placeholder="xxxxxxxxxxx.xxx"
                v-model.trim="file.address" />
              </label>
            </div>
            <div class="findings__buttons">
              <button type="submit" class="btn findings__button">Отправить</button>
            </div>
          </div>
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
        theme: "",
        content: "",
      },
      consent: true,
      showVideo: false,
      showPreview: false,
      photoPreview: "",
      file: {
        image: "",
        name: "",
        surname: "",
        text: "",
        address: "",
      },
    }
  },
  methods: {
    closeWindow: function (){
     this.$emit('closeWindowFeedback');
    },
    photoTake: function (){
      this.showVideo = true;

      let video = document.querySelector('video.camera_stream');

      console.log(video.src);

      navigator.getUserMedia = (navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia);

      navigator.getUserMedia(
        {
          video: true
        },
        function(){
          video.src = window.URL.createObjectURL(stream);
          // video.src = window.URL.createObjectURL();
          // console.log(window.URL.createObjectURL(blob));
        },
        function(err){
          console.error(err);
        }
      );

      let hidden_canvas = document.querySelector('canvas');
      // let video = document.querySelector('video.camera_stream');
      let image = document.querySelector('img.photo');

      let width = video.videoWidth;
      let height = video.videoHeight;
      let context = hidden_canvas.getContext('2d');

      hidden_canvas.width = width;
      hidden_canvas.height = height;

      context.drawImage(video, 0, 0, width, height);

      var imageDataURL = hidden_canvas.toDataURL('image/png');

      // image.setAttribute('src', imageDataURL);
    },
    photoDownload: function (){

      let photoBlock = document.querySelector('.photo__img');

      this.file.fileImage = this.$refs.file.files[0];

      let reader = new FileReader();

      reader.addEventListener("load", function(){
        this.showPreview = true;
        this.photoPreview = reader.result;
        photoBlock.classList.add('photo__img-activ');
      }.bind(this), false);

      if ( this.file ) {
        if ( /\.(jpe?g|png|gif)$/i.test( this.file.fileImage.name ) ) {
          reader.readAsDataURL( this.file.fileImage );
        }
      }
      // console.log(e.target.files[0]);
    },
    sendForm: function (){
      if (this.$v.$invalid) {
        console.log(this.$v.file);
        this.$v.file.$touch();
      }
    }
  },
  validations: {
    file: {
      name: { required },
      surname: { required },
      text: { required },
      address: { required }
    }
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .window{
    position: fixed;
    z-index: 99999999999999;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    overflow: auto;
    display: flex;
    background-color: rgba(0,0,0,0.7);

    &__wrapper{
      width: 700px;
      height: 500px;
      border-radius: 10px;
      margin: auto;
      background-color: #ffffff;
    }
    &__wrapper>form{
      width: 100%;
      height: 100%;
    }
    &__title{
      width: 90%;
      height: 13%;
      padding-top: 2%;
      display: flex;
      justify-content: space-between;
      margin: auto;
      border-bottom: 1px solid rgba(45,55,79,0.15);
    }
    &__title>span{
      font-size: 1rem;
      color: #333;
    }
    &__close{
      width: 16px;
      height: 16px;
      cursor: pointer;
    }
    &__plus{
      transform: rotate(45deg);
      position: relative;
      width: 14px;
      height: 2px;
      background-color: #333;
      left: 0;
      top: 13px;
    }
    &__plus:after{
      content: "";
      position: absolute;
      background-color: #333;
      width: 2px;
      height: 15px;
      left: 6px;
      top: -6px;
    }
    &__block{
      display: flex;
      justify-content: space-around;
      width: 90%;
      height: 84%;
      margin: auto;
    }
    .photo{
      width: 30%;
      height: 70%;
      margin: auto 0;
      display: flex;
      flex-direction: column;
      justify-content: space-between;;

      &__img{
        width: 100%;
        height: 80%;
        text-align: center;
        overflow: hidden;
        background-image: url('../assets/modalWindow/unnamed.jpg');
        background-size: 100%;
        background-repeat: no-repeat;
      }
      &__img-activ{
        background: none;
      }
      &__buttons{
        width: 100%;
        height: 19.5%;
        display: flex;
      }
      &__button{
        width: 100%;
        cursor: pointer;
      }
      &__button>button{
        @include buttonMain(100%, 100%, 1rem);
        border-right: none;
        border-top: none;
        border-bottom: none;
      }
      &__button>label{
        @include buttonMain(100%, 100%, 1rem);
        border-right: none;
        position: relative;
        cursor: pointer;
        display: flex;
      }
      &__button>label>input{
        left: 0;
        top: 0;
        opacity: 0;
        width: 100%;
        height: 100%;
        position: absolute;
      }
      &__text{
        color: #ffffff;
        font-size: 1rem;
        margin: auto;
      }
      &__download{
        border-right: 1px solid #ffffff;
      }
      &__take{
        border-left: 1px solid #ffffff;
      }
      &__user{
        width: auto;
        height: 100%;
      }
      .camera_stream{
        width: 100%;
        height: 100%;
        background-color: #000;
      }
    }
    .findings{
      width: 60%;
      height: 99%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;

      &__name{
        display: flex;
        width: 100%;
        margin-bottom: 3%;
        height: 10%;
        border-bottom: 1px solid rgba(45, 55, 79, 0.15);
      }
      &__input{
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin: auto;
      }
      &__input>span{
        width: 25%;
        display: block;
        text-align: left;
      }
      &__input>input{
        width: 70%;
        border: none;
      }
      &__input>input::-webkit-input-placeholder{
        font-size: 1rem;
      }
      &__input>input:-moz-placeholder{
        font-size: 1rem;
      }
      &__textarea>textarea::-webkit-input-placeholder{
        font-size: 1rem;
      }
      &__textarea>textarea:-moz-placeholder{
        font-size: 1rem;
      }
      &__textarea{
        width: 100%;
        height: 40%;
        margin: auto;
      }
      &__textarea>textarea{
        width: 100%;
        height: 100%;
        border: none;
        resize: none;
      }
      &__buttons{
        width: 100%;
        height: 10%;
        margin: 0 auto;
        display: flex;
      }
      &__button{
        @include buttonMain(40%, 100%, 1rem);
        margin: 0 auto;
      }
      &__error{
        border-bottom: solid 1px #ff0000; 
      }
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
    &__consent{
      width: 65%;
      height: 100%;
      display: flex;
    }
    &__consent>label{
      font-size: 0.8rem;
      margin: auto;
      width: 100%;
      text-align: left;
    }
  }
  @media (max-width: 2600px){
  .window{

    .window__wrapper{
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
      font-size: 1rem;
    }
    .window__button{
      font-size: 1.3rem;
    }
  }
}
@media (max-width: 2100px){
  .window{

    .window__wrapper{
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
      font-size: 1rem;
    }
    .window__button{
      font-size: 1.3rem;
    }
  }
}
  @media (max-width: 1967px){
  .window{

    .window__wrapper{
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
      font-size: 0.8rem;
    }
    .window__button{
      font-size: 1rem;
    }
    .photo{
      height: 60%;
    }
  }
}
@media (max-width: 1740px){
  .window{

    .window__wrapper{
      width: 700px;
      height: 500px;
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
    .photo{
      height: 50%;
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
      font-size: 0.8rem;
    }
    .window__button{
      font-size: 1rem;
    }
    .findings{

      .findings__name{
      }
      .findings__input{
      }
      .findings__input>span{
        width: 20%;
      }
      .findings__input>input{
        width: 80%;
      }
      .findings__textarea{
      }
      .findings__textarea>textarea{
      }
      .findings__buttons{
      }
      .findings__button{
      }
    }
  }
}
@media (max-width: 1140px){
   .window{

    .window__wrapper{
      width: 700px;
      height: 500px;
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
    .findings{

      .findings__name{
      }
      .findings__input{
      }
      .findings__input>span{
        width: 20%;
      }
      .findings__input>input{
        width: 80%;
      }
      .findings__textarea{
      }
      .findings__textarea>textarea{
      }
      .findings__buttons{
        height: 10%;
      }
      .findings__button{

      }
    }
    .photo{
      height: 55%;
    }
  }
}
@media (max-width: 967px){
  .window{

    .window__wrapper{
      width: 600px;
      height: 500px;
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
    .photo{
      .photo__img{
      }
      .photo__img-activ{
      }
      .photo__buttons{
      }
      .photo__button{
      }
      .photo__button>button{
      }
      .photo__button>label{
      }
      .photo__button>label>input{
      }
      &__text{
        font-size: 0.9rem;
      }
      .photo__download{
      }
      .photo__take{
      }
      .photo__user{
      }
      .camera_stream{
      }
    }
    .findings{

      .findings__name{
      }
      .findings__input{
      }
      .findings__input>span{
        font-size: 0.8rem;
      }
      .findings__input>input{
      }
      .findings__input>input::-webkit-input-placeholder{
        font-size: 0.8rem;
      }
      .findings__input>input:-moz-placeholder{
        font-size: 0.8rem;
      }
      .findings__textarea{
      }
      .findings__textarea>textarea::-webkit-input-placeholder{
        font-size: 0.8rem;
      }
      .findings__textarea>textarea:-moz-placeholder{
        font-size: 0.8rem;
      }
      .findings__buttons{
      }
      .findings__button{
        font-size: 0.9rem;
      }
    }
    .window__block>label{
    }
    .window__block>label>span{
    }
    .window__consent{
    }
    .window__consent>label{
    }
  }
}
@media (max-width: 667px){
  .window{

    .window__wrapper{
      width: 500px;
      height: 400px;
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
      font-size: 0.88rem;
    }
    .window__textarea{
      height: 46%;
    }
    .window__textarea>textarea{
    }
    .window__textarea>textarea::placeholder{
      font-size: 0.88rem;
    }
    .window__buttons{
      height: 14%;
    }
    .window__consent{
    }
    .window__consent>label{
      font-size: 0.7rem;
    }
    .window__button{
      width: 30%;
      font-size: 0.8rem;
    }
    .photo{
      .photo__img{
        height: 78%;
      }
      .photo__img-activ{
      }
      .photo__buttons{
        height: 21%;
      }
      .photo__button{
      }
      .photo__button>button{
      }
      .photo__button>label{
      }
      .photo__button>label>input{
      }
      &__text{
      }
      .photo__download{
      }
      .photo__take{
      }
      .photo__user{
      }
      .camera_stream{
      }
    }
    .findings{

      .findings__name{
      }
      .findings__input{
      }
      .findings__input>span{
        width: 25%;
      }
      .findings__input>input{
         width: 70%;
      }
      .findings__input>input::-webkit-input-placeholder{
      }
      .findings__input>input:-moz-placeholder{

      }
      .findings__textarea{
        height: 35%;
      }
      .findings__textarea>textarea::-webkit-input-placeholder{
      }
      .findings__textarea>textarea:-moz-placeholder{
      }
      .findings__buttons{
        height: 13%;
      }
      .findings__button{
        width: 50%;
      }
    }
  }
}
@media (max-width: 540px){
  .window{

    .window__wrapper{
      width: 400px;
      height: 350px;
    }
    .window__wrapper>form{
    }
    .window__title{
      height: 13%;
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
      justify-content: space-between;
    }
    .window__block>label{
    }
    .window__block>label>span{
      width: 15%;
      font-size: 0.86rem;
    }
    .window__input{
      width: 75%;
      font-size: 0.8rem;
    }
    .window__textarea{
      height: 44%;
    }
    .window__textarea>textarea{
    }
    .window__textarea>textarea::placeholder{
      font-size: 0.8rem;
    }
    .window__buttons{
      width: 94%;
      height: 14%;
    }
    .window__consent{
    }
    .window__consent>label{
    }
    .window__button{
      width: 32%;
    }
    .findings{

      .findings__input{
        font-size: 0.7rem;
      }
      .findings__textarea>textarea{
        font-size: 0.7rem;
      }
      .findings__input>input{
        width: 70%;
      }
      .findings__input>span{
        width: 30%;
      }
      .findings__buttons{
        height: 14%;
      }
      .findings__buttons>button{
        font-size: 0.9rem;
         width: 60%;
      }
      &__button{
      }
    }
    .photo{
      height: 60%;
      width: 35%;
      
      .photo__img{
        height: 70%;
      }
      .photo__buttons{
        height: 23%;
      }
      .photo__text{
        font-size: 0.9rem;
      }
    }
  }
}
@media (max-width: 410px){
  .window{

    .window__wrapper{
      width: 300px;
      height: 470px;
    }
    .window__wrapper>form{
    }
    .window__title{
      height: 8%;
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
      height: 90%;
      flex-direction: column;
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
    .window__textarea>textarea::placeholder{
    }
    .window__buttons{
    }
    .window__consent{
    }
    .window__consent>label{
    }
    .window__button{
    }
    .photo{
      height: 50%;
      width: 70%;
      margin: 0 auto;

      .photo__img{
        height: 80%;
      }
      .photo__buttons{
        height: 20%;
      }
    }
    .findings{
      width: 90%;
      height: 50%;
      margin: 0 auto;
      padding-top: 5%;

      &__name{
        margin-bottom: 4%;
      }
      &__textarea{
        margin: 0 auto;
        height: 20%!important;
      }
      &__buttons{
        height: 20%!important;
      }
    }
  }
}
</style>
