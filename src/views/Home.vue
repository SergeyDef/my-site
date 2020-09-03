<template>
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
		<div class="content">
      <MenuAdditional 
      class="menu-additional menu-additional_none"
      id="menuAdditional"
      @show="showEl"
      @hide="hideEl"/>
			<MenuHeader/>
			<AboutSection/>
			<AboutMeSection/>
			<SkillsSection/>
			<EducationSection/>
			<PortfolioSection/>
			<TestomonialsSection/>
			<WorkSection/>
			<NewsSection/>
			<ContactSection/>
			<FooterSection/>
		</div>
	</div>
</template>

<script>
import LateralFace from '@/components/LateralFace.vue'
import MenuHeader from '@/components/MenuHeader.vue'
import AboutSection from '@/components/AboutSection.vue'
import AboutMeSection from '@/components/AboutMeSection.vue'
import SkillsSection from '@/components/SkillsSection.vue'
import EducationSection from '@/components/EducationSection.vue'
import PortfolioSection from '@/components/PortfolioSection.vue'
import TestomonialsSection from '@/components/TestomonialsSection.vue'
import WorkSection from '@/components/WorkSection.vue'
import NewsSection from '@/components/NewsSection.vue'
import ContactSection from '@/components/ContactSection.vue'
import FooterSection from '@/components/FooterSection.vue'
import MenuAdditional from '@/components/MenuAdditional.vue'

export default {
  name: 'Home',
  components: {
    LateralFace, 
    MenuHeader, 
    AboutSection,
    AboutMeSection,
    SkillsSection,
    EducationSection,
    PortfolioSection,
    TestomonialsSection,
    WorkSection,
    NewsSection,
    ContactSection,
    FooterSection,
    MenuAdditional,
  },
  data(){
    return {
    }
  },
  methods: {
    showEl: function () {
      let menuAdditional = document.getElementById('menuAdditional');

      menuAdditional.classList.remove('menu-additional');
      menuAdditional.classList.add('menu-additional_activ');
    },
    hideEl: function () {
      menuAdditional.classList.add('menu-additional');
      menuAdditional.classList.remove('menu-additional_activ');
    },
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
	const animItems = document.querySelectorAll('.block-animation');
    if (animItems.length > 0) {
      window.addEventListener('scroll', animOnScroll);
      function animOnScroll() {
        for (var i = 0; i <= animItems.length; i++) {
          const animItem = animItems[i];
          const animItemHeight = animItem.offsetHeight;
          const animItemOffset =offset(animItem).top;
          const animStart = 4;

          let animItemPoint = window.innerHeight - animItemHeight / animStart;
          if (animItemHeight > window.innerHeight) {
            animItemPoint = window.innerHeight - window.innerHeight / animStart;
          }

          if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
            animItem.classList.add('block-active');
          } else {
            animItem.classList.remove('block-active');
          }
        }
      }
      function offset(el) {
        const rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
      }

      setTimeout(() =>{
      	animOnScroll();
      }, 300);
    }
    window.addEventListener('scroll', sandwichShow);
    function sandwichShow(){
      let menu = document.getElementById('menuAdditional');

      if (window.pageYOffset >= 100) {
        menu.classList.remove('menu-additional_none');
      } else if (window.pageYOffset < 100) {
        menu.classList.add('menu-additional_none');
      }
    }
	}
}
</script>

<style lang="scss">
@import '@/scss/style.scss';
.wrapper{
	display: flex;
	padding-top: 1%;
	justify-content: space-evenly;

	.content{
		width: 77%;
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		min-height: 8700px;
	}
  .menu-additional_activ{
    position: fixed;
    width: 77%;
    height: 100px;
    top: 10px;
    z-index: 9999999;
  }
  .menu-additional{
    position: fixed;
    width: 50px;
    height: 50px;
    right: 1%;
    z-index: 9999999;
    top: 20px;
    border-radius: 20%;
    background-color: #F05251;
    box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
   -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
   -moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
  }
  .menu-additional_none{
    display: none;
  }
  .side{
    display: none;
  }
}

@media (max-width: 1678px){
	.wrapper{

		.content{
			width: 90%;
		}
    .menu-additional_activ{
      width: 90%;
    }
    .menu-additional{
      right: 5%;
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
    .menu-additional_activ{

    }
    .menu-additional{
      display: none;
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
    .menu-additional_activ{

    }
    .menu-additional{
    }
  }
}
@media (max-width: 667px){
  .wrapper{

    .content{

      min-height: 8700px;
    }
    .menu-additional_activ{

    }
    .menu-additional{
    }
  }
}
</style>
