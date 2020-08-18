<template>
  <div class="sidebar">
    <div class="logo">
      <div class="logo__img">
        <img src="@/assets/logo.png" alt="logo">
      </div>
      <div class="logo__content">
        <div class="logo__title">
          <h2>Sergey Def</h2>
        </div>
        <div class="logo__text">
          <span>Website and app </span>
          <a>development</a>
        </div>
      </div>
    </div>
    <div class="sidebar__bottom">
      <div class="sidebar__network network">
        <div class="network__block">
          <div class="network__img"><img src="@/assets/network/facebook.svg" alt=""></div>
          <div class="network__img"><img src="@/assets/network/instagram.svg" alt=""></div>
          <div class="network__img"><img src="@/assets/network/twitter.svg" alt=""></div>
          <div class="network__img"><img src="@/assets/network/wk.svg" alt=""></div>
        </div>
      </div>
      <div class="sidebar__myself">
        <div class="myself">
          <div class="myself__title">
            <h4>what`s in my mind</h4>
          </div>
          <div class="myself__text">
            <p>В первый раз сцепление на Донфенге накрылось после пробега в 32 тысячи километров! После снятия коробки выяснилось следущее.</p>
          </div>
        </div>
      </div>
      <div class="sidebar__summary">
        <div class="summary">
          <button type="button" class="btn summary__button">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-upload" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8zM5 4.854a.5.5 0 0 0 .707 0L8 2.56l2.293 2.293A.5.5 0 1 0 11 4.146L8.354 1.5a.5.5 0 0 0-.708 0L5 4.146a.5.5 0 0 0 0 .708z"/>
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 2z"/>
          </svg>
          Download</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LateralFace',
  props: {
    msg: String
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import url('https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet"');
.sidebar{
  width: 20%;
  height: 100%;
  padding-top: 0.4%;

  .logo{
    width: 100%;
    height: 4%;

    .logo__img{
      width: 100%;
      display: flex;
      padding-top: 5%;
      height: 55%;
      background-color: #ffffff;
    }
    .logo__img>img{
      width: 50%;
      height: 100%;
      margin: auto;
    }
    .logo__content{
      width: 100%;
      padding-top: 10%;
      height: 43.5%;
      background-color: #ffffff;
    }
    .logo__title>h2{
      font-family: 'Nanum Pen Script', cursive;
      font-size: 2rem;
    }
    .logo__text{
      width: 100%;
      padding-top: 4%;
      text-align: center;
    }
    .logo__text>span{
      font-size: 1rem;
      color: #CFCFCF;
    }
    .logo__text>a{
      font-size: 1rem;
      color: #2196F3;
      cursor: pointer;
    }
  }
  .sidebar__bottom{
    width: 100%;
    height: 96%;
  }
  .sidebar__network{
    width: 100%;
    height: 1%;
    display: flex;
    background-color: #ffffff;
  }
  .network{
    display: flex;
    justify-content: center;

    .network__block{
      display: flex;
      justify-content: space-around;
      width: 80%;
      margin: auto;
    }
    .network__img{
      background-color: #2196F3;
      width: 50px;
      height: 50px;
      display: flex;
      border-radius: 50%;
    }
    .network__img>img{
      width: 60%;
      margin: auto;
    }
    .network__img:hover{
      color: #2196F3;
      background-color: #CFCFCF;
    }
  }
  .sidebar__myself{
    width: 100%;
    height: 2.5%;
    margin-top: 3px;
    display: flex;
    background-color: #ffffff;
  }
  .myself{
    width: 100%;
    height: 80%;
    margin: auto;

    .myself__title{
      width: 100%;
      height: 25%;
      display: flex;
    }
    .myself__title>h4{
      @include headingMin(1rem, 700);
      margin: auto;
    }
    .myself__text{
      width: 100%;
      text-align: left;
      padding: 0 0 0 7%;
      color: #838383;
    }
  }
  .sidebar__summary{
    width: 100%;
    height: 96.3%;
    background-color: #ffffff;
    margin-top: 1%;

  }
  .summary{
    width: 99%;
    height: 2%;
    display: flex;

    .summary__button{
      @include buttonMain(46%, 40%, 1rem);
      margin: auto;
    }
  }
}
</style>
