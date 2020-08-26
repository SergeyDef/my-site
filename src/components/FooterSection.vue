<template>
  <section class="footer">
  	<div class="footer__wrapper">
     <div class="footer__text">
       <p>2020 автор <a href="">Sergey Def</a></p>
     </div>
     <div class="footer__link"><a href="">
       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
        <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
      </svg>
     </a></div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'FooterSection',
  props: {
    msg: String
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .footer{
		@include blockMain(100%, 1%);
			position: relative;

    .footer__wrapper{
      width: 100%;
      height: 100%;
      display: flex;
    }
    .footer__text{
      width: 93%;
      height: 100%;
      display: flex;
    }
    .footer__text>p{
      margin: auto 8%;
    }
    .footer__link{
      width: 7%;
      background-color: #F7F7F7;
    }
    .footer__link>a{
      width: 100%;
      height: 100%;
      display: flex;
    }
    .footer__link>a>svg{
      width: 80%;
      height: 80%;
      margin: auto;
    }
	}
  @media (max-width: 967px){
      .footer{
        height: 0.8%;

      .footer__wrapper{
      }
      .footer__text{
        width: 90%;
      }
      .footer__text>p{
        margin: auto 8%;
      }
      .footer__link{
        width: 10%;
      }
      .footer__link>a{
      }
    }
  }
  @media (max-width: 667px){
      .footer{
        height: 0.7%;

      .footer__wrapper{
      }
      .footer__text{
        width: 85%;
        height: 100%;
      }
      .footer__text>p{
      }
      .footer__link{
        width: 15%;
      }
      .footer__link>a{
      }
    }
  }
</style>
