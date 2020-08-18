<template>
	<div class="wrapper">
		<LateralFace/>
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
// @ is an alias to /src
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
  }
}
</script>

<style lang="scss">
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
