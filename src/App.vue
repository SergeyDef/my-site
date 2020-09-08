<template>
  <div id="app">
    <div class="wrapper">
      <LateralFace class="lateral" id="lateral" />
      <div 
      class="side side-pasiv"
      id="side" 
      v-on:click="sideShow">
        <div class="side__text">
          <span>п</span>
          <span>а</span>
          <span>н</span>
          <span>е</span>
          <span>л</span>
          <span>ь</span>
        </div>
        <div class="side__arrow side__arrow-right" id="arrow"></div>
      </div>
      <router-view/>
    </div>
  </div>
</template>

<script>
  import LateralFace from '@/components/LateralFace.vue'
  export default {
    name: 'App',
    components: {
      LateralFace,
    },
    data(){
      return {
      }
    },
    methods: {
      sideShow: function (){
        let lateral = document.getElementById('lateral');
        let side = document.getElementById('side');
        let arrow = document.getElementById('arrow');

        if (lateral.classList.contains("lateral")) {
          lateral.classList.remove('lateral');
          lateral.classList.add('lateral-adaptiv');

          side.classList.add('side-activ');
          side.classList.remove('side-pasiv');

          arrow.classList.add('side__arrow-left');
          arrow.classList.remove('side__arrow-right');
        } else {
          lateral.classList.add('lateral');
          lateral.classList.remove('lateral-adaptiv');

          side.classList.remove('side-activ');
          side.classList.add('side-pasiv');

          arrow.classList.remove('side__arrow-left');
          arrow.classList.add('side__arrow-right');
        }
      },
    },
    mounted() {
      // window.addEventListener('scroll', sandwichShow);
      // function sandwichShow(){
      //   let menu = document.getElementById('menuAdditional');

      //   if (window.pageYOffset >= 100) {
      //     menu.classList.remove('menu-additional_none');
      //   } else if (window.pageYOffset < 100) {
      //     menu.classList.add('menu-additional_none');
      //   }
      // }
    }
  }
</script>

<style lang="scss">
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';

html{
  height: 100%;
}
body{
  height: 100%;
  color: #121212;
}
ul{
  margin-left: 0;
  padding-left: 0;
}
li{
  list-style: none;
  display: inline-block;
}
a{
  text-decoration: none;
}
input:focus{
  outline:none;
}
textarea:focus{
  outline:none;
}
button:focus{
  outline: none;
}
.btn:focus{
  box-shadow: none;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  width: 100%;
  min-height: 100%;
  display: flex;
  background-color: #F6F6F6;
}
.wrapper{
  display: flex;
  padding-top: 1%;
  width: 100%;
  justify-content: space-evenly;

  .side{
    display: none;
  }
}

@media (max-width: 1678px){
  .wrapper{

    .content{
      width: 90%;
    }
    .lateral{
      position: absolute;
      z-index: -1;
    }
  }
}
@media (max-width: 1140px){
  .wrapper{
    position: relative;

    .content{
    }
    .side{
      transition: all 0.9s ease 0s;
      top: 30%;
      display: flex;
      justify-content: space-around;
      z-index: 99999999999;
      width: 45px;
      height: 140px;
      position: fixed;
      opacity: 0.6;
      cursor: pointer;
      background-color: #ffffff;
      border-radius: 0 100% 100% 0;
      box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
     -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
     -moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
    }
    .side:hover{
      opacity: 1;
    }
    .side-pasiv{
      left: 0;
    }
    .side-activ{
      left: 310px;
    }
    .side__text{
      margin: auto 0;
    }
    .side__text>span{
      display: block;
      padding-left: 10px;
      font-size: 0.88rem;
      font-weight: 800;
    }
    .side__arrow{
      width: 13px;
      height: 13px;
      margin: auto 0;
    }
    .side__arrow-left{
      transform: rotate(-135deg);
      border-top: 3px solid #2196F3;
      border-right: 3px solid #2196F3;
    }
    .side__arrow-right{
      transform: rotate(45deg);
      border-top: 3px solid #EE534F;
      border-right: 3px solid #EE534F;
    }
  }
  .lateral-adaptiv{
    display: block;
    z-index: 99999;
    position: fixed;
    left: 0;
  }
  .lateral{
    display: block;
    left: -310px;
  }
  #lateral{
    transition: all 0.9s ease 0s;
  }
}
@media (max-width: 967px){
  .wrapper{

    .content{
      width: 94%;

      min-height: 10700px;
    }
  }
}
@media (max-width: 667px){
  .wrapper{

    .content{

      min-height: 8700px;
    }
  }
}
</style>
