<template>
  <div id="app">
    <router-view/>
  </div>
</template>

<script>
  export default {
    name: 'App',
    components: {
    },
    data(){
      return {
      }
    },
    methods: {
    },
    mounted() {
    }
  }
</script>

<style lang="scss">
@import '@/scss/style.scss';
@import '@/scss/_mixins.scss';
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
@media (max-width: 360px){
  p{
    font-size: 0.8rem;
  }
}

.articles{
  width: 100%;
  height: auto;

  .articles__text>p{
    font-size: 1.1rem;
  }
  .articles__subtitle{
    width: 100%;
  }
  .articles__subtitle>h6{
    font-size: 2rem;
    font-weight: 700;
  }
  .articles__title{
    width: 100%;
    height: 50px;
    display: flex;
  }
  .articles__title>h3{
    margin: auto;
    font-size: 2rem;
    font-weight: 700;
  }
  .articles__title>h5{
    margin: auto 0;
    font-size: 1.4rem;
    font-weight: 650;
  }
  .articles__list>li{
    list-style: disc;
    display: block;
    font-size: 1.1rem;
  }
  .articles__heading{
    width: 100%;
  }
  .articles__heading>h3{
    font-size: 1.5rem;
    font-weight: 600;
  }
  .articles__subheading{
    width: 100%;
    display: flex;
    text-align: center;
    height: 60px;
  }
  .articles__subheading>h5{
    margin: auto;
    font-size: 1.2rem;
    font-weight: 800;
  }
  .articles__cod{
    width: 100%;
    padding: 15px;
    background-color: #eae6ca;
    resize: none;
  }
  .articles__cod_svg{
    height: 190px;
  }
  .articles__show_result{
    width: 100%;
    height: 50px;
    margin: 40px;
  }
  .articles__show_result>button{
    @include buttonMain( 20%, 100%, 1rem);
  }
}
</style>
