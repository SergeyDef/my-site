<template>
	<div class="wrapper">
		<LateralFace class="lateral" id="lateral"/>
		<ButtonLateralFace />
	  <div class="gallery">
	  	<MenuHeader class="menuHeader" :menuHeaderLists="menuHeaderLists" />
	  	<div class="gallery__wrapper">
		  	<ul class="gallery__block">
		  		<li v-for="myJob in myJobs" v-bind:id="myJob.id" class="gallery__item">
		  			<div class="gallery__title">
		  				<h3>{{ myJob.jobName }}</h3>
		  			</div>
		  			<a v-bind:href="myJob.jobLink" class="gallery__link">
		  				<img :src="myJob.jobImg" v-dind:alt="myJob.jobAlt" class="gallery__img">
		  				<div class="gallery__description">
		  					<span>{{ myJob.jobDescription }}</span>
		  				</div>
		  			</a>
		  		</li>
		  	</ul>
	  	</div>
	  	<FooterSection class="footerSection" />
	  </div>
	</div>
</template>

<script>
	import MenuHeader from '@/components/MenuHeader.vue'
	import LateralFace from '@/components/LateralFace.vue'
	import ButtonLateralFace from '@/components/ButtonLateralFace.vue'
	import FooterSection from '@/components/FooterSection.vue'
	export default{
		name: 'gallery',
		components: {
			MenuHeader,
			LateralFace,
			FooterSection,
			ButtonLateralFace,
		},
		data(){
			return{
				myJobs: [
					{ 
						id: 1, 
						jobName: 'Дома и бани',
						jobDescription: 'интернет магазин - дипломная работа для колледжа',
						jobLink: '@/myWork/housesBaths/index.html', 
						jobIndicator: 'website', 
						jobImg: '@/assets/portfolio/0_5.png', 
						jobAlt: 'houses baths', 
					},
					{ 
						id: 2, 
						jobName: 'Барабанщици москвички', 
						jobDescription: 'Многостраничный сайт для музыкального ансамбля', 
						jobLink: '@/myWork/drummers/index.php', 
						jobIndicator: 'website', 
						jobImg: '@/assets/portfolio/0_3.png', 
						jobAlt: 'drummers', 
					},
					{ 
						id: 3, 
						jobName: 'BREDLI', 
						jobDescription: 'Одностраничный лендинг', 
						jobLink: '@/myWork/BREDLI/index.html', 
						jobIndicator: 'landing',
						jobImg: '@/assets/portfolio/0_2.png', 
						jobAlt: 'bredli', 
					},
					{ 
						id: 4, 
						jobName: 'Тату мастер Наталья', 
						jobDescription: 'Многостраничный сайт для тату мастера', 
						jobLink: '@/myWork/tatuNataley/index.html', 
						jobIndicator: 'website', 
						jobImg: '@/assets/portfolio/0_4.png', 
						jobAlt: 'tatu nataley', 
					},
					{ 
						id: 5, 
						jobName: 'Заказ квизов', 
						jobDescription: 'Лендинг для заказа интернет опросников', 
						jobLink: '@/myWork/quiz/index.html', 
						jobIndicator: 'landing', 
						jobImg: '@/assets/portfolio/0_6.png', 
						jobAlt: 'quiz', 
					},
					{ 
						id: 6, 
						jobName: 'Демо вебстудии', 
						jobDescription: 'Многостраничный сайт', 
						jobLink: '@/myWork/housesBaths/index.html', 
						jobIndicator: 'website', 
						jobImg: '@/assets/portfolio/0_1.png', 
						jobAlt: 'web studio', 
					},
					{ 
						id: 7, 
						jobName: 'Вязание на заказ', 
						jobDescription: 'Многостраничныйсайт (моя первая работа)', 
						jobLink: '@/myWork/needlework/index.html', 
						jobIndicator: 'website', 
						jobImg: '@/assets/portfolio/0_7.png', 
						jobAlt: 'needlework', 
					},
				],
				menuHeaderLists: [
					{id: 1, title: 'Главная', href: '#main'},
	        {id: 2, title: 'Обо мне', href: '#aboutMe'},
	        {id: 3, title: 'Навыки', href: '#skills'},
	        {id: 4, title: 'Образование', href: '#education'},
	        {id: 5, title: 'Портфолио', href: '#portfolio'},
	        {id: 6, title: 'Отзывы', href: '#reviews'},
	        {id: 7, title: 'Опыт работы', href: '#workExperience'},
	        {id: 8, title: 'Новости', href: '#news'},
	        {id: 9, title: 'Обратная связь', href: '#feedback'},
				],
			}
		},
	}
</script>

<style lang="scss" scoped>
@import '@/scss/style.scss';
@import '@/scss/_mixins.scss';
.wrapper{
  display: flex;
  padding-top: 1%;
  width: 100%;
  justify-content: space-evenly;
}
	.gallery{
		width: 77%;
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		/*min-height: 8700px;*/

		.menuHeader{
			height: 90px;
		}

		.gallery__block{
			display: flex;
			flex-wrap: wrap;
			background-color: #ffffff;
		}
		.gallery__item{
			width: 38%;
			height: 360px;
			margin: 5.8%;
			border: 1px solid #2196F3;
		}
		.gallery__item:hover{}
		.gallery__title{
			width: 100%;
			height: 60px;
			display: flex;
			background-color: #2196F3;
		}
		.gallery__title>h3{
			font-size: 1.2rem;
			text-transform: uppercase;
			margin: auto;
			color: #ffffff;
			text-align: center;
			text-shadow: 700;
		}
		.gallery__link{
			display: block;
			width: 100%;
			height: 240px;
			overflow: hidden;
		}
		.gallery__img{
			width: 120%;
			height: auto;
		}
		.gallery__description{
			display: none;
		}
		.footerSection{
			height: 100px;
			margin-top: 1%;
			margin-bottom: 1%;
		}
	} 
	.sidebar{
		.sidebar__bottom {
			width: 100%;
    	height: 73%;
		}
	} 
@media (max-width: 960px){
	.wrapper{
	}
	.gallery{
		width: 96%;

		.menuHeader{
		}

		.gallery__block{
		}
		.gallery__item{
			width: 90%;
			height: 260px;
		}
		.gallery__item:hover{}
		.gallery__title{
		}
		.gallery__title>h3{
		}
		.gallery__link{
			height: 200px;
		}
		.gallery__img{
		}
		.gallery__description{
		}
	} 
	.sidebar{
		.sidebar__bottom {
		}
	} 
}
</style>
