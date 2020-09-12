<template>
	<div class="wrapper">
		<LateralFace class="lateral" id="lateral" />
    <ButtonLateralFace />
	  <div class="article">
	  	<MenuHeader class="menuHeader" :menuHeaderLists="menuHeaderLists" />
	  	<div class="article__wrapper">
	  		<div><h1></h1></div>
	  		<div>
	  			<div><img src="" alt=""></div>
	  		</div>
	  	</div>
	  </div>
  </div>
</template>

<script>
	import LateralFace from '@/components/LateralFace.vue'
	import ButtonLateralFace from '@/components/ButtonLateralFace.vue'
	import MenuHeader from '@/components/MenuHeader.vue'

	export default{
		name: 'article',
		components: {
			LateralFace,
			ButtonLateralFace,
			MenuHeader,
		},
		data(){
			return{
				articles: [
					{id: 1, title: 'Векторная графика в веб разработке', titleSmall: {small: ''}, text: {paragraph: ''}, img: {src: '', alt: ''}, code: {}, },
					{id: 2, title: '', titleSmall: {small: ''}, text: {paragraph: ''}, img: {src: '', alt: ''}, code: {}, },
					{id: 3, title: '', titleSmall: {small: ''}, text: {paragraph: ''}, img: {src: '', alt: ''}, code: {}, },
					{id: 4, title: '', titleSmall: {small: ''}, text: {paragraph: ''}, img: {src: '', alt: ''}, code: {}, },
					{id: 5, title: '', titleSmall: {small: ''}, text: {paragraph: ''}, img: {src: '', alt: ''}, code: {}, },
					{id: 6, title: '', titleSmall: {small: ''}, text: {paragraph: ''}, img: {src: '', alt: ''}, code: {}, },
					{id: 7, title: '', titleSmall: {small: ''}, text: {paragraph: ''}, img: {src: '', alt: ''}, code: {}, },
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
	.article{
		width: 77%;
		display: flex;
		flex-direction: column;
		justify-content: space-around;

		.menuHeader{
			height: 90px;
		}
		.article__wrapper{
			display: flex;
			flex-wrap: wrap;
			background-color: #ffffff;
		}
	}
}
</style>
