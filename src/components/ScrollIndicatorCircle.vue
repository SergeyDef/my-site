<template>
  <section class="indicator">
      <svg class="indicator__svg" viewBox="-10 -10 300 300">
        <circle class="indicator__circle" ref="circle" r="140" cx="140" cy="140" fill="none" stroke="crimson" stroke-width="20"></circle>
      </svg>
  </section>
</template>

<script>
export default {
  name: 'ScrollIndicator',
  props: {
  },
  data(){
    return{
    }
  },
  methods: {
  },
  mounted (){
    let scrollCircle = () =>{
      let circle = document.querySelector(".indicator__circle");
      let circleRadius = circle.getAttribute('r');
      let circleLength = 2 * Math.PI * circleRadius;
      circle.getAttribute('id', -circleLength);
      circle.getAttribute('stroke-dasharray', circleLength);
      circle.getAttribute('stroke-dashoffset', -circleLength);
      // console.log(circle.getAttribute('id'));
    };

    scrollCircle();

    window.addEventListener( 'scroll', () =>{
      scrollCircle();
    } );
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
.indicator{
  position: fixed;
  width: 50px;
  bottom: 30px;
  right: 42%;
  z-index: 999999999999;
  
  &__svg{
    width: 100%;
    height: auto;
    color: #f5f5f5;
  }
}
@media (max-width: 2600px){
}
@media (max-width: 2100px){   
}
@media (max-width: 1967px){}
@media (max-width: 1740px){}
@media (max-width: 1140px){
}
@media (max-width: 967px){
}
@media (max-width: 667px){
}
@media (max-width: 540px){
}
@media (max-width: 410px){}
</style>
