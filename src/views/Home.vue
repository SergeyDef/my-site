<template>
  <div class="wrapper">
    <LateralFace class="lateral" id="lateral" />
    <ButtonLateralFace />
  	<div class="content">
      <MenuAdditional 
      class="menu-additional menu-additional_none"
      id="menuAdditional"
      @show="showEl"
      @hide="hideEl"/>
  		<MenuHeader class="block-animation block-anim-no" :menuHeaderLists="menuHeaderLists" />
  		<AboutSection class="block-animation block-anim-no"/>
  		<AboutMeSection class="block-animation block-anim-no" @showWindowMail="showMail"/>
  		<SkillsSection class="block-animation block-anim-no"/>
  		<EducationSection class="block-animation block-anim-no"/>
  		<PortfolioSection class="block-animation block-anim-no"/>
  		<TestomonialsSection class="block-animation block-anim-no" @showWindowFeedback="showFeedback"/>
  		<WorkSection class="block-animation block-anim-no"/>
  		<NewsSection class="block-animation block-anim-no"/>
  		<ContactSection class="block-animation block-anim-no"/>
  		<FooterSection class="block-animation block-anim-no"/>
      <WriteMe v-if="sendEmail" @closeWindowMail="closeMail"/>
      <ModalWindow v-if="commentWindow" @closeWindowFeedback="closeFeedback"/>
      <ScrollIndicatorCircle />
      <ScrollIndicatorLine />
  	</div>
  </div>
</template>

<script>
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
import WriteMe from '@/components/WriteMe.vue'
import LateralFace from '@/components/LateralFace.vue'
import ButtonLateralFace from '@/components/ButtonLateralFace.vue'
import ModalWindow from '@/components/ModalWindow.vue'
import ScrollIndicatorCircle from '@/components/ScrollIndicatorCircle.vue'
import ScrollIndicatorLine from '@/components/ScrollIndicatorLine.vue'

export default {
  name: 'Home',
  components: {
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
    WriteMe,
    LateralFace,
    ButtonLateralFace,
    ModalWindow,
    ScrollIndicatorCircle,
    ScrollIndicatorLine,
  },
  data(){
    return {
      sendEmail: false,
      commentWindow: false,
      menuHeaderLists: [
        {id: 1, title: 'Главная', href: '#main'},
        {id: 2, title: 'Обо мне', href: '#aboutMe'},
        {id: 3, title: 'Навыки', href: '#skills'},
        {id: 4, title: 'Образование', href: '#education'},
        {id: 5, title: 'Портфолио', href: '#portfolio'},
        {id: 6, title: 'Отзывы', href: '#reviews'},
        {id: 7, title: 'Опыт работы', href: '#workExperience'},
        {id: 8, title: 'Статьи', href: '#news'},
        {id: 9, title: 'Обратная связь', href: '#feedback'},
      ],
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
    showMail: function (){
      this.sendEmail = true;
    },
    closeMail: function (){
      this.sendEmail = false;
    },
    showFeedback: function (){
      this.commentWindow = true;
    },
    closeFeedback: function (){
      this.commentWindow = false;
    },
  },
  mounted() {
	const animItems = document.querySelectorAll('.block-animation');
    if (animItems.length > 0) {
      window.addEventListener('scroll', animOnScroll);
      function animOnScroll() {
        for (var i = 0; i < animItems.length; i++) {
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
            if (!animItem.classList.contains('block-anim-no')) {
              animItem.classList.remove('block-active');
            }
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
.content{
	width: 77%;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	min-height: 10100px;
}
  .menu-additional_activ{
    position: fixed;
    width: 77%;
    height: 100px;
    display: flex;
    top: 10px;
    z-index: 9999999;
    background-color: #fff;
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
@media (max-width: 1678px){
  .content{
      width: 90%;
    }
  .lateral{
    position: absolute;
    z-index: -1;
  }
}

@media (max-width: 1678px){
	.content{
		width: 90%;
	}
  .menu-additional_activ{
    width: 90%;
  }
  .menu-additional{
    right: 5%;
  }
}
@media (max-width: 1140px){
  .content{
  }
  .menu-additional_activ{

  }
  .menu-additional{
    display: none;
  }
}
@media (max-width: 967px){
  .content{
    width: 94%;
    min-height: 10700px;
  }
  .menu-additional_activ{

  }
  .menu-additional{
  }
}
@media (max-width: 667px){
  .content{
    min-height: 8700px;
  }
  .menu-additional_activ{

  }
  .menu-additional{
  }
}

@media (max-width: 1140px){
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
  .content{
    width: 94%;
    min-height: 10700px;
  }
}
@media (max-width: 667px){
  .content{
    min-height: 8700px;
  }
}
</style>
