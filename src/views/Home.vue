<template>
	<div class="wrapper">
		<LateralFace id="lateral" />
		<div class="content">
      <MenuAdditional 
      class="menu-additional"
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
  methods: {
    showEl: function () {
      let menuAdditional = document.getElementById('menuAdditional');

      menuAdditional.classList.remove('menu-additional');
      menuAdditional.classList.add('menu-additional_activ');
    },
    hideEl: function () {
      menuAdditional.classList.add('menu-additional');
      menuAdditional.classList.remove('menu-additional_activ');
    }
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
		#lateral{
			display: none;
		}
	}
}
@media (max-width: 1140px){
  .wrapper{

    .content{
    }
    .menu-additional_activ{

    }
    .menu-additional{
      display: none;
    }
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
