<template>
	<div class="wrapper">
		<LateralFace />
		<div class="content">
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
}
</style>
