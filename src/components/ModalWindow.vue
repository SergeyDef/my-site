<template>
  <section class="window">
    <div class="window__wrapper">
      <form>
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
              <video autoplay="autoplay" id="video" class="camera_stream" v-show="showVideo">
                <img src="" class="photo__user">
              </video>
              <canvas></canvas>
            </div>
            <div class="photo__buttons">
              <div class="photo__button photo__download">
                <label>Загрузить
                  <input type="file" name="myFile" ref="file" accept="image/*" @change="photoDownload">
                </label>
              </div>
              <div class="photo__button photo__take">
                <button @click="photoTake" >Фото</button>
              </div>
            </div>
          </div>
          <div class="window__findings findings">
            <div class="findings__name">
              <label for="theme" class="findings__input"><span>Имя:</span>
                <input 
                type="text" 
                name="theme" 
                class="findings__input"
                placeholder="Иван"
                v-model="post.theme">
              </label>
            </div>
            <div class="findings__textarea">
              <textarea 
              rows="10" 
              cols="45" 
              name="content" 
              placeholder="Напишите что-нибудь"
              v-model="post.content"></textarea>
            </div>
            <div class="findings__buttons">
              <button 
              type="button" 
              class="btn findings__button"
              @click="sendEmail">Отправить</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</template>

<script>
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
      showVideo: false,
      showPreview: false,
      photoPreview: "",
      file: {
        fileText: "",
        fileImage: "",
      },
    }
  },
  methods: {
    closeWindow: function (){
     this.$emit('closeWindowFeedback');
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
    },
    photoTake: function (){
      navigator.getUserMedia(
        {
          video: true
        },
        function(straem){
          video.src = window.URL.createObjectURL(stream);
          video.play();
        },
        function(err){
          console.error(err);
        }
      );
    },
    takePicture: function(){
      let hidden_canvas = document.querySelector('canvas');
      let video = document.querySelector('video.camera_stream');
      let image = document.querySelector('img.photo');

      let width = video.videoWidth;
      let height = video.videoHeight;
      let context = hidden_canvas.getContext('2d');

      hidden_canvas.width = width;
      hidden_canvas.height = height;

      context.drawImage(video, 0, 0, width, height);

      var imageDataURL = hidden_canvas.toDataURL('image/png');

      image.setAttribute('src', imageDataURL);
    },
    photoDownload: function (){

      let photoBlock = document.querySelector('.photo__img');

      this.file.fileImage = this.$refs.file.files[0];

      console.log(this.file.fileImage);

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
  },
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .window{
    position: fixed;
    z-index: 99999999999;
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
      height: 13%;
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
      display: flex;
      justify-content: space-around;
      width: 90%;
      height: 84%;
      margin: auto;
    }
    .photo{
      width: 46%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-around;

      .photo__img{
        width: 100%;
        height: 80%;
        background-image: url('../assets/modalWindow/unnamed.jpg');
        background-size: 100%;
        background-repeat: no-repeat;
      }
      .photo__img-activ{
        background: none;
      }
      .photo__buttons{
        width: 100%;

        display: flex;
      }
      .photo__button{
        width: 50%;
      }
      .photo__button>button{
        @include buttonMain(100%, 100%, 1rem);
        border-right: none;
      }
      .photo__button>label{
        @include buttonMain(100%, 100%, 1rem);
        border-right: none;
        position: relative;
        cursor: pointer;
      }
      .photo__button>label>input{
        opacity: 0;
        width: 100%;
        height: 100%;
        position: absolute;
      }
      .photo__download{
        border-right: 1px solid #ffffff;
      }
      .photo__take{
        border-left: 1px solid #ffffff;
      }
      .photo__user{
        width: 100%;
        height: auto;
      }
    }
    .findings{
      width: 46%;
      height: 99%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;

      .findings__name{
        display: flex;
        width: 100%;
        height: 15%;
      }
      .findings__input{
        display: flex;
        width: 100%;
        margin: auto;
      }
      .findings__input>input{
        width: 80%;
        border: none;
      }
      .findings__textarea{
        width: 100%;
        height: 60%;
        margin: auto;
      }
      .findings__textarea>textarea{
        width: 100%;
        height: 100%;
        border: none;
        resize: none;
      }
      .findings__buttons{
        width: 100%;
        height: 13%;
        margin: 0 auto;
        display: flex;
      }
      .findings__button{
        @include buttonMain(50%, 100%, 1rem);
        margin: 0 auto;
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
  }
  @media (max-width: 2600px){
  .window{

    .window__wrapper{
      width: 40%;
      height: 40%;
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
      width: 40%;
      height: 50%;
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
      width: 40%;
      height: 50%;
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
  }
}
@media (max-width: 1740px){
  .window{

    .window__wrapper{
      width: 50%;
      height: 50%;
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
  }
}
@media (max-width: 1140px){
   .window{

    .window__wrapper{
      width: 65%;
      height: 60%;
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
@media (max-width: 667px){
  .window{

    .window__wrapper{
      width: 70%;
      height: 50%;
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
  }
}
@media (max-width: 540px){
  .window{

    .window__wrapper{
      width: 76%;
      height: 38%;
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
  }
}
@media (max-width: 410px){
  .window{

    .window__wrapper{
      width: 90%;
      height: 54%;
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
  }
}
</style>
