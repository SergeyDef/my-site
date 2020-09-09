<template>
  <div class="article">
  	<MenuHeader class="menuHeader" :menuHeaderLists="menuHeaderLists" />
  </div>
</template>

<script>
	import MenuHeader from '@/components/MenuHeader.vue'
	export default{
		name: 'article',
		components: {
			MenuHeader,
		},
		data(){
			return{
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
	.article{
		width: 77%;
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		}
</style>
